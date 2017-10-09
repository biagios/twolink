<?php
session_start();
$config = include('config.php');
include('Hybrid/Auth.php');
if(isset($_GET['provider']))
{

  $provider_name = $_REQUEST["provider"];

	try
	{
		// inlcude HybridAuth library
		// change the following paths if necessary
		// initialize Hybrid_Auth class with the config file
		$hybridauth = new Hybrid_Auth( $config );

		// try to authenticate with the selected provider
		$adapter = $hybridauth->authenticate( $provider_name );

		// then grab the user profile
		$user_profile = $adapter->getUserProfile();
	}

	// something went wrong?
	catch( Exception $e )
	{
         switch( $e->getCode() )
         {
                case 0 : echo "Unspecified error."; break;
                case 1 : echo "Hybridauth configuration error."; break;
                case 2 : echo "Provider not properly configured."; break;
                case 3 : echo "Unknown or disabled provider."; break;
                case 4 : echo "Missing provider application credentials."; break;
                case 5 : echo "Authentication failed The user has canceled the authentication or the provider refused the connection.";
                         break;
                case 6 : echo "User profile request failed. Most likely the user is not connected to the provider and he should to authenticate again.";
                         $authProvider->logout();
                         break;
                case 7 : echo "User not connected to the provider.";
                         $authProvider->logout();
                         break;
                case 8 : echo "Provider does not support this feature."; break;
        }

        echo "<br /><br /><b>Original error message:</b> " . $e->getMessage();

        echo "<hr /><h3>Trace</h3> <pre>" . $e->getTraceAsString() . "</pre>";

    }


    // check if the current user already have authenticated using this provider before
  	$user_exist = get_user_by_provider_and_id( "\"".$provider_name."\"", $user_profile->identifier );

  	// if the used didn't authenticate using the selected provider before
  	// we create a new entry on database.users for him
  	if( ! $user_exist )
  	{
      echo "user doesn't exist, create new account";
  		create_new_hybridauth_user(
  			$user_profile->email,
  			$user_profile->firstName,
  			$user_profile->lastName,
  			"\"" . $provider_name . "\"",
  			$user_profile->identifier
  		);
  	}else {
  	}

  	// set the user as connected and redirect him
  	$_SESSION["user_connected"] = true;
    $_SESSION["user"] = serialize($user_profile);
    $_SESSION["userId"] = $user_profile->identifier;
  	header("Location: http://my.twolink.co.uk/");
  }



  // We need this function cause I'm lazy

  function mysqli_query_excute( $sql )
  {
    $mysqli = new mysqli( "localhost", "TwoLink", "TLi100%tBSitW10/10", "twolink" );

  	$result = $mysqli->query($sql);

  	if(  ! $result )
  	{
  		die( printf( "Error: %s\n", mysqli_error( $mysqli ) ) );
  	}
  	return mysqli_fetch_object($result);
  }


  // get the user data from database by email and password

  function get_user_by_email_and_password( $email, $password )
  {
  	return mysqli_query_excute( "SELECT * FROM users_987232 WHERE email = '$email' AND password = '$password'" );
  }


  // get the user data from database by provider name and provider user id

  function get_user_by_provider_and_id( $provider_name, $provider_user_id )
  {
  	return mysqli_query_excute( "SELECT * FROM users_987232 WHERE hybridauth_provider_name = '$provider_name' AND hybridauth_provider_uid = '$provider_user_id'" );
  }


  // get the user data from database by provider name and provider user id

  function create_new_hybridauth_user( $email, $first_name, $last_name, $provider_name, $provider_user_id )
  {
  	// let generate a random password for the user
  	$password = md5( str_shuffle( "0123456789abcdefghijklmnoABCDEFGHIJ" ) );

  	mysqli_query_excute(
  		"INSERT INTO users_987232
  		(
  			email,
  			password,
  			first_name,
  			last_name,
  			hybridauth_provider_name,
  			hybridauth_provider_uid,
  			created_at
  		)
  		VALUES
  		(
  			'$email',
  			'$password',
  			'$first_name',
  			'$last_name',
  			'$provider_name',
  			'$provider_user_id',
  			NOW()
  		)"
  	);
  }




?>

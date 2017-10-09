<!-- Meta Tags -->
  <!-- Required meta tags -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php
ini_set('display_errors', 'Off');
ini_set('session.cookie_domain', '.twolink.co.uk' );
ini_set('session.cookie_httponly', '1');
session_start();
//session_regenerate_id();
function mysqli_query_excute( $sql )
{
  $mysqli = new mysqli( "localhost", "TwoLink", "TLi100%tBSitW10/10", "twolink" );

  $result = $mysqli->query($sql);
  if($result){
       // Cycle through results
      while ($row = $result->fetch_object()){
          $user_arr[] = $row;
      }
      // Free result set
      $result->close();
  }
  if(  ! $result )
  {
    die( printf( "Error: %s\n", mysqli_error( $mysqli ) ) );
  }
  return $user_arr;
}
error_reporting(E_ALL);

?>

<!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/heart/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/heart/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/heart/favicons/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/heart/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/heart/favicons/manifest.json">
  <link rel="mask-icon" href="/heart/favicons/safari-pinned-tab.svg" color="#171a1a">
  <link rel="shortcut icon" href="/heart/favicons/favicon.ico">
  <meta name="apple-mobile-web-app-title" content="Linker">
  <meta name="application-name" content="Linker">
  <meta name="msapplication-TileColor" content="#2d89ef">
  <meta name="msapplication-TileImage" content="/heart/mstile-144x144.png">
  <meta name="msapplication-config" content="/heart/browserconfig.xml">
  <meta name="theme-color" content="#ecf0f1">
  <meta name="description" content="Create your personal page, for free.">

<!-- Facebook -->
  <meta property="og:image:height" content="237">
  <meta property="og:image:width" content="453">
  <meta property="og:description" content="Create your personal page, for free.">
  <meta property="og:title" content="Linker">
  <meta property="og:image" content="/heart/social/facebook/og-image.jpg">
  <meta property="og:url" content="www.twolink.co.uk">

<!-- Google Verification -->
  <meta name="google-site-verification" content="KnKB_zfVVHCBL4IDZoHiHRrNQqYWquEztdVNSrbjemo"/>

  <!-- Le bootsrap (For scripts) & other -->
  <script src="/heart/js/TwoLink.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.2.6/gridstack.min.css" />
  <script type="text/javascript" src='//cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.2.6/gridstack.min.js'></script>

<!-- Stylesheets (Styles 2.0) -->
  <script>TwoLink.GetStyleSheet()</script>
  <noscript> <link rel="stylesheet" href="/heart/css/main-1.css"></noscript>



<!-- Fonts / Emojis-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet">

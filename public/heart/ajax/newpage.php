<?php
if ($_SESSION["user_connected"]) {
  print_r($_SESSION["user"]);

}

 $mysqlia = new mysqli( "localhost", "TwoLink", "TLi100%tBSitW10/10", "twolink" );

function mysqli_query_excute( $sql, $a = false )
{
  $mysqli = new mysqli( "localhost", "TwoLink", "TLi100%tBSitW10/10", "twolink" );
$user_arr;

  $result = $mysqli->query($sql);
  if(  ! $result )
  {
    die( printf( "Error: %s\n", mysqli_error( $mysqli ) ) );
  }
  if($result && $a){
      $user_arr = $result->fetch_all();
      $result->close();
  }

  return $user_arr;
}
$name = $_REQUEST['name'];
$name = htmlspecialchars($name);
$a = true;
while ($a) {
  $random = rand(100000000,999999999);
  $sql1 = "select pageId from pages_789765 where pageId =".$random;
  if(empty(mysqli_query_excute($sql1, true))){
    $a = false;
  }
}
if(empty($name) ){ $name = $random;}

echo $random;
//echo $name;
http_response_code(200);
//mysqli_query_excute( sprintf('Insert into pages_789765 (userId, pageId, pageName) VALUES (%d, %d, %s)',$_SESSION["userId"], $random, $name));
//echo sprintf('Insert into pages_789765 (userId, pageId, pageName) VALUES (%d, %d, %s)',$_SESSION["userId"], $random, $name);
?>

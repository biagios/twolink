<?php
$request = $_SERVER['REQUEST_URI'];
$request = htmlspecialchars($request);
$request = ltrim($request, '/');
session_start();
function mysqli_query_excute( $sql )
{
  $mysqli = new mysqli( "localhost", "TwoLink", "TLi100%tBSitW10/10", "twolink" );
$user_arr;
  $result = $mysqli->query($sql);
  if(  ! $result )
  {
    die( printf( "Error: %s\n", mysqli_error( $mysqli ) ) );
  }
  if($result){
       // Cycle through results
      $user_arr= $result->fetch_object();
      // Free result set
      $result->close();
  }

  return $user_arr;
}
$sql = "Select background_Image, background_color from pages_789765 where pageId = '$request'";
$retuned = mysqli_query_excute($sql);
//echo "<style>body{background-color:#" .$retuned["background_color"].";}</style>";
var_dump ($retuned);
 ?>

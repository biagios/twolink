<?php
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
      while ($row = $result->fetch_object()){
          $user_arr[] = $row;
      }
      // Free result set
      $result->close();
  }

  return $user_arr;
}
$name = $_POST['name'];
htmlspecialchars($name);
mysqli_query_excute( "Update pages_789765 set deleted=1 where pageId={$name} AND userId = {$_SESSION["userId"]}");

echo $random;
?>

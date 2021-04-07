<?php
session_start();
// print_r($_GET);print_r($_SESSION);die();
// die('SUCCESS');

if (!isset($_GET) || !isset($_SESSION)){
  die('invalid data');
} else {

  //gather data . sterilize
  $clubid = $_SESSION['user'];
  $playerid = $_GET['pid'];

  //update player's request status
  $query = "update req_tbl set status = 2 where p_reg_id=$playerid and cl_reg_id=$clubid";
  // echo $query2;
  require('database.php');
  mysqli_query($con, $query) or die("INSERT HAS FAILED");
  mysqli_close($con);
  die('SUCCESS');
}
?>

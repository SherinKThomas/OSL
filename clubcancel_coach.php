<?php
session_start();
// print_r($_GET);print_r($_SESSION);die();
// die('SUCCESS');

if (!isset($_GET) || !isset($_SESSION)){
  die('invalid data');
} else {

  //gather data . sterilize
  $clubid = $_SESSION['user'];
  $coachid = $_GET['pid'];

  //update player's request status
  $query = "update coach_req_tbl set status = 2 where c_reg_id=$coachid and cl_reg_id=$clubid";
  // echo $query2;
  require('database.php');
  mysqli_query($con, $query) or die("INSERT HAS FAILED");
  mysqli_close($con);
  die('SUCCESS');
}
?>

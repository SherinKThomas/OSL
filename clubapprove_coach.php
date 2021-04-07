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

  //insert player into the club
  $query = "insert into `club_coach` (cl_reg_id, c_reg_id, status) values ($clubid, $coachid, 1)";
  require('database.php');
  // echo $query;
  mysqli_query($con, $query) or die("INSERT FAILED");

  //update player's request status
  $query2 = "update coach_req_tbl set status = 1 where c_reg_id=$coachid and cl_reg_id=$clubid";
  // echo $query2;
  mysqli_query($con, $query2) or die("INSERT HAS FAILED");
  mysqli_close($con);
  die('SUCCESS');
}
?>

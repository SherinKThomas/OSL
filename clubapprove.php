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

  //insert player into the club
  $query = "insert into `club_members` (club_id, player_id, status) values ($clubid, $playerid, 1)";
  require('database.php');
  // echo $query;
  mysqli_query($con, $query) or die("INSERT FAILED");

  //update player's request status
  $query2 = "update req_tbl set status = 1 where p_reg_id=$playerid and cl_reg_id=$clubid";
  // echo $query2;
  mysqli_query($con, $query2) or die("INSERT HAS FAILED");
  mysqli_close($con);
  die('SUCCESS');
}
?>

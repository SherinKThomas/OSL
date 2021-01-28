<?php
// print_r($_GET);die();
include('database.php');
$userid = $_GET['userid'];
$clubid = $_GET['clubid'];
$query="insert into req_tbl ( p_reg_id, cl_reg_id, status) VALUES ($userid, $clubid, 0)";
if(mysqli_query($con,$query))
{
  mysqli_close($con);
  die("SUCCESS");
} else {
  mysqli_close($con);
  die('FAILED '.$query);
}
?>

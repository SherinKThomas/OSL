<?php
include('constants.php');

 ?>

 <?php
$vname = $_POST['venuename'];
$vloc = $_POST['venuelocation'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$price = $_POST['price'];
$stime = $_POST['stime'];
$etime = $_POST['etime'];

if(isset($_POST['submit']))
{
  $query = "INSERT INTO tbl_venue SET venue_name='$vname',venue_place='$vloc',contact='$contact',email='$email',price='$price',stime='$stime',etime='$etime'";
  $res = mysqli_query($con,$query);
  if(isset($res))
  {
    $_SESSION['msg'] = "Venue Added Successfully";
    header("location:addvenue.php");

  }

  else {
    echo "Error adding venue details. Please try again ";
  }
}





  ?>

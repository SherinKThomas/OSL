<?php
session_start();
include('database.php');
  $a=$_SESSION['user'];
  $name = $_POST['name'];
	$address = $_POST['address'];
	$sponsor = $_POST['sponsor'];
	$regnum = $_POST['regnum'];
	$place = $_POST['place'];
	$phone = $_POST['phone'];

if(isset($_POST['updatebtn']))
{

  $sql="UPDATE club_reg_tbl SET cl_name='$name', cl_address='$address', cl_sponsor='$sponsor', cl_reg_number='$regnum', cl_place='$place', cl_phone='$phone'  where cl_reg_id='$a'";
	$query = mysqli_query($con,$sql);
	if ($query)
	{
    ?>
    <script>alert("Updated successfull.");</script>;
    <?php
	   echo "<meta http-equiv='refresh' content='0;url=index_club.html'>";
	}
	else
	{
		echo "<script>alert('Something went wrong. Please try again');</script>";
	}
}
else
	{
		header('Location: index_club.php');
  }
?>

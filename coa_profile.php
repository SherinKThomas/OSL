<?php
session_start();
include('database.php');
  $a=$_SESSION['user'];
  $name = $_POST['name'];
	$address = $_POST['address'];
	$gender = $_POST['gender1'];
	$age = $_POST['age'];
	$pre_club = $_POST['preclub'];
	$exp = $_POST['exp'];
	$city = $_POST['city'];
	$phone = $_POST['phone'];

if(isset($_POST['updatebtn']))
{

  $sql="UPDATE coach_reg_tbl SET c_name='$name', c_address='$address', c_gender='$gender', c_age='$age', c_pre_club='$pre_club', c_exp='$exp', c_city='$city', c_phone='$phone'  where c_reg_id='$a'";
	$query = mysqli_query($con,$sql);
	if ($query)
  {
    ?>
    <script>alert("Updated successfull.");</script>;
    <?php
	   echo "<meta http-equiv='refresh' content='0;url=index_coach.php'>";
	}
	else
	{
		echo "<script>alert('Something went wrong. Please try again');</script>";
	}
}
else
	{
		header('Location: index_coach.php');
  }
?>

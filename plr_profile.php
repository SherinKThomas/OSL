<?php
session_start();
include('database.php');
  $a=$_SESSION['user'];
  $name = $_POST['name'];
	$address = $_POST['address'];
	$gender = $_POST['gender1'];
	$age = $_POST['age'];
	$pre_club = $_POST['preclub'];
	$position = $_POST['pos'];
	$city = $_POST['city'];
	$phone = $_POST['phone'];

if(isset($_POST['updatebtn']))
{

  $sql="UPDATE player_reg_tbl SET p_name='$name', p_address='$address', p_gender='$gender', p_age='$age', p_pre_club='$pre_club', p_position='$position', p_city='$city', p_phone='$phone'  where p_reg_id='$a'";
	$query = mysqli_query($con,$sql);
	if ($query)
	{
    ?>
    <script>alert("Updated successfull.");</script>;
    <?php
	   echo "<meta http-equiv='refresh' content='0;url=index_player.html'>";
	}
	else
	{
		echo "<script>alert('Something went wrong. Please try again');</script>";
	}
}
else
	{
		header('Location: index_player.php');
  }
?>

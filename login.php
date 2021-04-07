<?php
session_start();
include('database.php');

if (!isset($_POST['login']))
{
	header('Location: index.html');

} else {
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$password = md5($pass);

	$sql1 ="SELECT p_reg_id,p_email FROM player_reg_tbl WHERE p_email='$email' and p_password ='$password'";
	$sql2 ="SELECT c_reg_id,c_email FROM coach_reg_tbl WHERE c_email='$email' and c_password ='$password'";
	$sql3 ="SELECT cl_reg_id,cl_email FROM club_reg_tbl WHERE cl_email='$email' and cl_password ='$password'";

	$result = mysqli_query($con, $sql1);
	if (mysqli_num_rows($result)==0)	echo"<script>alert('Incorrect Password Or Email ');</script>";
	if (mysqli_num_rows($result)>0){
		//session
		$_SESSION['user'] = mysqli_fetch_array($result)['p_reg_id'];
		header('Location: index_player.php');
	} else {
		//Didnt' find player . . . checking coach
		$result = mysqli_query($con, $sql2);
		if (mysqli_num_rows($result)==0) echo"<script>alert('Incorrect Password Or Email ');</script>";
		if (mysqli_num_rows($result)>0){
			//session
			$_SESSION['user'] = mysqli_fetch_array($result)['c_reg_id'];
			header('Location: index_coach.php');
		} else {
			//Didn't find coach checking club
			$result = mysqli_query($con, $sql3);
			if (mysqli_num_rows($result)==0) echo"<script>alert('Incorrect Password Or Email ');</script>";
			if (mysqli_num_rows($result)>0)
			{
				//session
				$_SESSION['user'] = mysqli_fetch_array($result)['cl_reg_id'];
				header('Location: index_club.php');
			}
		}
	}
 }
?>

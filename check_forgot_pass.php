<?php
require_once("database.php");
if(!empty($_POST["email"]))
{
	$email= $_POST["email"];
	if (filter_var($email,FILTER_VALIDATE_EMAIL)===false)
	{
		echo "error : You did not enter a valid email.";
		echo "<script>$('#update').prop('disabled',true);</script>";

	}
	else
	{
		$sql ="SELECT p_email FROM player_reg_tbl WHERE p_email='$email'";
		$query= mysqli_query($con,$sql);
		$results = mysqli_fetch_array($query);
		$sql1 ="SELECT c_email FROM coach_reg_tbl WHERE c_email='$email'";
		$query1= mysqli_query($con,$sql1);
		$results1 = mysqli_fetch_array($query1);
		$sql2 ="SELECT cl_email FROM club_reg_tbl WHERE cl_email='$email'";
		$query2 = mysqli_query($con,$sql2);
		$results2 = mysqli_fetch_array($query2);
		if($results OR $results1 OR $results2)
		{
			echo "<span style='color:red'> Email Not Exists .</span>";
			echo "<script>$('#update').prop('disabled',true);</script>";
		}
		else
		{
			echo "<script>$('#update').prop('disabled',false);</script>";
		}
	}
}
if (!empty($_POST['pass']))
{
	$password = $_POST['pass'];
	$lcase = preg_match('@[a-z]@', $password);
	$ucase = preg_match('@[A-Z]@', $password);
	$number = preg_match('@[0-9]@', $password);
	$schar = preg_match('@[^\w]@', $password);
	if (!$lcase || !$ucase || !$number || !$schar || strlen($password)<8)
	{
		echo"<span style='color:red'> Enter Valid password .</span>";
		echo "<script>$('#passwordidupdate').focus();</script>";
	}
}
?>

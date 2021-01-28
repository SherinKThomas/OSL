<?php
session_start();
include('database.php');
session_destroy(); // destroy session
if(isset($_session['user']))
{

}
echo"<script>alert('sure! You want to exit?')</script>";
echo"<script>window.location.href='index.php'</script>";
exit();
?>

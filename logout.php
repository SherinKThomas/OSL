<?php
session_start();
include('database.php');
 // destroy session
if(isset($_SESSION['user']))
{
  session_destroy();
}
echo"<script>alert('sure! You want to exit?')</script>";
echo"<script>window.location.href='index.php'</script>";
exit();
?>

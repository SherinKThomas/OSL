
<html>
<head>
</head>
<body>
<div>
    <form action="club_profile.php" method="POST">
  <table class="table table-striped table-advance table-hover" style="margin:100px 200px;  width:50%; border:3px solid black;">
   <?php
   session_start();
   include('database.php');
  $a=$_SESSION['user'];
  $query="select cl_name, cl_username, cl_email, cl_address, cl_sponsor, cl_reg_number, cl_place, cl_phone from club_reg_tbl where cl_reg_id='$a'";
  $result=mysqli_query($con,$query);
  echo "<h2><center>Club Profile View </center></h2>";
  echo "<tr><th></th><th>Name</th><th>Username</th><th>Email</th><th>Address</th><th>Sponsor</th><th>Register Number</th><th>City</th><th>Phone</th></tr>";
  while($r=mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td><th>".$r['cl_name'].
       "</td><td>".$r['cl_username'].
       "</td><td>".$r['cl_email'].
       "</td><td>".$r['cl_address'].
       "</td><td>".$r['cl_sponsor'].
       "</td><td>".$r['cl_reg_number'].
       "</td><td>".$r['cl_place'].
       "</td><td>".$r['cl_phone']."</td><td></th>";


echo "</tr>";
}
   ?>
</table>
</form>
</div>
</body>
</html>

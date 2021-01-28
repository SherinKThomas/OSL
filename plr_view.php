
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div>
    <form action="plr_profile.php" method="POST">
      <div class="container">

  <table class="table table-striped table-responsive table-hover" style="border:3px solid black;">
   <?php
   session_start();
   include('database.php');
  $a=$_SESSION['user'];
  $query="select p_name, p_username, p_email, p_address, p_age, p_gender, p_position, p_pre_club, p_city, p_phone from player_reg_tbl where p_reg_id='$a'";
  $result=mysqli_query($con,$query);
  echo "<h2><center>Player Profile View </center></h2>";
  echo "<tr><th></th><th>Name</th><th>Username</th><th>Email</th><th>Address</th><th>Age</th><th>Gender</th><th>Position</th><th>Previous Club</th><th>City</th><th>Phone</th></tr>";
  while($r=mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td><th>".$r['p_name'].
       "</td><td>".$r['p_username'].
       "</td><td>".$r['p_email'].
       "</td><td>".$r['p_address'].
       "</td><td>".$r['p_age'].
       "</td><td>".$r['p_gender'].
       "</td><td>".$r['p_position'].
       "</td><td>".$r['p_pre_club'].
       "</td><td>".$r['p_city'].
       "</td><td>".$r['p_phone']."</td><td></th>";


echo "</tr>";
}
   ?>
</table>
</div>
</form>
</div>
</body>
</html>

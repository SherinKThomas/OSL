
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href='style.css' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body{
background: #5ca057;

}

</style>



</head>
<body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Player</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index_player.php">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="plr_profile.html">Update Profile</a></li>
			  <li><a href="plr_view.php">View Profile</a></li>
				 <li><a href="clublistview.php">View Club</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
<div>
    <form action="plr_profile.php" method="POST">
      <div class="container">

  <table class="table  table-responsive " style="border:3px solid black;">
   <?php
   session_start();
   include('database.php');
  $a=$_SESSION['user'];
  $query="select p_name, p_username, p_email, p_address, p_age, p_gender, p_position, p_pre_club, p_city, p_phone from player_reg_tbl where p_reg_id='$a'";
  $result=mysqli_query($con,$query);
  echo "<h2><center>Player Profile View </center></h2>";
  echo "<tr><th>Name</th><th>Username</th><th>Email</th><th>Address</th><th>Age</th><th>Gender</th><th>Position</th><th>Previous Club</th><th>City</th><th>Phone</th></tr>";
  while($r=mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>".$r['p_name'].
       "</td><td>".$r['p_username'].
       "</td><td>".$r['p_email'].
       "</td><td>".$r['p_address'].
       "</td><td>".$r['p_age'].
       "</td><td>".$r['p_gender'].
       "</td><td>".$r['p_position'].
       "</td><td>".$r['p_pre_club'].
       "</td><td>".$r['p_city'].
       "</td><td>".$r['p_phone']."</td>";


echo "</tr>";
}
   ?>
</table>
</div>
</form>
</div>
</body>
</html>

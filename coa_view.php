
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

  background-color: #5ca057;
}

</style>

</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Coach</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index_coach.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="coa_profile.html">Update Profile</a></li>
  			<li><a href="coa_view.php">View Profile</a></li>
  			 <li><a href="#">Player Statistic</a></li>
  			 <li><a href="coach_clublistview.php">View Club</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>


<div>
    <form action="coa_profile.php" method="POST">
  <table class="table table-striped table-advance table-hover" style="margin:100px 200px;  width:50%; border:3px solid black;">
   <?php
   session_start();
   include('database.php');
  $a=$_SESSION['user'];
  $query="select c_name, c_username, c_email, c_address, c_age, c_gender,c_exp, c_pre_club, c_city, c_phone from coach_reg_tbl where c_reg_id='$a'";
  $result=mysqli_query($con,$query);
  echo "<h2><center>Coach Profile View</center></h2>";
  echo "<tr><th></th><th>Name</th><th>Username</th><th>Email</th><th>Address</th><th>Age</th><th>Gender</th><th>Experience</th><th>Previous Club</th><th>City</th><th>Phone</th></tr>";
  while($r=mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td><th>".$r['c_name'].
       "</td><td>".$r['c_username'].
       "</td><td>".$r['c_email'].
       "</td><td>".$r['c_address'].
       "</td><td>".$r['c_age'].
       "</td><td>".$r['c_gender'].
       "</td><td>".$r['c_exp'].
       "</td><td>".$r['c_pre_club'].
       "</td><td>".$r['c_city'].
       "</td><td>".$r['c_phone']."</td><td></th>";


echo "</tr>";
}
   ?>
</table>
</form>
</div>
</body>
</html>

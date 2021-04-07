
<html>
<head>

  <link rel="stylesheet" href='style.css' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
  function deleterow(button)
  {
    var tb = document.getElementById('tbody');
    var row = button.parentElement.parentElement;
    // console.log(tb);console.log(row);
    tb.removeChild(row);
  }
  function cancel(userid, button)
  {
    // alert(clubid);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
        if(this.responseText=="SUCCESS"){
          deleterow(button)
        }
    }
};
xhttp.open("GET", "clubcancel_coach.php?pid="+userid, true);
xhttp.send();
  }
  function approve(userid, button)
  {
    // alert(clubid);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText);
          if(this.responseText=="SUCCESS"){
            deleterow(button);
            alert("Approved Successfully");
          }
      }
    };
xhttp.open("GET", "clubapprove_coach.php?pid="+userid, true);
xhttp.send();
  }
  </script>
  <style>
    table{
      display:inline-table !IMPORTANT;
    }

    body{
background: #5ca057;

    }
  </style>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Club</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index_club.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="club_profile.html">Update Profile</a></li>
        <li><a href="club_view.php">View Profile</a></li>
         <li><a href="plr_req.php">View Player Request</a></li>
         <li><a href="coach_req.php">View Coach Request</a></li>
          <li><a href="view_approvedplr.php">View Players</a></li>
          <li><a href="view_approvedcoach.php">View Coach</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>
<div>

      <div class="container">
<h2><center>Coach Request  </center></h2>
  <table class="table table-responsive table-hover">
   <?php
   session_start();
   include('database.php');
  $a=$_SESSION['user'];
  $query="select * from `coach_req_tbl` a inner join coach_reg_tbl b on a.c_reg_id=b.c_reg_id where status=0 AND cl_reg_id=$a";
  // die($query);
  $result=mysqli_query($con,$query) or die('Query Error');
  echo "<thead><th></th><th>Name</th><th>Email</th><th>Address</th><th>Age</th><th>Gender</th><th>Position</th><th>Previous Club</th><th>City</th><th>Phone</th><th colspan='2'>Action</th></thead><tbody id='tbody'>";
  if (!$result){
    die($query);
  }
  while($r=mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td><th>".$r['c_name'].
       "</td><td>".$r['c_email'].
       "</td><td>".$r['c_address'].
       "</td><td>".$r['c_age'].
       "</td><td>".$r['c_gender'].
       "</td><td>".$r['c_exp'].
       "</td><td>".$r['c_pre_club'].
       "</td><td>".$r['c_city'].
       "</td><td>".$r['c_phone']."</td></th>".
       "</td><td><button class='btn btn-primary' onclick=\"approve(".$r['c_reg_id'].", this)\">Approve</button>".
       "</td><td><button class='btn btn-danger' onclick=\"cancel(".$r['c_reg_id'].", this)\">Cancel</button>";

echo "</tr>";
}
   ?>
 </tbody>
</table>
</div>
</div>
</body>
</html>

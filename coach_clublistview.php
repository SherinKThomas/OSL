
<?php
session_start();
// print_r($_SESSION); die();?><html>
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
  <style media="screen">
    table{
      display:inline-table !IMPORTANT;
    }
    td, th{
      vertical-align: middle !IMPORTANT;
    }
    tr.hoverapply:hover>td.applybut{
      display:block;
    }

    body{
background-color: #5ca057;

    }
  </style>
  <script>
  function applytoclub(clubid, userid, button){
    // alert(clubid);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log(button);
       if (this.responseText == "SUCCESS"){
         button.innerHTML = "Request Pending";
         button.onclick = function(){;};
         button.classList.remove('btn-primary');
         button.classList.add('btn-warning');
       }
    }
};
xhttp.open("GET", "coach_applytoclub.php?clubid="+clubid+"&userid="+userid, true);
xhttp.send();
  }
  </script>
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
<div class="container">
  <h2><center>Club List View </center></h2>
  <table class="table table-responsive table-hover">
   <?php
   include('database.php');
  $a=$_SESSION['user'];
  $query="select cl_reg_id, cl_name, cl_email, cl_address, cl_sponsor, cl_place, cl_phone from club_reg_tbl";
  // die($query);
  $result=mysqli_query($con,$query); ?>
  <thead><th>Name</th><th>Email</th><th>Address</th><th>Sponsor</th><th>City</th><th>Phone</th><th>Status</th></thead><tbody>
<?php  while($r=mysqli_fetch_array($result))
  { ?>
    <tr class='hoverapplyX'>
    <th><?php echo $r['cl_name']; ?>
    </td><td><?php echo $r['cl_email']; ?>
    </td><td><?php echo $r['cl_address']; ?>
    </td><td><?php echo $r['cl_sponsor']; ?>
    </td><td><?php echo $r['cl_place']; ?>
    </td><td><?php echo $r['cl_phone']; ?>
    </td><td class='applybutX'><button class='btn <?php

    $query="select status from coach_req_tbl where c_reg_id=$a AND cl_reg_id={$r['cl_reg_id']}";
    $result2=mysqli_query($con,$query);
    if (mysqli_num_rows($result2) > 0 ){
      $row = mysqli_fetch_array($result2);
      $club_status = $row['status'];
    } else {
      $club_status = -1;
    }

    $buttonstring = "' onclick='applytoclub(". $r['cl_reg_id'].", ".$_SESSION['user'].", this);'>";
    $buttonstring0 = "'>";
    $buttonstring2 = "</button></td></tr>";

    switch ($club_status) {
      case 0:
      echo "btn-warning".$buttonstring0."Request Pending".$buttonstring2;
        break;
        case 1:
        echo "btn-success".$buttonstring0."Request Approved".$buttonstring2;
        break;
        case 2:
        echo "btn-danger".$buttonstring0."Request Rejected".$buttonstring2;
        break;
      default:
        echo "btn-primary".$buttonstring."Request to Join".$buttonstring2;
        break;
    }
} ?>
</tbody>
</table>
</div>

</body>
</html>

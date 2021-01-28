
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script>
function deleterow(button)
{
  console.log(button);

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
xhttp.open("GET", "clubcancel.php?pid="+userid, true);
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
          deleterow(button)
        }
    }
};
xhttp.open("GET", "clubapprove.php?pid="+userid, true);
xhttp.send();
  }
  </script>
</head>
<body>
<div>

      <div class="container">

  <table class="table table-striped table-responsive table-hover" style="border:3px solid black;">
   <?php
   session_start();
   include('database.php');
  $a=$_SESSION['user'];
  $query="select * from req_tbl a inner join player_reg_tbl b on a.p_reg_id=b.p_reg_id where status='0' AND cl_reg_id=$a";
  $result=mysqli_query($con,$query);
  echo "<h2><center>Player Request  </center></h2>";
  echo "<tr><th></th><th>Name</th><th>Email</th><th>Address</th><th>Age</th><th>Gender</th><th>Position</th><th>Previous Club</th><th>City</th><th>Phone</th><th>Action</th</tr>";
  if (!$result){
    die($query);
  }
  while($r=mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td><th>".$r['p_name'].
       "</td><td>".$r['p_email'].
       "</td><td>".$r['p_address'].
       "</td><td>".$r['p_age'].
       "</td><td>".$r['p_gender'].
       "</td><td>".$r['p_position'].
       "</td><td>".$r['p_pre_club'].
       "</td><td>".$r['p_city'].
       "</td><td>".$r['p_phone']."</td></th>".
       "</td><td><button class='btn-primary' onclick=\"approve(".$r['p_reg_id'].", this)\">Approve</button>".
       "</td><td><button class='btn-primary' onclick=\"cancel(".$r['p_reg_id'].", this)\">Cancel</button>";

echo "</tr>";
}
   ?>
</table>
</div>
</div>
</body>
</html>

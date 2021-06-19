<?php

include('adminheader.php');
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Venue</title>
    <link rel="stylesheet" href="admin.css">

<script>
function valname()
{
var letter=/^[A-Za-z]*$/;
var name=document.getElementById("na").value;

if((name=="")||(!name.match(letter)))
{
  window.alert("Please enter your name correctly");
return false;
}
}
function valphno()
{
  var unumber=document.getElementById("num").value;
  var phone=/^\d{10}$/;
  if (unumber.match(phone))
{
return true;
}
else
{
alert("You have entered an invalid phone number!");
}
}
function valemail()
{
  var mail=document.getElementById("emails").value;
  var val=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if (mail.match(val))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
}
}
function valprice()
{
  var unumber=document.getElementById("pri").value;
  var phone=/^\d{4}$/;
  if (unumber.match(phone))
{
return true;
}
else
{
alert("Enter a valid amount");
var sample = "";
document.getElementById("pri").this.value= sample;
}
}



</script>


  </head>
  <body>
    <br>
<h3>Add Venue</h3>
<br><br>

<?php
if(isset($_SESSION['msg']))
{
?>
<div class="success-msg">
<?php echo $_SESSION['msg'];
      unset($_SESSION['msg']);
 ?>
</div>
<?php
}

 ?>

<form action="addvenueaction.php" method="post">
  <div class="form-form-parent">
    <div class="formrowparent">
      <div class="formrow">
        <label>Venue Name</label> &nbsp <input type="text" name="venuename" id= "na" onblur="valname()" placeholder="Enter venue name" required>
      </div>
      <div class="formrow">
        <label>Venue location</label> &nbsp <input type="text" name="venuelocation" placeholder="Enter venue name"  required>
      </div>
      <div class="formrow">
        <label>Contact</label> &nbsp <input type="text" name="contact" id= "num" placeholder="Phone Number" onblur="valphno()" required>
      </div>
      <div class="formrow">
        <label>Email</label> &nbsp <input type="text" name="email" id="emails" placeholder="Enter venue email" onblur="valemail()" required>
      </div>
      <div class="formrow">
        <label>Price</label> &nbsp <input type="text" name="price" id="pri" placeholder="Enter venue price" onblur="valprice()" required>
      </div>
      <div class="formrow">
        <label>Set Time</label> &nbsp <input type="time" name="stime" > &nbsp <input type="time" name="etime" required >
      </div>
      <div class="formrow subbutton">
        <input type="submit" name="submit" value="Add Venue">

      </div>
    </div>
    </form>

    <div class="formrowparent">
<h3>Registered Venues</h3>
<?php
$query1 = "SELECT * FROM tbl_venue";
$res1 = mysqli_query($con,$query1);
?>
<table>
<tbody>
<tr>
<th>Venue Name</th>
<th>Venue Place</th>
<th>Contact</th>
<th>Price</th>
<th>Start time</th>
<th>End Time</th>
<th>Action</th>
</tr>
<?php
while($rows=mysqli_fetch_array($res1))
{
$vid = $rows['venue_id'];
$vname = $rows['venue_name'];
$vloc = $rows['venue_place'];
$contact = $rows['contact'];
$price = $rows['price'];
$stime = $rows['stime'];
$etime = $rows['etime'];
?>
<tr>
<td><?php echo $vname ?></td>
<td><?php echo $vloc; ?></td>
<td><?php echo $contact; ?></td>
<td><?php echo $price; ?></td>
<td><?php echo $stime; ?></td>
<td><?php echo $etime; ?></td>
<td> <a href="deletevenue.php?vid=<?php echo $vid; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>  &nbsp;</td>
</tr>
<?php
}
 ?>
</tbody>
</table>

    </div>




  </div>





<br><br><br><br><br><br>


  </body>
</html>

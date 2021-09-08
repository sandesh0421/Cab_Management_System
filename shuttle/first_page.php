<?php session_start();?>
<?php 
//$_SESSION['logged_user']=1;
//session_start();
$server="localhost";
$username="root";
$password="";
$db="safar";
$t= $_SESSION['logged_user'];
$conn = new mysqli($server,$username,$password,$db);
if($conn->connect_error){
    die("Connection failed".mysqli_connect_error());
}
  $result= $conn->query ("SELECT * FROM customer where cid = '$t'");
  $row = $result->fetch_assoc();
  $result1= $conn->query ("SELECT * FROM ride_details where cid = '$t' ORDER BY rid DESC LIMIT 1");
  $row1 = $result1->fetch_assoc();
  //echo mysqli_num_rows($result1);
  /*if (mysqli_num_rows($result)>0)
  {
    $count= mysqli_num_rows($result);
  }
 while($row = $res1->fetch_assoc()) 
{*/

  $n = $row['name'];
  $e = $row['email'];
  $g = $row['type'];
  $a = $row['amount'];
  $s = $row1['source'];
  $d = $row1['destination'];

//mysqli_close($conn);

?>




<!DOCTYPE HTML>
<html>
<head>
<title> Shuttle: Travel along! </title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>

  $(document).ready(function(){
            var timer = setInterval(function(){
                var cur = $("#tim").data('limit');
                var newtim = cur;
                $("#actual").text(cur + " Sec");
                if (newtim <= 0){
                    alert("Cancellation Time is UP!!!");
                    $("#tim").prop('disabled', true);
                    clearInterval(timer);
                    $("#countdown").css("color","transperent");
                    $("#actual").css("color","red");
                    $("#now").css("display","none");
                    $("#actual").text("Times UP!!");
                }
                else{
                    if(newtim == 5){
                        $("#actual").css("color","red");
                        $("#actual").fadeIn(500);
                        $("#actual").fadeOut(500);
                        var new1 = setInterval(function(){
                            $("#actual").fadeIn(500);
                            $("#actual").fadeOut(500);
                        },1000)
                    }
                    else{

                    }
                    var newtim = cur - 1;
                    $("#tim").data('limit',newtim);
                }
            },1000)
        })
</script>

<style>
.detail
{
	height:500px;
}
#tim{
  background-color: red;
  color: white;
}

#ufom{
  display: inline;
}

#pholder {
	max-height: 100px;
	max-width: 100px;
}

#now{
  margin: 0px;
}

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}

.wrapper {
	text-align: center;
}

#countdown{
  font-size: 20px;
  margin-top: 20px;
}

#actual{
  color: rgb(80, 233, 80);
  font-weight: 600;
  margin: 0px;
}

#footer {
  background-color: #e3f2fd;
   height: 50px;
    font-family: 'Verdana', sans-serif;
    padding: 20px;
}
</style>
</head>
<body style="background-color: powderblue;">
<!--header-->
  <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <div class= "navbar-header">
        <button type= "button" class="navbar-toggle" data-toggle= "collapse" data-target= "#bs-shuttle-navbar-collapse-1">
          <span class= "sr-only"> Toggle navigation </span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
         </button>
      <a class="navbar-brand" href="#"> Shuttle </a> 
    </div>
  <div class= "collapse navbar-collapse navbar-right" id="bs-shuttle-navbar-collapse-1">
    <ul class= "nav navbar-nav">
       <ul class= "nav navbar-nav">
      <li> <a href="./first_page.php"> Home </a> </li>
	<li> <a href="./about.html"> About </a> </li>
      <li> <a href="./homepage_shuttle.php"> Logout </a> </li>
      
    </ul>
    </ul>
    </div>  
  </div>
</nav>
<!--end of navbar-->
<!--generic info-->
<div class= "container-fluid">
 <div class= "col-md-4" >
  <div class= "panel panel-info" id="info" >
      <div class= "panel-heading">
        <h4 class= "panel-title" align="center"> Your Information </h4>
      </div> 
    <div class= "panel panel-body detail">
      <img id="pholder" class= "center" src="./images/placeholder.png">
      <br>
      <br>
      <table class = "table">
      <tr>
         <td align="center">Name: <?php echo "$n"; ?></td>
      </tr>
      
      <tr>
         <td align="center">E-mail: <?php echo "$e"; ?></td>
      </tr>
      <tr>
         <td align="center">Type: <?php echo "$g";?></td>
      </tr>
      <tr>
         <td align="center">Amount: <?php echo "$a";?></td>
      </tr>
      <tr>
         <td align="center">Latest Trip: <?php echo " $s to $d  ";?></td>
      </tr>
   </table>
   <br>
   <br>
   <!-- <div class= "wrapper">
    <button onclick="location.href='http://localhost/shuttle/GPS.php'" type="button" class="btn btn-success" value="track">
     Track your shuttle</button>
   </div> -->

      </div>
    </div>
  </div>
<!-- end of generic info-->
<div class="col-md-8">
  <div class="panel panel-success">
    <div class="panel-heading" align="center"><b>Ride Details</b></div>
    <h3 align="center">Ride History</h3>
    <div class="panel-body log">
      
          <table class="table table-bordered">
    <thead>
      <tr>
        <th>Driver Name</th>
        <th>Source</th>
        <th>Destination</th>
        <th>Fare</th>
        <th>Date and Time</th>
        
      </tr>
    </thead>
<tbody>

<?php
  $result2;
  $sql2= "SELECT * FROM ride_details where cid = '$t'";
  $result2 = mysqli_query ($conn,$sql2);
  while ($row2 = mysqli_fetch_assoc($result2))
  {
    $dn = $row2['dname'];
  $sc = $row2['source'];
  $ds = $row2['destination'];
  $fr = $row2['fare'];
  $ti = $row2['ride_time'];
  $myvar = $row2['rid'];
  ?>
      <tr>
        <td><?php echo "$dn"; ?></td>
        <td><?php echo "$sc"; ?></td>
        <td><?php echo "$ds"; ?></td>
        <td><?php echo "$fr"; ?></td>
        <td><?php echo "$ti"; ?></td>
      </tr>
<?php } ?>   
    </tbody>
  </table>
  <div class="wrapper">
  <button onclick="window.location='user.php'" class="btn btn-success" type="submit" >Finish</button>
  <form action="#" method="POST" id = "ufom">
  <button class="btn" name="canc" id = "tim" data-limit="29">Cancle</button></form>
  <div id = "countdown"><p id="now">Time left:</p> <p id="actual">30 Sec</p></div>
  </div>
    </div>
  </div>
</div>
</div>

<?php

if(isset($_POST['canc']))
{
$server="localhost";
$username="root";
$password="";
$db="safar";
$conn = new mysqli($server,$username,$password,$db);
if($conn->connect_error){
    die("Connection failed".mysqli_connect_error());
}
else
{
if($fr == 15){
  $comp = 7;
}
else{
  $comp = 5;
}
$user= $_SESSION['logged_user'];
$conn->query ("UPDATE customer SET amount=amount +'$comp' WHERE customer.cid='$user'");
$conn->query ("DELETE FROM ride_details WHERE rid='$myvar'");
mysqli_close($conn);
  echo '<script type="text/javascript">
        window.location="http://localhost/shuttle/book.php";
      </script>'; 
unset ($_POST['canc']);
}
}

?>

</body>
</html>

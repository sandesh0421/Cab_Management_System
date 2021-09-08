+<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title> Shuttle: Travel along! </title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2018.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
  function display()
  {
    alert("Account Created Successfully");
  }

</script>

<style >
  form,fieldset,body {
   padding: 20px;
}

input: invalid + span:after {
   content: 'X';
   color: #ff0000 ;
   padding-left: 5px;
}

input: invalid + span:after {
   content: '&#10004';
   color:#00ff00 ;
   padding-left: 5px;
}
</style>
<style>



#homepage
{

  height: 100px;
}
#team {
color: black;

}
#reason {
  height: 25%;
}
#help {
  padding-right:20px;
}
.carousel-indicators {
  bottom:0;
}
img {
  display: block;
  max-width:1000px;
  max-height:1000px;
  width: auto;
  height: auto;
}

input
{
  width: 20%;
}

#form1 {
  padding: 20px;
  margin: 0px;
  height: 450px;
}

#form2 {
  height: 470px;
  padding-top: 100px;
}

.tree {
  height: 540px;
  overflow-y: scroll;
}

.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 15px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}

/* Create a custom checkbox */
.checkmarks {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmarks {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmarks {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmarks:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmarks:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmarks:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

#photo {
  max-height: 400px;
  max-width: 250px;
  padding-top: 20px;
  padding-left: 20px;
}

#photo1 {
  max-height: 300px;
  max-width: 250px;
  padding-top: 20px;
  padding-left: 20px;
}

#adv {
  border-left: 6px solid white ;
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

<!--navbar-->
  <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <div class= "navbar-header">
        <button type= "button" class="navbar-toggle" data-toggle= "collapse" data-tarPOST= "#bs-shuttle-navbar-collapse-1">
          <span class= "sr-only"> Toggle navigation </span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
         </button>
      <a class="navbar-brand" href="#"> Shuttle </a> 
    </div>
  <div class= "collapse navbar-collapse navbar-right" id="bs-shuttle-navbar-collapse-1">
    <ul class= "nav navbar-nav">
        <div class= "collapse navbar-collapse navbar-right" id="bs-shuttle-navbar-collapse-1">
    <ul class= "nav navbar-nav">
      <li> <a href="#"> Home </a> </li>
      <li> <a href="./about.html"> About </a> </li>
         <li> <a href="feedback.php"> Feedback </a> </li>
    <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button> </li>
   
    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
    <form id = "form2" method="post" action="#">
    <div class="form-group has-feedback">
    <label for="username">Email id:</label>
    <input type="email" class="form-control" id= "email" placeholder="Email" name="email">
    <i class="glyphicon glyphicon-map-marker form-control-feedback"></i>
</div>
      <div class="form-group has-feedback">
    <label for="mail">Password</label>
    <input type="Password" class="form-control" id= "password" placeholder="Password" name="password">
    <i class="glyphicon glyphicon-map-marker form-control-feedback"></i>
</div>
<button type="submit" name="login" value="login" class="btn btn-primary">Login</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

   </ul>
    </div>  
  </div>
</nav>

<!--end of navbar-->
<div class= "container-fluid">
  <div class="col-md-4 w3-animate-left" id="team" align="center"> 
      <div class= "bg-light text-dark">
  
    <div class= "panel panel-info" style="overflow-y: scroll;">
      <div class= "panel-heading">
        <h4 class= "panel-title"> Sign-up with Shuttle </h4>
      </div> 

    <div class= "panel panel-body">
<form id="form1" action="#myModal1" method="POST">
    <div class="form-group has-feedback">
      
    <label for="name">Registration Number:</label>
    <input type="text" class="form-control" name="name" id= "name" placeholder="Name" requireed 
      pattern="[0-9]{2}[a-z]{3}[0-9]{4}" />
       
      <span class="note">Format(Example): 00aaa0000</span>
      
    <i class="glyphicon glyphicon-user form-control-feedback"></i>
    
</div>
  <div class="form-group has-feedback">
    <fieldset>
    <label for="email"> Vit Email id:</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required
     pattern="[a-z]{1-30}@vit[a-z]{2-5}.ac.in">
     <span class="note"> </span>

     <i class="glyphicon glyphicon-envelope form-control-feedback"></i>
     </fieldset>
  </div>
  <div class="form-group has-feedback">
    <label for="password">Password:</label>
    <input type="Password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
    
<!--  <div class="form-group has-feedback">
    <label for="age">Age:</label>
    <input type="number" class="form-control" id="age" name="age" placeholder="age">
    <i class="glyphicon glyphicon-cloud form-control-feedback"></i>
  </div> -->
<label class="container">User
  <input type="radio" checked="checked" name="radio" id="type" value="user">
  <span class="checkmark"></span>
</label>
<label class="container">Admin
  <input type="radio" name="radio" id="type" value="admin">
  <span class="checkmark"></span>
</label>


<label required class="container">I accept to the terms and conditions
  <input type="checkbox">
  <span class="checkmarks"></span>
</label>
  <button name="add" type="submit" value="add" class="btn btn-primary" onclick="display()">Submit</button>
  </form>
  </div>
</div>
</div>
</div>

<!--<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Account created successfully!</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
-->


   
    <!--<div class= "panel-body">
    <form id = "form2">
    <div class="form-group has-feedback">
    <label for="source">Source:</label>
    <input type="text" class="form-control" id= "source" placeholder="Enter Source Location">
    <i class="glyphicon glyphicon-map-marker form-control-feedback"></i>
</div>
      <div class="form-group has-feedback">
    <label for="destination">Destination:</label>
    <input type="text" class="form-control" id= "destination" placeholder="Enter Destination Location">
    <i class="glyphicon glyphicon-map-marker form-control-feedback"></i>
</div>


<button type="submit" class="btn btn-primary">Get Estimate</button>-->

<img src="images/bus.gif" style="float:right;width:800px;height:500px;" alt="A comfortable shuttle ride round the corner">
</form>
</div>
</div>
</div>
</div>

   <div class="container-fluid">
    <div class="col-md-12">
      <div class= "jumbotron" align="center">
        <h2> How can we help you? </h2>
      </div>
    </div>
   </div>
   <!--carousel type content-->
<div class="container-fluid">
<div class="col-md-3">
<div class="w3-container w3-2018-sailor-blue w3-hover-black w3-animate-bottom" id="adv">
  <img id="photo" src="./images/money.jpg"> 
  <h2>Easy credit transfer</h2>
  <p>You can easily add credit to your account</p>
</div>
</div>
<div class="col-md-3">
<div class="w3-container w3-2018-sailor-blue w3-hover-black w3-animate-bottom" id="adv">
  <img id="photo" src="./images/track.png"> 
  <h2>Track your shuttle</h2>
  <p>Easy tracking with our GPS tracking facility</p>
</div>
</div>
<div class="col-md-3">
<div class="w3-container w3-2018-sailor-blue w3-hover-black w3-animate-bottom" id="adv">
  <img id="photo" src="./images/security.jpg">  
  <h2>Security</h2>
  <p>Safe and secure money transfer and travelling  </p>
</div>
</div>
<div class="col-md-3" >
<div class="w3-container w3-2018-sailor-blue w3-hover-black w3-animate-bottom" id="adv">
  <img id="photo" src="./images/time.jpg">  
  <h2>Time management</h2>
  <p>Save your time by tracking when the nearest shuttle will arrive</p>
</div>
</div>
</div>
 
   </div>
 <!--end of carousel type content-->
<!-- footer-->



<!-- footer ends -->   
 
<?php
if(isset($_POST['add']))
{
$n= $_POST['name'];
$e= $_POST['email'];
$l= $_POST['password'];
$g= $_POST['radio'];
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
echo 'successful';
echo $n;
echo $e;
echo $l;
echo $g;
$conn->query ("INSERT INTO customer(name,email,password,type) VALUES ('$n','$e','$l','$g')");
unset ($_POST['add']);
}
}

if (isset($_POST['login']))
{
  $server="localhost";
$username="root";
$password="";
$db="safar";
$conn = new mysqli($server,$username,$password,$db);
if($conn->connect_error){
    die("Connection failed".mysqli_connect_error());
}
else {
  $u= $_POST["email"];
  $e= $_POST["password"];
  #$sql= "select * from customer where email='$u' AND password='$e' ";
  #$result= mysqli_query($conn, $sql);
  $sql1="select * from customer where email='$u' AND password='$e' AND type='user'";
  $sql2="select * from customer where email='$u' AND password='$e' AND type='admin'";
  $result1=mysqli_query($conn,$sql1);
  $result2=mysqli_query($conn,$sql2);
  $row1 = mysqli_fetch_assoc($result1);
  $row2 = mysqli_fetch_assoc($result2);
  if (mysqli_num_rows($result1)>0)
    {
       $_SESSION['logged_user']= $row1['cid'];
       echo '<script type="text/javascript">
        window.location="http://localhost/shuttle/user.php";
      </script>';
    } 
  else if (mysqli_num_rows($result2)>0)
    {
       $_SESSION['logged_user']= $row2['cid'];
       echo '<script type="text/javascript">
        window.location="http://localhost/shuttle/admin.php";
      </script>';
    } 
  else 
    {
        echo '<script type="text/javascript">
        window.location="http://localhost/shuttle/homepage_shuttle.php";
      </script>'; 
    }   
  unset ($_POST['login']);
}

}
 ?>


</body>
</html>
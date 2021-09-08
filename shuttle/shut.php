<?php session_start(); ?>
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

<style>
.detail
{
  height:500px;
}

#pholder {
  max-height: 100px;
  max-width: 100px;
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

#info {

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

//mysqli_close($conn);

?>
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
   </table>
   <br>
   <br>
   <div class= "wrapper">
   </div>

      </div>
    </div>
  </div>
<!-- end of generic info-->
<div class="col-md-8">
  <div class="panel panel-success">
    <div class="panel-heading" align="center"><b>Shuttle Details</b></div>
    <h3 align="center">Shuttle History</h3>
    <div class="panel-body log">
      
          <table class="table table-bordered">
    <thead>
      <tr>
        <th>Shuttle id</th>
        <th>Driver name</th>
        <th>Students waiting</th>
        <th>Vacancy</th>
        <th>Type of shuttle</th>
        
      </tr>
    </thead>
<tbody>

<?php
  $sql2= "SELECT * FROM shuttle_details";
  $result2 = mysqli_query($conn,$sql2);
  while ($row2 = mysqli_fetch_assoc($result2))
  {
    $dn = $row2['sid'];
    $sc = $row2['dname'];
    $ds = $row2['stud_wait'];
    $fr = $row2['vacancy'];
    $ti = $row2['type'];
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
  <button onclick="window.location='Shuttle Management.php'" class="btn btn-success" type="submit" >Back</button>
  </div>
    </div>
  </div>
</div>
</div>

</body>
</html>

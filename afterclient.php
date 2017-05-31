<?php
$conn=mysqli_connect("localhost","root","root","vcourt");

$a1=@$_GET['first'];
$a3=@$_GET['last'];
$a4=@$_GET['desc'];
$a5=@$_GET['cli'];

$ins="INSERT INTO `afterclient`(`Type`, `lawyer`, `Description`, `cname`) VALUES ('$a1','$a3','$a4','$a5')";
$runn= mysqli_query($conn,$ins); 

//echo "";

?>
<?php
session_start();
$conn=mysqli_connect("localhost","root","root","vcourt");
$email=$_SESSION[email];
?>
<html>
<head>
	<title>Client Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//fonts.googleapis.com/css?family=Aguafina Script" rel='stylesheet'>
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="chat.css">
    <link rel="stylesheet" type="text/css" href="proto-chat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top"  style="position: fixed;top: 0;width: 100%;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-family: Aguafina Script; font-size: 26px;">Virtual Court</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse">

	<a href="logout.php" class="btn navbar-btn navbar-right" style="color: #ffffff">Logout</a>
	<a href="#" class="btn navbar-btn navbar-right" style="color: #ffffff">Legislations</a>
	<a href="main.html" class="btn navbar-btn navbar-right" style="color: #ffffff">Home</a>
</div>
   <!-- <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Legislation</a></li>
      <li><a href="#">Logout</a></li>
    </ul> -->
  </div>
</nav>

<div class="container"  style="max-width:1800px;margin-top:80px;">
  <!--Grid -->
  <div class="w3-row" >
    <!-- Left Column -->
    <div class="w3-col m1">
    </div>
    <div class="w3-col m10">
    <!-- Profile -->
      <div class="profile">
          <div class="profile-container">
              <h2 style="text-align:center;"><b>Your Profile</b></h2>
              <h3 style="text-align:center;"><b>Client: <?php echo $email ?></b></h3>
              <hr>
              <p><i class="fa fa-pencil fa-fw" style="color:#607d8b;margin-right:16px; padding: 0px 16px;"></i>Welcome, <?php echo $email ?> </p>

          </div>
          </div>
<br><br><br><br>

		<font color=black><center><h1> Your case has been successfully filled.</h1></center></font>

          <br>
        </div>
        <div class="w3-col m1">
    </div>
</div>
</div>        

</body>
</html>
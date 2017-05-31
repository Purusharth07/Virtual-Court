<?php
session_start();
$conn=mysqli_connect("localhost","root","root","vcourt");
$email=$_SESSION[email];
?>

<html>
<head>
	<title>Lawyer Info</title>
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
	<a href="#" class="btn navbar-btn navbar-right" style="color: #ffffff">Home</a>
</div>
   <!-- <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Legislation</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul> -->
  </div>
</nav>
<!-- Side Buttons --> 
<div id="mySidenav" class="sidenav">
  <a href="#" id="about">About</a>
  <a href="#" id="blog">Blog</a>
  <a href="#" id="projects">Projects</a>
  <a href="#" id="contact">Contact</a>
</div>
<!-- Page Container -->
<div class="container"  style="max-width:1800px;margin-top:80px;">
	<!--Grid -->
	<div class="w3-row" >
		<!-- Left Column -->
		<div class="w3-col m4">
		<!-- Profile -->
			<div class="profile">
      		<div class="profile-container">
          		<h4 style="text-align:center;">Your Profile</h4>
          		<p style="text-align:center;">Lawyer: <?php echo $email ?></p>
          		<hr>
          		<p><i class="fa fa-pencil fa-fw" style="color:#607d8b;margin-right:16px; padding: 0px 16px;"></i> Lawyer, District </p>
         		<p><i class="fa fa-home fa-fw" style="color:#607d8b;margin-right:16px; padding: 0px 16px;"></i> Experience: </p>
         		<p><i class="fa fa-envelope fa-fw" style="color:#607d8b;margin-right:16px; padding: 0px 16px;"></i>E-Mail: </p>
      		</div>
      		</div>
      		<br>
      	</div>	
    		<div class="w3-col m8">
    		<div class="w3-row-padding">
        		<div class="w3-col m12">
            	<div style="box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12); border-radius:2px; color:#000; background-color: #fff;">
                	<div style="padding:0.01em 16px;padding:8px 16px;">
                    	<h2 style="opacity:0.60;text-align:center;">Law and Justice</h2>
                    	<p style="padding:8px 16px;font-size: 20px;">"Injustice anywhere is a threat to Justice Everywhere"</p>
                    	<p style="font-size: 17px;"> &nbsp &nbsp &nbsp &nbsp -Martin Luther King</p>
                    	<button type="button" style="border:none;display:inline-block;outline:0;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap;color:#fff;background-color: #607d8b;"><i class="fa fa-book"></i><a href="clients_for_lawyer.php">Client Available</a></button>
                    	<button type="button" style="border:none;display:inline-block;outline:0;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap;color:#fff;background-color: #607d8b;"><i class="fa fa-pencil"></i><a href="filecase.php">File A Case</a></button>
                	</div>
            	</div>
        		</div>
   			</div>
   			</div>

	</div>
	<div class="w3-row">
		<div class="w3-col m15">
			<div class="w3-row-padding">
				<div class="w3-col m12">
				<img src="Supreme-Court-of-India (2).jpg" style="width: 100%;margin-bottom: 16px;position: cover;">
				</div>
			</div>
		</div>
	</div>
</div>
?>
</body>
</html>

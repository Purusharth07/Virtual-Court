<?php
session_start();
$conn=mysqli_connect("localhost","root","root","vcourt");
$email=$_SESSION[email];
?>

<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File A Case</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="/images/favicon.ico" />
  <link href='//fonts.googleapis.com/css?family=Aguafina Script' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400, 600' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" >
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="/socket.io/socket.io.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

	
	</head>

<style>
.nav-wrapper {
	padding:0;
	height:90px;
}
 .input-field input {
	
	
}
body {
	font-family:'Montserrat',sans-serif;  
  background-image: url('images/Desktop-Cool.jpg');
  background-position: center;
  background-repeat: no-repeat;	
}
.input-field label {
	color:black;
	font-family: 'Montserrat',sans-serif;
	font-size: 20px;
	font-weight: bold;


}

#pic {
	height:150px;
	width:150px;
	margin:auto;
	

}
.card-panel {
	margin:auto;
	border:2px solid black;

}

</style>




<body>

 
<div class="col s12 l12 m12">


	<nav class="nav-wrapper #e3f2fd black z-depth-2" style=" height:60px ">
	<a href="#" data-activates="slide-out" class="button-collapse show-on-large "><i class="mdi-navigation-menu "></i></a>  <!-- Sidenav collapsible button which pops up when screen size decreases-->
		<!--<div class="nav-wrapper ">-->

		<div class="col s12 l12 m12 ">	
			<a href="" class="navbar-brand brand-logo center" style="font-family: Aguafina Script; font-size: 32px;">Virtual Court</a> 
    </div>
  </nav>
</div>

 <div class="col s3 l3 m3" >
	 <ul class="side-nav  black darken-4 " id="slide-out">   <!--SIDE NAV CODE -->

		<div class="center align" id="pic">
      <p>Virtual Court</p><br>
			<img src="F:/V.I.T/4th Sem/Open Source Programming/HackAthon/01.jpg" class="square responsive-img">
			</div>
    <li><a href="afterlogin.php" class="white-text text-lighten-4" style="font-family: 'Raleway',sans-serif;font-size: 15px;text-decoration: none">Back</a></li>
    <div class="divider"></div>
    <li><a href="legislation.php" class="white-text text-lighten-4" style="font-family: 'Raleway',sans-serif;font-size: 15px;text-decoration: none">Legislation</a></li>
    <div class="divider"></div>
   	<li><a href="/About"  class="white-text text-lighten-4"  style="font-family: 'Raleway',sans-serif;font-size: 15px;text-decoration: none">Home</a></li>
 
  </ul>
  
  </div>

<main>
 
 <form class="col s12 l12 m12" id="/signup" action="fil.php" method="GET">
 
<h4 style="text-align:center;">Your Profile</h4>
<p style="text-align:center;">Lawyer: <?php echo $email ?></p>
<hr>

 
 <div class="col s12 l12 m12">

<div class="container">
	<div class="col s12 l12 m12">
		<h4 style="font-family:'Raleway',sans-serif ;font-weight: 400" class="center-align">File A Case</h4>
		</div>
		</div>
		<br>

 <div class="container ">
 	<div class="card-panel  hoverable">
      <div class="row">
      <div class="loginform">
	  
      	  
        <div class="row">
        	<div class="input-field col s12 l6 m6">


        		<input type="text" placeholder="First name" id="firstname" name="fname" class="validate" required>
        		<label for="name">Lawyer's FirstName</label>
        		</div>
        	<div class="input-field col s12 m6 l6">
        	<input type="text" placeholder="Last name" id="lastname" name="lname" class="validate" required>
        		<label for="name">Lawyer's LastName</label>
        		</div>
        		</div> <!--end row -->
            <div class="row">
               <div class="input-field col s12 l6 m6">
                  
                  <input placeholder="Client Name"  id="username"  name="client" type="text" class="active validate" required>
                  <label for="username">Name Of Client</label>
               </div>
               <div class="input-field col s12 l6 m6">      
                  <label for="password">Name Of Defendant</label>
                  <input id="password" type="text" placeholder="Defendant Name" name="def" class="validate" required>          
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12 l6 m6">
                  <input placeholder="Offence Type" id="email" type="text" name="off" class="validate">
                  <label for="email">Type Of Offence:</label>
               </div>
            
            <div class="input-field col s12 l6 m6">
                  <input placeholder="Place Of Crime" name="place" type="text">
                  <label for="adress"> Place Of Crime </label>
            </div>
          
            </div>			
            <div class="row">
               <div class="input-field col s12 l6 m6">
           
                  
                  <label for="address" style="font-size: 20px;">Decription Of Crime </label>
                 <!-- <input type="text" placeholder="Detail" id="mobileno" name="mobileno" class="validate" required> -->
                 <textarea rows="20" cols="10" name="desc">Information</textarea>
               </div>
            <div class="input-field col s12 l6 m6">
                   <span style="font-size: 20px;"><b>Copy of F.I.R </b></span> <br>
                  <input placeholder="F.I.R" name="fir" type="file">
                  
            </div>
            </div>
           <div class="input-field col s12 l12 m12">
           	  <input type="date" id="dateofbirth" name="date" class="datepicker">
           	  <label for="date" style="font-size:10px ">Date of Crime</label>
           	</div>  
           <div class="container">
                <div class="col s12 m12 l12 center-align">
                <input type="submit" class="btn btn-warning btn-lg" value="File Case">
                </div>
          </div>

         </form> 
         </div> 
         </div>
         </div>   
         </div>

         <br>
 <hr> 




         

         </main>


     <script type="text/javascript">
     	$(".button-collapse").sideNav();



     	$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 60// Creates a dropdown of 15 years to control year
  });
        
     </script>
   

   
   

     <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>





</body>
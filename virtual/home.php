<html>
<head>
<title>
Virtual Court
</title>

<style>
#about{
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 5em;
height:30%;
border-right: 1px solid gray;
background: url("2.jpg");
}

#welcome {
color:black;
margin-left: 170px;
    padding: 1em;
    overflow: hidden;
height : 50%;
background: url("4.jpg");
}

#comlog {
font-weight:bold;
float : left;
margin-left : 340px;
}

#stulog {
font-weight : bold;
float :right;
margin-right : 340px;
}

</style>
</head>
<body>
<?php
$a=$_GET[x];
?>
<header>
<img src ="1.jpg" height= "50%" width=100%>
</header>

<div id="about">
	
	<h4><a href="about.php"> About us.</a></h4><br>
	<h4><a href="faq.php"> FAQ </a></h4>
	
</div>


<div id="welcome">
<h2 align ="middle"> Welcome XYZ</h2>
<hr>
<br><br><br>
<h3><span id="comlog"><a href=judge.php>Judge Information</a></span></h3>
<h3><span id="stulog">File a Case</span></h3><br><br><br><br>


</div>
</body>


</html>
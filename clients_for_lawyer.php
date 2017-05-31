<!DOCTYPE html>
<html lang="en">
<head>
  <title>Clients</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Virtual Court</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/virtual/main.html">Home</a></li>
    </ul>
	<a href="logout.php" class="btn navbar-btn navbar-right" style="color: #ffffff">Logout</a>
	<a href="#" class="btn navbar-btn navbar-right" style="color: #ffffff">Legislations</a>
	<a href="main.html" class="btn navbar-btn navbar-right" style="color: #ffffff">Home</a>
  </div>
</nav>

<?php
$conn=mysqli_connect("localhost","root","root","vcourt");

$sql= "SELECT cname, Type, lawyer, Description FROM afterclient";
$result = mysqli_query($conn, $sql);

$rows=mysqli_num_rows($result);
if($rows>0)
{
	
$i=0;
//for($j=1;$j<=$rows;$j++){
	while($row = mysqli_fetch_array($result)) {
  echo '
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading" style="text-align: center; font-size: 1.2em;"><b>Client' .'</b></div>
        <div class="panel-body">';
		
		//while($row = mysqli_fetch_assoc($result)) {
          echo '<p>
            <label>Name :  </label>';
            echo $row["cname"];
          echo '</p>';
		  
          echo'<p>
            <label>Case Type :  </label>';
           echo $row["Type"];
          echo '</p>';
          echo '<p>
            <label>Against :  </label>';
            echo $row["lawyer"];
          echo '</p>';
          echo '<p>
            <label>Description :  </label>';
           echo $row["Description"];
          echo'</p>';
		       echo '</div>
      </div>
    </div>';
    }
}

else{
	echo " No Client Available";
}
?>	



</body>
</html>
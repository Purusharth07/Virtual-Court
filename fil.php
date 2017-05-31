<?php
$conn=mysqli_connect("localhost","root","root","vcourt");

$a1=$_GET['fname'];
$a3=$_GET['lname'];
$a4=$_GET['client'];
$a5=$_GET['def'];
$a6=$_GET['off'];
$a7=$_GET['place'];
$a8=$_GET['desc'];
//$a9=$_GET['date'];
//$a10=$_FILES['fir'];
//$product_img1=$_FILES['fir']['name'];
//$tmp_name1=$_FILES['fir']['tmp_name'];
//move_uploaded_file($tmp_name1,"product_images/$product_img1");



$ins="INSERT INTO `pil`(`fname`, `lname`, `client`, `defendant`, `offense`, `place`, `description`) VALUES ('$a1','$a3','$a4','$a5','$a6','$a7','$a8')";
$runn= mysqli_query($conn,$ins); 

echo "<center><h1> Your case has been successfully filled.</h1></center>";

?>
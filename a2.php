<?php
$conn=mysqli_connect("localhost","root","root","vcourt");

$a1=$_GET['name'];
$a3=$_GET['email'];
$a4=$_GET['pass'];




$res=mysqli_query("select * from client where email='$a3'");
$cnt=mysqli_num_rows($res);
if($cnt==0)
{
	$ins="INSERT INTO `client`(`Name`, `Email`, `Password`) VALUES ('$a1','$a3','$a4')";
	$runn= mysqli_query($conn,$ins); 
	header("location:form555.php?x=2");
}
else
{
	header("location:form555.php?x=1");
}
?>
<?php

$conn=mysqli_connect("localhost","root","root","vcourt");

$sql= "SELECT cname, Type, lawyer, Description FROM afterclient";
$result = mysqli_query($conn, $sql);

$rows=mysqli_num_rows($result);

if($rows>0)
{
	while($row = mysqli_fetch_assoc($result)) {
		echo "client name: " . $row["cname"]. "  Type: " . $row["Type"]. "  against " . $row["lawyer"]. "  Description"  . $row["Description"];
}
}
else
{
	echo "bencho";
}
?>
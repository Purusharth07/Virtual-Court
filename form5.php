<!DOCTYPE html>
<html>
	<head>
		<title>
			Login Form
		</title>
		  <link rel="stylesheet" href="style1.css">
	</head>
	<body>
		<div class="navbar_ele">
    		<img src="1.jpg" height="60" width="80" id="image_head" style="float:left;">
		<ul class="list" style="margin-right:100px;">
			<li id="quest">WHO ARE YOU &nbsp ?? &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp -->> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>		
			<li><a href="form5.php" position="fixed">JUDGE</a></li>
			<li><a href="form55.php" position="fixed">LAWYER</a></li>
			<li><a href="form555.php" class="dropbtn2" position="fixed">CLIENT</a>
       </li> 
	</div>
	</ul>
	</div>
		<div class="login_page" style="float:left;margin-top:100px; margin-left:80px; padding:10px;">
		<form action="logjud.php" method="GET">
			<h1>LOGIN</h1>
			<br>
			<label>Email <span style="color:red;">*</span></label>
			<br><br>
			<input type="text" name="email" style="height:40px; width:550px; background-color:#f2f2f2; border:1px solid #d9d9d9;" required>
			<br><br>
			<label>Password <span style="color:red;">*</span></label>
			<br><br>
			<input type="password" name="pass" style="height:40px; width:550px; background-color:#f2f2f2;  border:1px solid #d9d9d9;" required>
			<br><br><br>
			<input class="submit" type="submit" style="height:48px; width:85px; font-size:1.2em;">
			<br><br>
			<a href="#" style="color:red; font-weight:bold; font-size:1.2em;">Lost your password ?</a>
		</form>	
		<?php
				$a=@$_GET[x];
				if($a==3)
				{
					echo"<font color=red ><center>*User Id/Password invalid</center></font>";
				}
			?>
		</div>
		

		<div class="register" style="float:right; margin-top:100px; padding:5px; padding-left:48px; margin-right:50px; border-left:1px solid #d9d9d9;">
		<form action="a3.php" method="GET">
			<h1>REGISTER</h1>
			<br>
			
			<label>Name <span style="color:red;">*</span></label>
			<br>
			<input type="text" name="name" style="height:20px; width:550px; background-color:#f2f2f2; border:1px solid #d9d9d9;" required>
			<br>
			
			<label>Exprience <span style="color:red;">*</span></label>
			<br>
			<input type="text" name="exp" style="height:20px; width:550px; background-color:#f2f2f2; border:1px solid #d9d9d9;" required>
			<br>

			<label>Court <span style="color:red;">*</span></label>
			<br>
			<input type="text" name="court" style="height:20px; width:550px; background-color:#f2f2f2; border:1px solid #d9d9d9;" required>
			<br>
			
			<label>Email address <span style="color:red;">*</span></label>
			<br>
			<input type="email" name="email" style="height:20px; width:550px; background-color:#f2f2f2; border:1px solid #d9d9d9;" required>
			<br>
			
			<label>Password <span style="color:red;">*</span></label>
			<br>
			<input type="password" name="pass" style="height:20px; width:550px; background-color:#f2f2f2;  border:1px solid #d9d9d9;" required>
			<br>
			
			<label>Register as <span style="color:red;">*</span></label>
			<br>
			<input type="text" placeholder="JUDGE" style="height:20px; width:550px; background-color:#f2f2f2;  border:1px solid #d9d9d9;" required>
			<br><br><br>
			<input  class="submit" type="submit" style="height:48px; width:85px; font-size:1.2em;">

			<?php
				$a=@$_GET[x];
				if($a==1)
				{
					echo"<tr bgcolor=yellow><td colspan=2><font color=red size=5><center>User Already exists</center></font></td></tr>";
				}
				if($a==2)
				{
				echo"<tr bgcolor=pink><td colspan=2><font color=blue size=3><center>User created.Please Login</center></font></td></tr>";
				}
			?>

		</form>	
		</div>
	</body>

<style>
body{
	font-family: "Segoe UI";
	background-image: none;
}
	
label{
	font-size: 1.3em;
}
input{
	font-size: 1.3em;
	padding:3px;
	border-radius: 5px;

}
h1{
	letter-spacing: 2px;
}
.submit{
	background-image:linear-gradient(to right,#14b1bb,#13a4da);
	border:none;
	border-radius: 5px;
	color:white;
}
.submit:hover{
	transform: translateY(8px);
	transition: 1s;
}
</style>	

</html>
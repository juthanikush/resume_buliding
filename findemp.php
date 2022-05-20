<?php
session_start();
$mes="";
if(isset($_POST['btn1']))
{
	if(!isset($_SESSION['id'])){
		$mes="Login is Required";
	}
	header('location:findemp1.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>resume</title>
	<link rel="stylesheet" type="text/css" href="ka.css">
	
	<link rel="stylesheet" type="text/css" href="custom.css">
</head>
<style>
.hedding{
	color: black;
    text-decoration: none;
    font-size: 35px;
    margin-left: 20px;

}
</style>
<body>
<header>
	<nav>
		<div class="logo">
        <a href="index.php" class="hedding" >PROFILE CREATOR</a>
        </div>
        <div style="margin-top: 10px;">
		<?php
              	if(empty($_SESSION['Name'])){
              		echo "<a  class='login' href='login.php'>Sing Up</a>";
              	}else{
					echo "<a class='login' href='logout.php'>LOGOUT</a>";
              	}
              ?>
        </div>
	</nav>
</header>
<center>
	<div class="ll">
		<h1><b>BUILDING A PERFECT BIODATA HAS NEVER BEEN THIS EASY!</b></h1>
	</div>
	<center>
	<div class="lm">
		<div class="ka">
			<div>1</div>
			<div class="ra"><img src="image/login1.png" style="margin-left:-15px;"></div>
			<span class="al">Login up</span>
		</div><hr>
		<div class="ka">
			<div>2</div>
			<div class="ra"><img src="image/download.jpg" height="100" width="100" style="margin-left:-15px;"></div>
			<span class="al">Download employers Details</span>
		</div>
	</div>
	</center>
</center>
</center>
<?php
if(isset($_POST['ku'])){
	if(empty($_SESSION['id'])) {
		echo "<center><p style='font-size:50px;color:red;'>Login is required</p></center>";
	}else{
		header('location:findemp1.php');
	}
}
?>
<center>
<div class="sh">
	<form method="post">
		<button class="ku" name="ku">BULID MY RESUME</button><br>
	</form>
	<p style="font-size: 20px; color: green;">By clicking "build my resume", you agree to our Terms of Use and Privacy Policy.</p>
</div>
</center>
</body>
</html>
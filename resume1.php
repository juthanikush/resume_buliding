<?php
session_start();
//$l1=$_SESSION['Name'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>resume</title>
	<link rel="stylesheet" type="text/css" href="ka.css">
	<link rel="stylesheet" type="text/css" href="stylea4.css">
	<link rel="stylesheet" type="text/css" href="style8.css">

</head>
<body>
<header>
	<nav>
		<div class="logo">
			<a href="index.php" class="hedding" >PROFILE CREATOR</a>
        </div>
        <div class="logobtn">
        	<?php
              	if(empty($_SESSION['Name'])){
              		echo "<a class='login' href='login.php'>Sing Up</a>";
              	}else{
              		echo "<a class='login' href='logout.php'>LOGOUT</a>";
              	}
              ?>
        </div>
	</nav>
</header>
<center>
	<div class="ll">
		<h1><b>BUILDING A PERFECT RESUME HAS NEVER BEEN THIS EASY!</b></h1>
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
			<div class="ra"><img src="image/resume.png" style="margin-left:-15px;"></div>
			<span class="al">Choise a Professional resume template</span>
		</div><hr>
		<div class="ka">
			<div>3</div>
			<div class="ra"><img src="image/tem.png" width="100" height="100" style="margin-left:-15px;"></div>
			<span class="al">Build your resume using our pre-written examples</span>
		</div><hr>
		<div class="ka">
			<div>4</div>
			<div class="ra"><img src="image/download.jpg" height="100" width="100" style="margin-left:-15px;"></div>
			<span class="al">Download your resume and start impressing employers</span>
		</div>
	</div>
	</center>
</center>
<?php
if(isset($_POST['ku'])){
	if(empty($_SESSION['id'])) {
		echo "<center><p style='font-size:50px;color:red;'>Login is required</p></center>";
	}else{
		header('location:resume2.php');
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

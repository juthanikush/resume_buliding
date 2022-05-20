<?php
include('admin/db.php');
if(isset($_POST['back'])){
	header('location:resume6.php');
}
if(isset($_POST['next'])){
	$k=$_SESSION['id'];
	$a1=$_POST['su'];
	$quer="INSERT INTO summary (Pe_id,Summary) VALUES ('$k','$a1')";
	$z=mysqli_query($db,$quer);
	$quer1="SELECT Resume FROM resumeselect WHERE Se_id = '$k'";
	$z1=mysqli_query($db,$quer1);
	while($row = mysqli_fetch_array($z1)) {
		$n=$row['Resume'];
	}
	echo $query="select * from addtemp where addid=$n";
	$z2=mysqli_query($db,$query);
	while($row = mysqli_fetch_array($z2)) {
		 $n1=$row['addid'];
		 $n2=$row['img'];
		 $n3=$row['file'];
	}
	$n4=substr($n3,3);
	header("location:$n4");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>resume7</title>
	<link rel="stylesheet" type="text/css" href="stylea4.css">
	<link rel="stylesheet" type="text/css" href="fontawesome.min.css">
	<style type="text/css">
		input.larger {
    	width: 30px;
        height: 20px;
      } 
	</style>
</head>
<body>
<center>
	<header>
		<nav style="display: flex;">
			<div class="logo">
			<a href="index.php" class="hedding" >PROFILE CREATOR</a>
			</div>
			<div class="check">
				<input type="checkbox" class="larger" checked width="40px" height="40px">CHOOSE TEMPLATE
				<input type="checkbox" class="larger" checked>PERSONAL INFO
				<input type="checkbox" class="larger" checked>EXPERIENCE
				<input type="checkbox" class="larger" checked>EDUCATION
				<input type="checkbox" class="larger" checked>SKILLS
				<input type="checkbox" class="larger" checked>SUMMARY
				<input type="checkbox" class="larger" >DWONLOAD
			</div>
		</nav>
	</header>
	<hr>
</center>
<div class="mm">
<div class="lm">
		<p class="he">PROFESSIONAL SUMMARY<br>
		<small>write a short summary telling more about yourself</small></p>
</div><br><br>
<div style="width: 70%;">
		<form action="" method="post" name="">
			<div style="display: flex; width: 100%;">
				<label>Summary:</label>
				<textarea cols="100" rows="5" name="su"></textarea>
		</div>
		<br>
			<button style="font-size: 30px;" class="back"  name="back" value="BACK">BACK</button>
			<button style="font-size: 30px;" class="next"  name="next" value="SAVE/NEXT">SAVE/NEXT</button>
	</form>
</div>
</body>
</html>

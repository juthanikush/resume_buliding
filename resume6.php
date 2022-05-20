<?php
session_start();
$con=mysqli_connect("localhost","root","","resume");
if(isset($_POST['back'])){
	header('location:resume5.php');
}
if(isset($_POST['next'])){
	$k=$_SESSION['id'];
	$a=$_POST['s1'];
	$a1=$_POST['sk1'];
	$a2=$_POST['s2'];
	$a3=$_POST['sk2'];
	$a4=$_POST['s3'];
	$a5=$_POST['sk3'];
	$a6=$_POST['s4'];
	$a7=$_POST['sk4'];
	$a8=$_POST['s5'];
	$a9=$_POST['sk5'];
	$a10=$_POST['s6'];
	$a11=$_POST['sk6'];
	$quer="INSERT INTO skill (Pe_id,Skill_Name,Skill_level) VALUES ('$k','$a','$a1')";
	$z=mysqli_query($con,$quer);
	$quer1="INSERT INTO skill (Pe_id,Skill_Name,Skill_level) VALUES ('$k','$a2','$a3')";
	$z1=mysqli_query($con,$quer1);
	$quer2="INSERT INTO skill (Pe_id,Skill_Name,Skill_level) VALUES ('$k','$a4','$a5')";
	$z2=mysqli_query($con,$quer2);
	$quer3="INSERT INTO skill (Pe_id,Skill_Name,Skill_level) VALUES ('$k','$a6','$a7')";
	$z3=mysqli_query($con,$quer3);
	$quer4="INSERT INTO skill (Pe_id,Skill_Name,Skill_level) VALUES ('$k','$a8','$a9')";
	$z4=mysqli_query($con,$quer4);
	$quer5="INSERT INTO skill (Pe_id,Skill_Name,Skill_level) VALUES ('$k','$a10','$a11')";
	$z5=mysqli_query($con,$quer5);
	header('location:resume7.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>resume6</title>
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
				<input type="checkbox" class="larger">SUMMARY
				<input type="checkbox" class="larger" >DWONLOAD
			</div>
		</nav>
	</header>
	<hr>
</center>
<div class="mm">
<div class="lm">
		<p class="he">SKILLS<br>
		<small>Highlight  your top skills.</small></p>
</div><br><br>
<div style="width: 70%;">
		<form action="" method="post" name="">
			<div class="cc">
				<label>Skill:</label>
				<input type="text" name="s1" required size="25">
				<label>Level:</label>
				<select name="sk1" style="width: 300px;">
					<option>Select</option>
					<option value="Expert">Expert</option>
					<option value="Experienced">Experienced</option>
					<option value="Skillful">Skillful</option>
					<option value="Biginner">Beginner</option>
					<option value="Novice">NoExperience</option>
				</select>
			</div>
			<div class="cc">
				<label>Skill:</label>
				<input type="text" name="s2" required size="25">
				<label>Level:</label>
				<select name="sk2" style="width: 300px;">
					<option>Select</option>
					<option value="Expert">Expert</option>
					<option value="Experienced">Experienced</option>
					<option value="Skillful">Skillful</option>
					<option value="Biginner">Beginner</option>
					<option value="Novice">NoExperience</option>
				</select>
			</div>
			<div class="cc">
				<label>Skill:</label>
				<input type="text" name="s3" required size="25">
				<label>Level:</label>
				<select name="sk3" style="width: 300px;">
					<option>Select</option>
					<option value="Expert">Expert</option>
					<option value="Experienced">Experienced</option>
					<option value="Skillful">Skillful</option>
					<option value="Biginner">Beginner</option>
					<option value="Novice">NoExperience</option>
				</select>
			</div>
			<div class="cc">
				<label>Skill:</label>
				<input type="text" name="s4" required size="25">
				<label>Level:</label>
				<select name="sk4" style="width: 300px;">
					<option>Select</option>
					<option value="Expert">Expert</option>
					<option value="Experienced">Experienced</option>
					<option value="Skillful">Skillful</option>
					<option value="Biginner">Beginner</option>
					<option value="Novice">NoExperience</option>
				</select>
			</div>
			<div class="cc">
				<label>Skill:</label>
				<input type="text" name="s5" required size="25">
				<label>Level:</label>
				<select name="sk5" style="width: 300px;">
					<option>Select</option>
					<option value="Expert">Expert</option>
					<option value="Experienced">Experienced</option>
					<option value="Skillful">Skillful</option>
					<option value="Biginner">Beginner</option>
					<option value="Novice">NoExperience</option>
				</select>
			</div>
			<div class="cc">
				<label>Skill:</label>
				<input type="text" name="s6" required size="25">
				<label>Level:</label>
				<select name="sk6" style="width: 300px;">
					<option>Select</option>
					<option value="Expert">Expert</option>
					<option value="Experienced">Experienced</option>
					<option value="Skillful">Skillful</option>
					<option value="Biginner">Beginner</option>
					<option value="Novice">NoExperience</option>
				</select>
			</div>
			<br>
			<button style="font-size: 30px;" class="back"  name="back" value="BACK">BACK</button>
			<button style="font-size: 30px;" class="next"  name="next" value="SAVE/NEXT">SAVE/NEXT</button>
	
		</form>
	</div>
</body>
</html>

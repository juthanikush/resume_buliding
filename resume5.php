<!DOCTYPE html>
<html>
<head>
	<title>resume5</title>
	<link rel="stylesheet" type="text/css" href="stylea4.css">
	<link rel="stylesheet" type="text/css" href="style8.css">
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
		<nav class="nav1">
			<div class="logo">
			<a href="index.php" class="hedding" >PROFILE CREATOR</a>
			</div>
			<div class="check">
				<input type="checkbox" class="larger" checked width="40px" height="40px">CHOOSE TEMPLATE
				<input type="checkbox" class="larger" checked>PERSONAL INFO
				<input type="checkbox" class="larger" checked>EXPERIENCE
				<input type="checkbox" class="larger" checked>EDUCATION
				<input type="checkbox" class="larger">SKILLS
				<input type="checkbox" class="larger">SUMMARY
				<input type="checkbox" class="larger" >DWONLOAD
			</div>
		</nav>
	</header>
	<hr>
</center>
<div class="mm">
	<div class="lm">
		<p class="he">EDUCATION<br>
		<small>Add information about your educational background.</small></p>
	</div><br><br>
	<div style="width: 70%;">
		<form action="" method="post" name="">
			<div class="" >
				<label>Scholl Name:</label><br>
				<input type="text" name="sn" required size="25"><br>
				<label>City:</label><br>
				<input type="text" name="ci" required size="25"><br>
			</div>
			<br>
			<div class="">
				<label>Standard:</label><br>
				<input type="text" name="st" required size="25"><br>
			</div>
			<br>
			<div class="" style="width: 50%;">
				<label>State:</label><br>
				<input type="text" name="st" required size="30"><br>
				<br><label>END YEAR OF YOUR SCHOOL:</label><br>
				<input type="text" name="ye" required size="18"><br>
			</div>
			<br><br>
			<div class="">
				<label>Collage Name:</label><br>
				<input type="text" name="fs" required size="25">
				<br>
				<div id="otherValue">
				<br><label>Graduation Date</label><br>
					<input type="date" name="gd">
				</div>
			</div>
			<div>
			<br><input type="checkbox" name="" id="other" class="larger"><label>I Present Attend Here</label>
			</div>
			<br>
			<div>
				<label>Degree Name:</label><br>
				<input type="text" name="sd" required size="18">
			</div>
			
			<br><br>
			<button style="font-size: 30px;" class="back"  name="back" value="BACK">BACK</button>
			<button style="font-size: 30px;" class="next"  name="next" value="SAVE/NEXT">SAVE/NEXT</button>
		</form>
</div>
</body>
</html>
<script type="text/javascript">
var otherCheckbox = document.getElementById('other');
var otherText = document.getElementById("otherValue");
otherText.style.display = 'block';

otherCheckbox.addEventListener('change', () => {
  if(otherCheckbox.checked) {
    otherText.style.visibility = 'hidden';
    otherText.value = '';
  } else {
    otherText.style.visibility = 'visible';
  }
});
</script>
<?php
session_start();
$con=mysqli_connect("localhost","root","","resume");
if(isset($_POST['back'])){
	header('location:resume4.php');
}
if(isset($_POST['next'])){
	$k=$_SESSION['id'];
	$a=$_POST['sn'];
	$a1=$_POST['ci'];
	$a2=$_POST['st'];
	$a3=$_POST['sd'];
	$a4=$_POST['fs'];
	$a5=$_POST['gd'];
	$a6=$_POST['ye'];
	$a7=$_POST['st'];
	$quer="INSERT INTO education (Pe_id,School_name,City,State,Degree_Name,College_Name,Graduation_date,End_year,Standard) VALUES ('$k','$a','$a1','$a2','$a3','$a4','$a5','$a6','$a7')";
	$z=mysqli_query($con,$quer);
	header('location:resume6.php');
}
?>
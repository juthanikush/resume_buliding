<!DOCTYPE html>
<html>
<head>
	<title>resume4</title>
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
				<input type="checkbox" class="larger">EDUCATION
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
		<p class="he">EXPERIENCE<br>
		<small>List your work experience, from the most recent to the oldest. Feel free to use our pre-written examples.</small></p>
	</div><br><br>
	<div style="width: 70%;">
		<form action="" method="post" name="">
			<div class="" style="width: 50%;">
				<label>Company Name:</label><br>
				<input type="text" name="cn" required size="25"><br>
			<br>
				<label>Job title:</label><br>
				<input type="text" name="jt" required size="25">
			</div>
			<br>
			<div class="">
				<label>City:</label><br>
				<input type="text" name="ci" required size="30"><br>
			<br>
				<label>State:</label><br>
				<input type="text" name="st" required size="30">
			</div>
			<div class="">
			<br><label>Start Date:</label><br>
				<input type="date" name="sd">
				<br>
				<div id="otherValue">
				<br><label style="margin-left: 0px;">End Date:</label><br>
				<input type="date" name="ed"><br>
				</div>
			</div>
			<div>
			<br><input type="checkbox" name="" value="other" id="other" class="larger"><label>I Present Work Here</label><br>
			</div><br>
			<div>
				<label>job Description</label><br>
				<textarea cols="50" rows="4" required name="su"></textarea>
			</div>

			<br><br>
			<button style="font-size: 30px;" class="back"  name="back" value="BACK">BACK</button>
			<button style="font-size: 30px;" class="next"  name="next" value="SAVE/NEXT">SAVE/NEXT</button>
		</form>
	</div>
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
	header('location:resume3.php');
}
if(isset($_POST['next'])){
	$k=$_SESSION['id'];
	$a=$_POST['cn'];
	$a1=$_POST['jt'];
	$a2=$_POST['ci'];
	$a3=$_POST['st'];
	$a4=$_POST['sd'];
	$a5=$_POST['ed'];
	$a7=$_POST['su'];
	$quer="INSERT INTO experience (Pe_id,Company_Name,Job_title,City,State,Start_Date,End_Date,Job_Description) VALUES ('$k','$a','$a1','$a2','$a3','$a4','$a5','$a7')";
	$z=mysqli_query($con,$quer);
	if(!$z){
		echo("Error description: " . mysqli_error($con));
	}else{
		header('location:resume5.php');
	}
	
}
?>
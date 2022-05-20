<?php
session_start();
$con=mysqli_connect("localhost","root","","resume");
if(isset($_POST['back'])){
	redirect('resume2.php');
}
if(isset($_POST['next'])){
	$file_name = $_FILES['image']['name'];
	$file_type = $_FILES['image']['type'];
	$file_size = $_FILES['image']['size'];
	$file_tep_loca = $_FILES['image']['tmp_name'];
	$file_store="profilephoto/".$file_name;
	
	move_uploaded_file($file_tep_loca, $file_store);
	
	
	$k=$_SESSION['id'];
	$a=$_POST['fn'];
	$a1=$_POST['ln'];
	$a2=$file_store; 
	$a3=$_POST['ad'];
	$a4=$_POST['ci'];
	$a5=$_POST['zc'];
	$a6=$_POST['co'];
	$a7=$_POST['em'];
	$a8=$_POST['ph'];
	$quer="INSERT INTO personal_info (Pe_id,First_name,Last_name,Address,Img,Email,Phone,City,Zip_code,Country) VALUES ('$k','$a','$a1','$a3','$a2','$a7','$a8','$a4','$a5','$a6')";
	$z=mysqli_query($con,$quer);
	header('location:resume4.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>resume3</title>
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
				<input type="checkbox" class="larger">EXPERIENCE
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
	<div>
		<p class="he">COMPLETE YOUR<b> RESUME HEADING</b><br>
		<small>Employers will use this information to contact you</small></p>
	</div><br><br>
	<div style="width: 70%;">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="" >
				<label>Profile Photo:</label><br>
				<input type="file" name="image" id="image" ><p style="color: red;font-size: 20px;">
			</div><br>
			<div class="" >
			<br><label>First Name:</label><br>
				<input type="text" name="fn" required size="25" pattern="[A-Za-z]{3+}"><br>
				<br><label>Last Name:</label><br>
				<input type="text" name="ln" required size="25" pattern="[A-Za-z]{3+}">
			</div>
			<br>
			
			<div class="">
			<br><label>Address:</label><br>
				<textarea cols="75" rows="5" name="ad"></textarea>
			</div>
			<br>
			<div class="">
			<br><label>Email:</label><br>
				<input type="Email" name="em" required size="29"><br>
				<br><label>Phone:</label><br>
				<input type="text" name="ph" required size="29">
			</div>
			<br>
			<div class="" style="">
			<br><label>City:</label><br>
				<input type="text" name="ci" required size="15"><br>
				<br><label>Zip Code:</label><br>
				<input type="text" name="zc" required size="15"><br>
				<br><label>Country:</label><br>
				<input type="text" name="co" required size="15">
			</div>
			
			<br><br>
			<button style="font-size: 30px;" class="back"  name="back" value="BACK">BACK</button>
			<button style="font-size: 30px;" class="next" id="insert" name="next" value="SAVE/NEXT">SAVE/NEXT</button>
		</form>
	</div>
</div>
</body>
</html>
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['png']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script> 

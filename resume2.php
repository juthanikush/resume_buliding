<?php

include('admin/db.php');
$query="SELECT * FROM `addtemp`";
$res=mysqli_query($db,$query);

if(isset($_POST['btnres'])){
	$a=$_POST['btnres'];
	$al=$_SESSION['id'];
	//$k=mysqli_connect("localhost","root","","resume");
	echo $k1="INSERT INTO resumeselect (Resume,se_id) VALUES ($a,$al)";

	$qq=mysqli_query($db,$k1);
	
	header('location:resume3.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Resume2</title>
	<link rel="stylesheet" type="text/css" href="stylea4.css">
	<link rel="stylesheet" type="text/css" href="style8.css">
	<style type="text/css">
	 input.larger {
    	width: 30px;
        height: 20px;
      } 
      .middle:hover h1{
      	color: red;
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
				<input type="checkbox" class="larger">PERSONAL INFO
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
<center>
	<div class="kk">
		<p>CHOOSE YOUR <b>RESUME TEMPLATE</b></p>
	</div>
</center>
<center>
	<form method="post">
	<div style="display:flex; width: 90%;">
	<?php while($row=mysqli_fetch_assoc($res)){ 
		$patha=$row['img'];
		$path=substr($patha,3);
		

		?>
		<div class="container">
		<h1><?php echo $row['title']; ?></h1>
		  <img src="<?php echo $path ?>" alt="Avatar" class="image" style="width:100%">
		  <div class="middle">
		  	<?php $id=$row['addid']; ?>
		    <button name="btnres" class="text" value="<?php echo $id  ?>">BULID MY RESUME</button>
		  </div>
		</div>
	<?php } ?>
		<!--<div class="container">
		<h1>Kush</h1>
		  <img src="image/p1.jpg" alt="Avatar" class="image" style="width:100%">
		  <div class="middle">
		   <button name="btnres" class="text" value="2">BULID MY RESUME</a>
		  </div>
		</div>
		<div class="container">
		<h1>Kush</h1>
		  <img src="image/p1.jpg" alt="Avatar" class="image" style="width:100%">
		  <div class="middle">
		    <button name="btnres" class="text" value="3">BULID MY RESUME</button>
		  </div>
		</div>
	</div>
	<div style="display:flex; width: 90%;">
		<div class="container">
		<h1>Kush</h1>
		  <img src="image/p1.jpg" alt="Avatar" class="image" style="width:100%">
		  <div class="middle">
		    <button name="btnres" class="text" value="4">BULID MY RESUME</button>
		  </div>
		</div>
		<div class="container">
		<h1>Kush</h1>
		  <img src="image/p1.jpg" alt="Avatar" class="image" style="width:100%">
		  <div class="middle">
		    <button name="btnres" class="text" value="5">BULID MY RESUME</button>
		  </div>
		</div>
		<div class="container">
		<h1>Kush</h1>
		  <img src="image/p1.jpg" alt="Avatar" class="image" style="width:100%">
		  <div class="middle">
		    <button name="btnres" class="text" value="6">BULID MY RESUME</button>
		  </div>
		</div>
	</div>-->
	</form>
</center>

</body>
</html>

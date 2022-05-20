<?php
session_start();
$a=$_SESSION['id'];
$con=mysqli_connect("localhost","root","","resume");
$quer="SELECT * FROM personal_info WHERE Pe_id = '$a'";
$z=mysqli_query($con,$quer);
if($z->num_rows > 0){
	 while($row = mysqli_fetch_array($z)) {
		$l=$row['First_name'];
		$l1=$row['Last_name'];
		$l2=$row['Address'];
		$l3=$row['Img'];
		$l4=$row['Email'];
		$l5=$row['Phone'];
		$l6=$row['City'];
		$l7=$row['Zip_code'];
		$l8=$row['Country'];
	}
}
$quer1="SELECT * FROM education WHERE Pe_id = '$a'";
$z1=mysqli_query($con,$quer1);
if($z1->num_rows > 0){
	 while($row = mysqli_fetch_array($z1)) {
		$m=$row['School_name'];
		$m1=$row['City'];
		$m2=$row['State'];
		$m3=$row['Degree_Name'];
		$m4=$row['College_Name'];
		$m5=$row['Graduation_date'];
		$m6=$row['End_year'];
		$m7=$row['Standard'];
	}
}
$quer2="SELECT * FROM experience WHERE Pe_id = '$a'";
$z2=mysqli_query($con,$quer2);
if($z2->num_rows > 0){
	 while($row = mysqli_fetch_array($z2)) {
		$ma=$row['Company_Name'];
		$ma1=$row['Job_title'];
		$ma2=$row['City'];
		$ma3=$row['State'];
		$ma6=$row['Start_Date'];
		$ma4=$row['End_Date'];
		$ma5=$row['Job_Description'];
	}
}
$quer3="SELECT * FROM skill WHERE Pe_id= '$a'";
$z3=mysqli_query($con,$quer3);
if($z3->num_rows > 0){
	 while($row = mysqli_fetch_array($z3)) {
		$n[]=$row['Skill_Name'];
		$n1[]=$row['Skill_level'];
		
	}
}
$quer4="SELECT * FROM summary WHERE Pe_id = '$a'";
$z4=mysqli_query($con,$quer4);
if($z4->num_rows > 0){
	 while($row = mysqli_fetch_array($z4)) {
		$j=$row['Summary'];
	}
}


/*echo '<img src="data:image/jpeg;base64,'.base64_encode($l3).'" height="200" width="200" class="img-thumnail" />  ';*/
if(isset($_POST['a'])){
	$g=$_POST['a'];
}else{
	$g="#292b2f";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="all.min.css">
</head>
<body>

<div class="print-area">
	<div class="header" style="background:<?php echo $g; ?>">
		<img src="../<?php echo $l3; ?>">
		<div class="header-text">
			<p style="font-size:40px;"><?php echo $l;?>&nbsp;<?php echo $l1;?></strong><br><small><small><?php if(empty($ma1)){echo " ";}else{echo $ma1;} ?></p>
			<p><?php if(empty($j)){echo " ";}else{echo $j;} ?></p>
		</div>
	</div>

	<div class="content">
		<div class="left-area">
			<div class="contact">
			
					<h4>CONTACT</h4>
					<h5>Phone</h5>
					<p><?PHP  if(empty($l5)){echo "";}else{echo $l5; }?></p>
					<h5>Email</h5>
					<p><?PHP  if(empty($l4)){echo "";}else{echo $l4; }?></p>
					<h5>Home</h5>
					<p><?PHP  if(empty($l2)){echo "";}else{echo $l2; }?></p>
		
			</div>
			<div class="skills">
		
					<h1>SKILLS</h1>
					<div class="bars">
						<div class="bar">
							<p><?PHP  if(empty($n[0])){echo "";}else{echo $n[0]; }?></p>
							<p><?PHP  if(empty($n1[0])){echo "";}else{echo $n1[0]; }?></p>
						</div>
						<div class="bar">
						<p><?PHP  if(empty($n[0])){echo "";}else{echo $n[0]; }?></p>
							<p><?PHP  if(empty($n1[1])){echo "";}else{echo $n1[1]; }?></p>
						</div>
						<div class="bar">
						<p><?PHP  if(empty($n[0])){echo "";}else{echo $n[0]; }?></p>
							<p><?PHP  if(empty($n1[2])){echo "";}else{echo $n1[2]; }?></p>
						</div>
						<div class="bar">
						<p><?PHP  if(empty($n[0])){echo "";}else{echo $n[0]; }?></p>
							<p><?PHP  if(empty($n1[3])){echo "";}else{echo $n1[3]; }?></p>
						</div>
						<div class="bar">
						<p><?PHP  if(empty($n[0])){echo "";}else{echo $n[0]; }?></p>
							<p><?PHP  if(empty($n1[4])){echo "";}else{echo $n1[4]; }?></p>
						</div>
						<div class="bar">
						<p><?PHP  if(empty($n[0])){echo "";}else{echo $n[0]; }?></p>
							<p><?PHP  if(empty($n1[5])){echo "";}else{echo $n1[5]; }?></p>
						</div>
					</div>
				
			</div>
			
		</div>
		<div class="right-area">
			<div class="about">
				<h1><span><i class="far fa-user"></i></span>ABOUT ME</h1>
				<p><?PHP  if(empty($j)){echo "";}else{echo $j; }?></p>
			</div>
		
			<div class="work">
				<h1><span><i class="fas fa-suitcase-rolling"></i></span>WORK EXPERIENCE</h1>
				<div class="work-group">
					<h3><?PHP  if(empty($ma1)){echo "";}else{echo $ma1; }?></h3>
					<h4><?PHP  if(empty($ma)){echo "";}else{echo $ma; }?></h4>
					<span><?php if(($ma6=="0000-00-00")){echo " ";}else{echo $ma6;} ?>/<?php if(empty($ma4)){echo "current working";}else{echo $ma4;} ?></span>
					<p><?PHP  if(empty($ma5)){echo "";}else{echo $ma5; }?>.</p>
				</div>
				
			</div>
			<div class="education">
				<h1><span><i class="fas fa-book"></i></span>EDUCATION</h1>
				<div class="edu-group">
					<h4><?PHP  if(empty($m)){echo "";}else{echo $m; }?></h4>
					<span><?php if(empty($m4)){echo " ";}else{echo $m4;} ?><br><?php if(empty($m5)){echo " ";}else{echo $m5;} ?></span>
					<p><?PHP  if(empty($m7)){echo "";}else{echo $m7; }?></p>
				</div>
				<div class="edu-group">
					<h4><?PHP  if(empty($m4)){echo "";}else{echo $m4; }?></h4>
					<span><?PHP  if(empty($m5)){echo "";}else{echo $m5; }?></span>
					<p><?PHP  if(empty($m3)){echo "";}else{echo $m3; }?></p>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div class="hide">
	<button class="print">PRINT RESUME</button>
	<h1 class="button1" style="color:Red">Header color</h1><Br>
<div class="button">
	<ul>
		<form method="post" style="display: flex;">
		<li class="color"><button class="btncolor" style="background-color: #017a8b;" name="a" value="#017a8b"></button></li>
		<li class="color"><button class="btncolor" style="background-color: #1e3352;" name="a" value="#1e3352"></button></li>
		<li class="color"><button class="btncolor" style="background-color: #d14241;" name="a" value="#d14241"></button></li>
		<li class="color"><button class="btncolor" style="background-color: #51e2c2;" name="a" value="#51e2c2"></button></li>
		<li class="color"><button class="btncolor" style="background-color: #6a7185;" name="a" value="#6a7185"></button></li>
		</form>
	</ul>
</div>

		
			
	

<style type="text/css">
.button{
	list-style-type: none;
}
.button ul{
	display: flex;
	list-style-type: none;
}
.button li{
	margin: 0!important;
}
.button1{
	margin-left: 10%;
}
.work-group{
	margin-left: 10px; 
}
.date{
	font-style: bold;
}
</style>
<script src="all.min.js"></script>
<script type="text/javascript">
	var btn = document.querySelector("button");
	btn.onclick = () =>{
		window.print();
	}
</script>
</div>
</body>
</html>
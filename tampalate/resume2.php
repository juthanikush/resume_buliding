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

?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="btn.css">
</head>
<body>
<div style="display: flex; padding:250px; " class="print-area">
	<div style="width: 35%; background-color: <?php echo $g; ?>">
		<center style="padding-top: 30px; padding-bottom: 30px;"><img src="../<?php echo $l3; ?>" height="150px" width="150px" style="border-radius: 60%; border-style: solid; border-width: 3px; border-color: white; "></center>
		<div style="color: white; ">
			<p style="padding-left: 35px;font-size: 20px; padding-bottom: 0; ">CONTACT</p>
			<hr style="width: 85%; padding-top: 0;text-align: right;margin-right: 0;">
			<div>
				<ul style="list-style: none; color:#eef0f2">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i> -<?php if(empty($l2)){echo " ";}else{echo $l2;} ?></li>
					<li><i class="fa fa-phone-square" aria-hidden="true"></i> - <?php if(empty($l5)){echo " ";}else{echo $l5;} ?></li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i> - <?php if(empty($l4)){echo " ";}else{echo $l4;} ?></li>
					
				</ul>
			</div>
		</div>
		<div style="color: white;" >
			<p style="padding-left: 35px;font-size: 20px; padding-bottom: 0; ">EDUCATION</p>
			<hr style="width: 85%; padding-top: 0;text-align: right;margin-right: 0;">
			<br>
			<div style="padding-left: 35px;font-size: 20px;">
				<p><?php if(empty($m6)){echo " ";}else{echo $m6;} ?><br>
				<small style="color: #eef0f2"><?php if(empty($m)){echo " ";}else{echo $m;} ?><br><?php if(empty($m6)){echo " ";}else{echo $m6;} ?></small></p>
			</div>

			<div style="padding-left: 35px;font-size: 20px;">
				<p><?php if(empty($m3)){echo " ";}else{echo $m3;} ?>:<br>
				<small style="color: #eef0f2"><?php if(empty($m4)){echo " ";}else{echo $m4;} ?><br><?php if(empty($m5)){echo " ";}else{echo $m5;} ?></small></p>
			</div>
		</div>
		<div style="color: white;">
			<p style="padding-left: 35px;font-size: 20px; padding-bottom: 0; ">SKILL'S</p>
			<hr style="width: 85%; padding-top: 0;text-align: right;margin-right: 0;">
			<ul  style="list-style: none; padding-top: 5px;color: #eef0f2;">
				<li><?PHP  if(empty($n[0])){echo "";}else{echo $n[0]; }?><br><b style="color:#768378;"><?PHP  if(empty($n1[0])){echo "";}else{echo $n1[0]; }?></b></li>
				<li><?PHP  if(empty($n[1])){echo "";}else{echo $n[1]; }?><br><b style="color:#768378;"><?PHP  if(empty($n1[1])){echo "";}else{echo $n1[1]; }?></b></li>
				<li><?PHP  if(empty($n[2])){echo "";}else{echo $n[2]; }?><br><b style="color:#768378;"><?PHP  if(empty($n1[2])){echo "";}else{echo $n1[2]; }?></b></li>
				<li><?PHP  if(empty($n[3])){echo "";}else{echo $n[3]; }?><br><b style="color:#768378;"><?PHP  if(empty($n1[3])){echo "";}else{echo $n1[3]; }?></b></li>
				<li><?PHP  if(empty($n[4])){echo "";}else{echo $n[4]; }?><br><b style="color:#768378;"><?PHP  if(empty($n1[4])){echo "";}else{echo $n1[4]; }?></b></li>
				<li><?PHP  if(empty($n[5])){echo "";}else{echo $n[5]; }?><br><b style="color:#768378;"><?PHP  if(empty($n1[5])){echo "";}else{echo $n1[5]; }?></b></li>
				
			</ul>
		</div>
	</div>
	<div style="width: 65%; background-color: #eef0f2;">
		<strong><p style=" padding-top: 40px; padding-left: 100px; font-size: 60px; "><?php echo $l;?>&nbsp;<?php echo $l1;?></strong><br><small><small><?php if(empty($ma1)){echo " ";}else{echo $ma1;} ?></small></small></p>
		<p style="padding-left: 100px; font-size: 20px;"><?php if(empty($j)){echo " ";}else{echo $j;} ?></p> 
		<div style="padding-top: 40px; ">
			
			<p style="padding-left: 170px;">EXPERIENCE</p>
			<hr style="width:78%;text-align:right;margin-right:0">
			<p style="padding-left: 170px;"><?php if(empty($ma)){echo " ";}else{echo $ma;} ?></p>
			<p style="padding-left: 170px;"><?php if(empty($ma5)){echo " ";}else{echo $ma5;} ?><br><?php if(($ma6=="0000-00-00")){echo " ";}else{echo $ma6;} ?>/<?php if(empty($ma4)){echo "current working";}else{echo $ma4;} ?></p>
			<br>
			
		</div>
		<div style="padding-top: 10px; ">
			<i style="padding-left: 200px;" class="fa fa-pencil-square-o" aria-hidden="true"></i>
			<p style="padding-left: 170px;">EDUCATION</p>
			<hr style="width:78%;text-align:right;margin-right:0">
			<p style="padding-left: 170px;"><?php if(empty($m7)){echo " ";}else{echo $m7;} ?></p>
			<p style="padding-left: 170px;"> <?php if(empty($m4)){echo " ";}else{echo $m4;} ?><br><?php if(empty($m5)){echo " ";}else{echo $m5;} ?></p>
			<br>
			<p style="padding-left: 170px;">College</p>
			<p style="padding-left: 170px;"><?php if(empty($m)){echo " ";}else{echo $m;} ?><br><?php if(empty($m6)){echo " ";}else{echo $m6;} ?></p>
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
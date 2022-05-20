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


if(isset($_POST['a'])){
	$g=$_POST['a'];
}else{
	$g="#green";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Resume Design</title>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style11.css">
	<link rel="stylesheet" type="text/css" href="all.min.css">
	<link rel="stylesheet" type="text/css" href="style8.css">
	<link rel="stylesheet" type="text/css" href="btn.css">
</head>
<body>
<div class="resume print-area" style="border: solid 2px; width: 70%;">
	<div class="resume_left" style="background-color: <?php echo $g;?>;">
		<div class="resume_profile">
		<img src="../<?php echo $l3; ?>" alt="alok_pic">
		</div>
		<div class="resume_content">
			<div class="resume_item resume_info">
				<div class="title">
					<p class="bold" ><?php echo $l; echo $l1;?></p>
						<p class="regular">Web Devloper</p><br>
				 </div>
				 <ul>
				 	<li>
				 		<div class=""><i class="fa fa-map-marker" aria-hidden="true"></i></div>
				 		<div class="data">&nbsp;
						 <?php if(empty($l2)){echo " ";}else{echo $l2;} ?>
				 		</div>
				 	</li>

				 	<li>
				 		<div class=""><i class="fa fa-phone" aria-hidden="true"></i>

</div>
				 		<div class="data">&nbsp;
						 <?php if(empty($l5)){echo " ";}else{echo $l5;} ?>
				 		</div>
				 	</li>

				 	<li>
							<div class=""><i class="fa fa-envelope-open" aria-hidden="true"></i></div>
				 		<div class="data">&nbsp;
						 <?php if(empty($l4)){echo " ";}else{echo $l4;} ?>
				 		</div>
				 	</li>

				 	<li>
				 		<div class=""><i class="fa fa-search" aria-hidden="true"></i></div>
				 		<div class="data">&nbsp;
				 			www.stepen.com
				 		</div>
				 	</li>
				 </ul>
			</div>
		
		<div class="resume_item resume_skill">
			<div class="title">
					<p class="bold" >skill's</p>

						
				 </div>
				 <ul>
				 	<li>
			 		<div class="skill_name">
					 <?PHP  if(empty($n[0])){echo "";}else{echo $n[0]; }?>
				 	</div>
				 	<div class="">
					 <?PHP  if(empty($n1[0])){echo "";}else{echo $n1[0]; }?>
				 	</div>
				
				 	</li>
				 	<li>
						<div class="skill_name">
				 			<?PHP  if(empty($n[1])){echo "";}else{echo $n[1]; }?>
						</div>
				 	<div class="">
					 	<?PHP  if(empty($n1[1])){echo "";}else{echo $n1[1]; }?>
				 	</div>
				 	
				 	</li>
					<li>
				 		<div class="skill_name">
							 <?PHP  if(empty($n[2])){echo "";}else{echo $n[2]; }?>
				 		</div>
				 	<div class="">
							 <?PHP  if(empty($n1[2])){echo "";}else{echo $n1[2]; }?>
				 	</div>
				 	
				 	</li>
					<li>
				 		<div class="skill_name">
				 		<?PHP  if(empty($n[3])){echo "";}else{echo $n[3]; }?>
				 		</div>
				 	<div class="">
					 	<?PHP  if(empty($n1[3])){echo "";}else{echo $n1[3]; }?>
				 	</div>
			
				 	</li>
				 	<li>
				 		<div class="skill_name">
				 		<?PHP  if(empty($n[4])){echo "";}else{echo $n[4]; }?>
				 		</div>
				 	<div class="">
					 	<?PHP  if(empty($n1[4])){echo "";}else{echo $n1[4]; }?>
				 	</div>
			
				 	</li>
				 	<li>
				 		<div class="skill_name">
				 		<?PHP  if(empty($n[5])){echo "";}else{echo $n[5]; }?>
				 		</div>
				 	<div class="">
					 	<?PHP  if(empty($n1[5])){echo "";}else{echo $n1[5]; }?>
				 	</div>
			
				 	</li>
				 </ul>
		</div>
		<div class="resume_item resume_social">
			<div class="title">
				

						
				 </div>
				 <ul>
			
				 <div class="data">
				 	
				 </div>
				 </li>

				 	<li>
				 
				 <div class="data">
				 	
				 </div>
				 </li>

				 	<li>
				
				 <div class="data">
				 	
				 </div>
				 </li>

				 	<li>
				
			
				 	
				 </div>
				 </li>
				</ul>
		</div>
	</div>
	<div class="resume_right">
		<div class="resume_item resume_about">
			<div class="title">
				<p class="bold">About Me</p>
			</div>
			<p><?php if(empty($j)){echo " ";}else{echo $j;} ?>	
			</p>
		</div>
		<div class="resume_item resume_work">
		
			<div class="title">
				<p class="bold">Work Experience</p>
			</div>
			<ul>
				<li>
					<div class="date"><?php if(empty($ma)){echo " ";}else{echo $ma;} ?><br><?php if(empty($ma4)){echo " ";}else{echo $ma4;} ?>/<?php if(empty($ma6)){echo " ";}else{echo $ma6;} ?></div>
					<div class="info">
						<p class="semi_bold">
						<?php if(empty($ma5)){echo " ";}else{echo $ma5;} ?>
						</p>
					</div>
				</li>
			</ul>
		</div>
		<div class="resume_item resume_education">
				<div class="title">
				<p class="bold">Education</p>
			</div>
			<ul>
				<li>
					<div class="date"><?php if(empty($m6)){echo " ";}else{echo $m6;} ?></div>
					<div class="info">
						<p class="semi_bold"><b><?php if(empty($m)){echo " ";}else{echo $m;} ?></b>th</p>
						<p><?php if(empty($m7)){echo " ";}else{echo $m7;} ?>
						</p>
					</div>

				</li>

					<li>
					<div class="date"><?php if(($m5=="0000-00-00")){echo 'Now I am student';}else{echo $m5;} ?></div>
					<div class="info">
						<p class="semi_bold"><?php if(empty($m4)){echo " ";}else{echo $m4;} ?></p>
						<p><?php if(empty($m3)){echo " ";}else{echo $m3;} ?></p>
					</div>

				</li>
			</ul>
		</div>

		<div class="resume_item resume_hobby">
			
		</div>
		</div>
</div>
		
		<button class="print">PRINT RESUME</button>
	<h1 class="button1">Header color</h1><Br>
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
</body>
</html>
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
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resume CV Design</title>
	<link rel="stylesheet" href="style12.css">
	<link rel="stylesheet" href="btn.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
	<div class="wrapper print-area">
		<div class="resume">
			<div class="left" style="background:<?php echo $g;?>;">
				<div class="img_holder">
					<img src="../<?php echo $l3; ?>" alt="picture">
				</div>
				<div class="contact_wrap pb">
					<div class="title">
						Contact
					</div>
					<div class="contact">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-mobile-alt" aria-hidden="true"></i></div>
									<div class="text"><?php if(empty($l5)){echo " ";}else{echo $l5;} ?></div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
									<div class="text"><?php if(empty($l4)){echo " ";}else{echo $l4;} ?></div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-map-signs" aria-hidden="true"></i></div>
									<div class="text"><?php if(empty($l2)){echo " ";}else{echo $l2;} ?></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="skills_wrap pb">
					<div class="title">
						Skills
					</div>
					<div class="skills">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-html5"></i></div>
									<div class="text"><?PHP  if(empty($n[0])){echo "";}else{echo $n[0]; }?></div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-css3-alt"></i></div>
									<div class="text"><?PHP  if(empty($n[1])){echo "";}else{echo $n[1]; }?></div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-js"></i></div>
									<div class="text"><?PHP  if(empty($n[2])){echo "";}else{echo $n[2]; }?></div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-react"></i></div>
									<div class="text"><?PHP  if(empty($n[3])){echo "";}else{echo $n[3]; }?></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				
			</div>
			<div class="right">
				<div class="header" style="background:<?php echo $g;?>;">
					<div class="name_role">
						<div class="name">
						<?php echo $l;?>&nbsp;<?php echo $l1;?>
						</div>
						<div class="role">
					<?php if(empty($ma1)){echo " ";}else{echo $ma1;} ?>
						</div>
					</div>
					<div class="about">
					<?php if(empty($j)){echo " ";}else{echo $j;} ?>
					</div>
				</div>
				<div class="right_inner">
					<div class="exp">
						<div class="title">
							experience
						</div>
						<div class="exp_wrap">
							<ul>
								<li>
									<div class="li_wrap">
										<div class="date">
										<?php if(($ma6=="0000-00-00")){echo " ";}else{echo $ma6;} ?>/<?php if(empty($ma4)){echo "current working";}else{echo $ma4;} ?>
										</div>
										<div class="info">
											<p class="info_title">
											<?php if(empty($ma1)){echo " ";}else{echo $ma1;} ?>
											</p>
											<p class="info_com">
											<?php if(empty($ma)){echo " ";}else{echo $ma;} ?>
											</p>
											<p class="info_cont">
											<?php if(empty($ma5)){echo " ";}else{echo $ma5;} ?>
											</p>
										</div>
									</div>
								</li>
								<!--<li>
									<div class="li_wrap">
										<div class="date">
											2015 - 2018
										</div>
										<div class="info">
											<p class="info_title">
												UI Developer
											</p>
											<p class="info_com">
												Amazon
											</p>
											<p class="info_cont">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga voluptatibus consequatur rem nostrum omnis! Architecto.
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											2014 - 2015
										</div>
										<div class="info">
											<p class="info_title">
												Junior UI Developer
											</p>
											<p class="info_com">
												Coding Power
											</p>
											<p class="info_cont">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga voluptatibus consequatur rem nostrum omnis! Architecto.
											</p>
										</div>
									</div>
								</li>-->
							</ul>
						</div>
					</div>
					<div class="education">
						<div class="title">
							Education
						</div>
						<div class="education_wrap">
							<ul>
								<li>
									<div class="li_wrap">
										<div class="date">
										<?php if(empty($m6)){echo " ";}else{echo $m6;} ?>
										</div>
										<div class="info">
											<p class="info_title">
											<?php if(empty($m6)){echo " ";}else{echo $m6;} ?>th
											</p>
											<p class="info_com">
											<?php if(empty($m)){echo " ";}else{echo $m;} ?>
											</p>
											
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
										<?php if(empty($m5)){echo " ";}else{echo $m5;} ?>
										</div>
										<div class="info">
											<p class="info_title">
											<?php if(empty($m3)){echo " ";}else{echo $m3;} ?>
											</p>
											<p class="info_com">
											<?php if(empty($m4)){echo " ";}else{echo $m4;} ?>
											</p>
											
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											1998 - 2008
										</div>
										<div class="info">
											<p class="info_title">
												Schooling
											</p>
											<p class="info_com">
												Israel School
											</p>
											
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hide">
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
</div>
</body>
</html>

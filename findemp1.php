<?php
include('admin/db.php');

if(!isset($_SESSION['id'])){
	header('location:findemp.php');	
}
if(isset($_POST['sub']))
{
	$se=$_POST['search'];
	$query="select * from skill where Skill_Name='$se'";
	$res=mysqli_query($db,$query);
	$peid=array();
	while($row=mysqli_fetch_assoc($res))
	{
		$peid[]=$row['Pe_id'];
	}
	$c=count($peid);
	
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>BIO DATA</title>
	<link rel="stylesheet" type="text/css" href="stylea4.css">
	<link rel="stylesheet" type="text/css" href="custom.css">
	
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<style type="text/css">
	 input.larger {
    	width: 30px;
        height: 20px;
      } 
	  .name{
		  width:300px;
		  color:red;
	  }
	  .email{
		  width:200px;
		  color:green;
	  }
	</style>
</head>
<body>
<header>
	<nav>
		<div class="logo">
        <a href="index.php" class="hedding" >PROFILE CREATOR</a>
        </div>
        <div style="margin-top: 10px;">
		<?php
              	if(empty($_SESSION['Name'])){
              		echo "<a  class='login' href='login.php'>Sing Up</a>";
              	}else{
					echo "<a class='login' href='logout.php'>LOGOUT</a>";
              	}
              ?>
        </div>
	</nav>
</header>
<div>
	  <form method="post" class="form">
	  	<label>Search</label>
	  	<input type="text" name="search"><br><br>
		<button name="sub" class="btn btn-success">SUBMIT</button>
		<br><br>
	  </from>
	  <?php if(isset($c)){ 
	 echo '<table class="print-area" style="border: 1px solid black; " >';
	  	echo'<tr>
	  		<th class="name">Name</th>
			<th class="email">Email</th>
		</tr>';
		?>
	<?php }
		if(isset($c)){
			
			foreach ($peid as $pe) {
				$query1="select * from sing_up where Re_id=$pe";
				$res1=mysqli_query($db,$query1);
				while($row1=mysqli_fetch_assoc($res1)){?>
					<tr>
						<td style="border: 1px solid black;padding:15px;"><?php echo $row1['Name'] ?></td>
						<td style="border: 1px solid black;padding:15px;"><?php echo $row1['E_mail'] ?></td>
					</tr>
				<?php }
			}
			echo"<button class='btn btn-primary' onclick='window.print()'>Print</button><br><br>";
		}
		
	
	?>
	</table>
</div>
<style>
@media print {
	body *{
		visibility: hidden;
	}
	.print-area * {
		visibility: visible;
	}
}
</style>
</body>
</html>
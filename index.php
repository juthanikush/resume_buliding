<?php
require('admin/db.php');
$mes="";

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$mess=$_POST['mess'];
	$res="Insert into contact_us(name,email,phone,mess) values('$name','$email','$phone','$mess')";
	mysqli_query($db,$res);

	$mes="Message Send";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Creater</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="kj.css">
	 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	 <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="style7.css">

	
 

</head>
<body>
<div class="wrap">
	<header id="Home">
        <nav style="overflow:hidden;position: fixed;z-index:300;">
          <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
          </div>

          <div class="logo">
            PROFILE CREATOR
          </div>

          <div class="menu">
            <ul>
             
              <li><a href="#Home">Home</a></li>
              <li><a href="#About">About</a></li>
              <li><a href="#Tamp">Templates</a></li>
              <li><a href="#Team">Team</a></li>
              <li><a href="#con">Contact</a></li>
              <li><?php
              	if(empty($_SESSION['Name'])){
              		echo "<a href='login.php'>Sing Up</a>";
              	}else{
					echo "<a class='login' href='logout.php'>LOGOUT</a>";
              	}
              ?></li>
              
            </ul>

          </div>

        </nav>
      </header>
     <div class="ab"  id="About">
     	<div style="width: 75%;">
     		<img src="image/1.png" width="1300" height="1200">
     	</div>
     	
     </div>
     <h1 id="Tamp"><b><center>What You Want To Create</center></b></h1><br>
     <center><hr style="width: 40%; border: solid 1px;"></center><br>
     <div class="kl" id="lm">
     	<center>
     		<a href="findemp.php">Find Employee</a>
     		<a href="resume1.php">Create Your Resume</a>
     	</center>
    </div>
    <div id="Team">
    	<section id="Team">
	      <center><p class="jk"><b>Team Members</b></p></center>
	        <center class="main">
	            <div class="box">
	              <div class="imgBx">
	                <img src="image/alok.jpg">
	              </div>
	              <div class="content">
	                <h2>Alok Guriya<br/><span>Database Designer</span></h2>
	              </div>
	             </div>
	            <div class="box">
	              <div class="imgBx">
	                <img src="image/kush.jpg">
	              </div>
	              <div class="content">
	                <h2>Kush Juthani<br/><span>Creative Designer</span></h2>
	              </div>
	            </div>
	          
	       </center>
	  </section>	
    </div>
    <div id="con">
    	<form method="post" >
			 <section id="Contact" class="a1">
			   <div class="a2">
			    <h2>Contact Us</h2>
			    
			    <div class="row100">
			      <div class="col">
			        <div class="inputBox">
			          <input type="text" name="name" required>
			          <span class="text">Name</span>
			          <span class="line"></span>
			        </div>
			      </div>
			    </div>
			    <div class="row100">
			      <div class="col">
			        <div class="inputBox">
			          <input type="Email" name="email" required>
			          <span class="text">Email</span>
			          <span class="line"></span>
			        </div>
			      </div>
			    </div>
			    <div class="row100">
			      <div class="col">
			        <div class="inputBox">
			          <input type="text" name="phone" required>
			          <span class="text">Phone</span>
			          <span class="line"></span>
			        </div>
			      </div>
			    </div>
			    <div class="row100">
			      <div class="col">
			        <div class="inputBox textarea">
			          <textarea required name="mess"></textarea>
			          <span class="text">Type Your Message Here...</span>
			          <span class="line"></span>
			        </div>
			      </div>
			    </div>
			    <div class="row100">
			      <div class="col">
			      
			        <button class="btnse" name="submit">Send</button>
			      </div>
			    </div>
			    <?php  echo $mes; ?>
		  </div>
		  </section>
		 </form>
    </div>
<script type="text/javascript">
	 $(window).on("scroll", function() {
          if ($(window).scrollTop()) {
            $('nav').addClass('black');
          } else {
            $('nav').removeClass('black');
          }
        });
</script>   
</body>
</html>
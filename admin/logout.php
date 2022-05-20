<?php
session_start();
if($_SESSION['ADMIN_LOGIN']!="yes"){
	 header('location:login.php');
}
	unset($_SESSION['ADMIN_LOGIN']);
    unset($_SESSION['ADMIN_USERNAME']);
     header('location:login.php');
   
?>
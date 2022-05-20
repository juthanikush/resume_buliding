<?php
include("db.php");
$id=$_GET['id'];
$id=substr($id,2);
$id=substr($id,0,-2);
$quer="delete from contact_us  where id='$id'";
mysqli_query($db,$quer);
header('location:contact.php');
?>
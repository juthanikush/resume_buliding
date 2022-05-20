<?php
session_start();
   session_destroy();
   unset($_SESSION['id']);
   unset($_SESSION['Name']);
    echo $_SESSION['Name'];
   
   
    header('location:index.php');   
?>
<?php
require('db.php');
$mes="";

if(isset($_POST['s1'])){
  $un=$_POST['un'];
  $pws=$_POST['pw'];
  $quer="select * from admin where username='$un' and password='$pws'";
  $res=mysqli_query($db,$quer);
  $count=mysqli_num_rows($res);
  if($count>0){
    $_SESSION['ADMIN_LOGIN']="yes";
    $_SESSION['ADMIN_USERNAME']=$un;
    header('location:index.php');
  }else{
     $mes="place Enter the correct login details";
  }

}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login & Registration </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../style2.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body class="back">
  <form  method="post" action="" name="f1" >
  <div class="cont1">
    <div class="form sign-in">
      <h2>LOGIN IN</h2>
    <form action="" method="post">
      <label>
        <span>UserName</span>
        <input type="un" name="un">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="pw" pattern=".{8,}" title="Eight or more characters">
      </label>
      <button class="submit" type="submit" name="s1">Sign In</button>
      <label><?php echo $mes; ?></label>
    </form>
      
    </div>
</div>

</form>
</body>
</html>

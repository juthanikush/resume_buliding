<!DOCTYPE html>
<html>
<head>
  <title>Login & Registration </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <form  method="post" action="" name="f1" >
  <div class="cont">
    <div class="form sign-in">
      <h2>Sign In</h2>
    <form action="" method="post">
      <label>
        <span>Email Address</span>
        <input type="email" name="email">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password" pattern=".{8,}" title="Eight or more characters">
      </label>
      <button class="submit" type="submit" name="s1">Sign In</button>
      <a href="ForgotPassword.php"><p class="forgot-pass">Forgot Password ?</p></a>
    </form>
      
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Sign Up</h2>
          <form action="" method="post">
            <label>
              <span>Name</span>
              <input type="text" name="a1" pattern="[A-Za-z]{3+}">
            </label>
            <label>
              <span>Email</span>
              <input type="email" name="a2">
            </label>
            <label>
              <span>Password</span>
              <input type="password" name="a3" pattern=".{8,}" title="Eight or more characters">
            </label>
            <label>
              <span>Confirm Password</span>
              <input type="password" name="a4" pattern=".{8,}" title="Eight or more characters">
            </label>
        <button type="submit" name="s2" class="submit">Sign Up Now</button>
        </form>
      </div>
    </div>
  </div>
<script type="text/javascript" src="script.js"></script>
</form>
</body>
</html>
<?php
$k=mysqli_connect("localhost","root","","resume");
if(isset($_POST['s2'])){
$a=$_POST['a1'];
$a1=$_POST['a2'];
$a2=$_POST['a3'];
$a3=$_POST['a4'];
  if($a2==$a3){
    $k1="INSERT INTO sing_up (Name,E_mail,Password) VALUES ('$a','$a1','$a2')";
    $j=mysqli_query($k,$k1);
    if(isset($j)){
      header('location:login.php');
    }
    else{
      echo "Some think is wrong";
    }
  }else{
    echo "error";
  }
}
?>
<?php
$k=mysqli_connect("localhost","root","","resume");
if(isset($_POST['s1'])){
  
  $a1=$_POST['email'];
  $a2=$_POST['password'];
  $k1="SELECT Re_id,Name,E_mail,Password FROM sing_up WHERE E_mail='$a1'";
  $j=mysqli_query($k,$k1);
  while($c=mysqli_fetch_array($j)){
    $id=$c['Re_id'];
    $Name=$c['Name'];
    $Email=$c['E_mail'];
    $Password=$c['Password'];
  }
  /*echo $id;
  echo $Email;
  echo $Password;*/
  if($Email==$a1 && $Password==$a2){
    session_start();
    $_SESSION['id']=$id;
    $_SESSION['Name']=$Name;
    header('location:index.php');
  }else{
    echo "Invalid Username or Password";
  }
}
?>
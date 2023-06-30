<?php
$myuser='';
$myemail='';?><html>
<head>
<link href="css/style2.css" rel="stylesheet">
<style>
.self:hover{
  color:white;
  box-shadow:2px 2px 10px black;
}</style>
</head>

<body>
<div class="contain">
<div class="container"><h3>RESET PASSWORD</h3></div>

<form action="" method="post">
  <div class="formaction">
  <font color="red">*</font>USERNAME:<input type="text" name="username" placeholder="USERNAME"><br><br>
  <font color="red">*</font>EMAIL ID:<input type="text" name="email" placeholder="EMAIL"><br><br>
  <font color="red">*</font>PASSWORD:<input type="password" name="pass" placeholder="USERNAME"><br><br>
  <font color="red">*</font>CONFIRM PASSWORD:<input type="password" name="cpass" placeholder="EMAIL"><br><br>
  <input type="submit" name="reset" value="RESET"><br><br><br><br>
</form>
<?php
if(isset($_POST['reset'])){
include('includes/dbconn.php');
$myuser = mysqli_real_escape_string($con,$_POST['username']);
$myemail = mysqli_real_escape_string($con,$_POST['email']);
$mypass = mysqli_real_escape_string($con,$_POST['pass']);
$mypass1 = mysqli_real_escape_string($con,$_POST['cpass']);
$pass=MD5($mypass);
if($mypass==$mypass1){
  $sql="UPDATE user_tbl SET password='$pass' WHERE email='$myemail'";
  $result=mysqli_query($con, $sql);
  echo '<script>
      window.alert("Updated!")
      window.location.href="index.php";
    </script>';
}else{
echo '<script>
    window.alert("Check Your Password!")
    window.location.href="index.php";
  </script>';}
}

   ?>


</div>
</div>
</div>
</body>
<?php
include('includes/dbconn.php');
if(isset($_POST['reset1'])){
  $mypass = mysqli_real_escape_string($con,$_POST['pass']);
  $mypass1 = mysqli_real_escape_string($con,$_POST['cpass']);
  if($mypass==$mypass1){
    $sql="UPDATE user_tbl SET password='$mypass' WHERE email='$myemail'";
    $result=mysqli_query($con, $sql);

  }else{
  echo '<script>
      window.alert("Check Your Password!")
      window.location.href="index.php";
    </script>';}
}
  ?>
<html>

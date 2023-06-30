<html>
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
<div class="container"><h3>LOGIN</h3></div>

<form action="loginprocess.php" method="post">
  <div class="formaction">
  <font color="red">*</font>USERNAME:<input type="text" name="username" placeholder="USERNAME"><br><br>
<font color="red">*</font>  PASSWORD:<input type="password" name="password" placeholder="PASSWORD"><br><br>
  <input type="submit" name="submit" value="LOGIN"><br><br><br><br>
<center>  <a href="signup.php">Not Registered Sign Up Here</a><br><br>
  <a class="self" href="resetpass.php" style="background-color:blue; padding:10px;">Reset Password</a></center>

</form>
</div>
</div>
</div>
</body>
<html>

<html>
<head>
<link href="css/style2.css" rel="stylesheet">

</head>
<body>
<div class="contain">
<div class="container"><h3>USER SIGNUP</h3></div>
<form action="signupprocess.php" method="post">
  <div class="formaction">
  <font color="red">*</font>NAME:<input type="text" name="name" placeholder="NAME" pattern="[a-zA-Z  ]{0,40}" required><br>
<br><br>
<font color="red">*</font>PHONE:<input type="number" name="phone" placeholder="phone"min-length="10" required><br>
<br><br><font color="red">*</font>EMAIL:<input type="text" name="email" title="pattern(email@gmail.com)" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="EMAIL" required><br>
<br><br><font color="red">*</font>ADDRESS:<input type="text" name="address" placeholder="address" required><br>
<br><br>  <font color="red">*</font>USERNAME:<input type="text" name="username" placeholder="USERNAME" required><br>
<br><br><font color="red">*</font>  PASSWORD:<input type="password" name="password" placeholder="PASSWORD" onkeyup='check();' required>
  <br><br><input type="submit" name="submit" value="SIGNUP"><br><br><br><br>
  <a href="userlogin.php">ALREDY A CUSTOMER login Here</a>
</div>
</div>
</div>

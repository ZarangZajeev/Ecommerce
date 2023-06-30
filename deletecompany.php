
 <?php session_start() ?>
 <html>
<head>
<link href="css/style2.css" rel="stylesheet"></head>
<body>

<br><br><br>
<div class="contain">
<div class="container"><h3>Delete Company</h3></div>

<form action="" method="post">
  <div class="formaction">
  <font color="red">*</font>USERNAME:<input type="text" name="username" placeholder="USERNAME"><br><br>
  <input type="submit" name="save" value="DELETE"><br><br>
</form>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include('includes/dbconn.php');
if(isset($_POST['save'])){
			$name = $_POST['username'];

      $sql = ("SELECT * FROM user_tbl WHERE username='$name' and role='company'");
                $result=mysqli_query($con, $sql) or die();
                if (mysqli_num_rows($result)<=0){
                    echo "<script>alert('Company Not found');
                window.location.href='deletecompany.php';</script>";
                }
                else{
					$sql = ("DELETE FROM user_tbl WHERE username='$name' ");
                    $result=mysqli_query($con, $sql) or die();
                    if($result==true){
                        echo "<script>alert('Company Removed successfully');
        window.location.href='index.php';</script>";
                    }
                    else{
                      echo "<script>alert('Company Not Removed ');
      window.location.href='deletecompany.php';</script>";
                    }

			}}
?>


</div>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/logo.jpg" rel="shortcut icon">
      <title> E-MART:ONLINE SHOPPING PORTAL</title>
  <link href="css/jssss.css" rel="stylesheet">
  <link href="css/main3.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/text9.css">
  <link rel="stylesheet" type="text/css" href="css/img3copy.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

  <?php session_start(); ?>
  <nav class="navbar navbar-inverse" role="banner">
    <div class="container">
      <?php include('header.php');?>
  </div>
</nav>
        <br>

<div class="container wow fadeInDown">
    <div class="row">
        </div>
        <div class="col-md-6" style="border: solid #CFCFCF 2px; border-radius: 10px;">
        <div class="alert alert-success" id="infomsg" style="text-align: center"></div>

            <?php

                include('includes/dbconn.php');
                $id = $_SESSION['login_customer'];
                $sql = ("SELECT * FROM user_tbl WHERE username='$id'");
                $i = mysqli_query($con, $sql);
                while($row = mysqli_fetch_array($i))
                    {
                        $name = $row['name'];
						            $email = $row['email'];
						            $phone = $row['phone'];
                        $address = $row['address'];
                        $username = $row['username'];
                        $password = $row['password'];
                        $image=$row['image'];

                    }
                ?>
                <center><img src="<?php echo $image ?>" class="img-responsive wow fadeInDown" style="height:200px;min-width:200px;" /></center>
                <div>
        <h3 style="text-align:center; font-weight:bold;" class="wow fadeInDown">Account Information</h3>
        <hr>
            <dl class="dl-horizontal wow fadeInDown" style="text-align:left">
                <dt>Name</dt><dd><?php echo $id ?></dd>
                <dt>Phone</dt><dd><?php echo @$phone ?></dd>
                <dt>Email </dt><dd><?php echo @$email ?></dd>
                <dt>Address </dt><dd><?php echo @$address ?></dd>
                <dt>Username</dt><dd><?php echo @$username ?></dd>
                <dt>Password</dt><dd><?php echo '********'; ?></dd>

            </dl>
        <hr>
        </div>
             <form class="form-horizontal" name="adminacc" id="adminacc" method="POST" action="" style="margin-top: 20px;">
                <table>

                </table>
                

                <div class="form-group">
                    <label for="username" class="col-sm-4 control-label wow fadeInDown">Phone</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control wow fadeInDown" id="Phone" name="phone" placeholder="<?php echo $phone?>"required>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="username" class="col-sm-4 control-label wow fadeInDown">Email</label>
                    <div class="col-sm-6">
                    <input type="email" class="form-control wow fadeInDown" id="email" name="email" placeholder="<?php echo $email?>"required>
                    </div>
                </div>


                <div class="form-group">
                    <label for="username" class="col-sm-4 control-label wow fadeInDown">Username</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control wow fadeInDown" id="username" name="nuname" placeholder="Enter Username" required>
                    </div>
                </div>

                <div class="row">
                    <label class="inline-block">Current Password</label>
                    <span id="currentPassword"
                        class="validation-message"></span> <input
                        type="password" name="currentPassword"
                        class="full-width">

                </div>
                <div class="row">
                    <label class="inline-block">New Password</label> <span
                        id="newPassword" class="validation-message"></span><input
                        type="password" name="newPassword"
                        class="full-width">

                </div>
                <div class="row">
                    <label class="inline-block">Confirm Password</label>
                    <span id="confirmPassword"
                        class="validation-message"></span><input
                        type="password" name="confirmPassword"
                        class="full-width">

                </div>



                <hr>
                <em style="color:red;" class="wow fadeInDOwn"> Note Fill up the fields before hitting save changes button</em>
                <div class="form-group">

                    <center><input type="submit" class="btn btn-success wow fadeInDown" name="update" value="Save Changes">
                </center></div>
              </form>














              </div>
        </div>

</div>
<?php


		include('includes/dbconn.php');
if(isset($_POST['update'])){
		$id = $_SESSION['login_customer'];
		
		$phone = $_POST['phone'];
		$mail = $_POST['email'];
		$nusername = $_POST['nuname'];
		$password = $_POST['npword'];
    $curreword = $_POST['currpword'];
    $npassword=MD5('$password');
    $cpassword=MD5('$curreword');


		if (empty($nusername) || empty($npassword))
				echo "Please fill all fields";
		else {

      $query="SELECT * FROM user_tbl where username='$nusername'";
      $re=mysqli_query($con,$query);
      if(mysqli_num_rows($re)>1){
        echo "<script>alert('!!!!!UserName alredy Exist!!!!! Please change your Username');
          window.location.href='custacc.php';</script>";
      }
      else{

          $query="SELECT * FROM user_tbl where phone='$phone'";
          $re=mysqli_query($con,$query);
          if(mysqli_num_rows($re)>1){
            echo "<script>alert('PhoneNumber alredy Exist!Please change your Phonenumber');
              window.location.href='custacc.php';</script>";
        }
        else{
          $sql=("UPDATE user_tbl SET
                           phone='$phone',
                           email = '$mail',
                           username='$nusername',
                           password='$npassword'
                            WHERE username='$id' and password='$cpassword'") or die(mysqli_error());
          $result=mysqli_query($con, $sql);
          $_SESSION['login_customer'] = $nusername ;

          echo "<script>alert('Save Successfully!');
                window.location.href='custacc.php';</script>";

          }
        }

            }

        }



		mysqli_close($con);
?>





<br><br><br>
<!--*************************************************** FOOTERS **********************************************-->

<footer id="footer" class="midnight-blue wow fadeInDown">
        <?php include('footer.php');?>
    </footer><!--/#footer-->
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
<?php ?>

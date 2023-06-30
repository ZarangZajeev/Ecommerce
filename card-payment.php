<?php
    session_start();
if(isset($_SESSION['login_customer'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/logo.jpg" rel="shortcut icon">
      <title> E-KART:ONLINE SHOPPING PORTAL</title>
  <link href="css/jssss.css" rel="stylesheet">
  <link href="css/main3.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/text9.css">
  <link rel="stylesheet" type="text/css" href="css/img3copy.css">
<style>
.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #0C4160;

    padding: 30px 10px;
}

.card {
    max-width: 500px;
    margin: auto;
    color: black;
    border-radius: 20 px;
}

p {
    margin: 0px;
}

.container .h8 {
    font-size: 30px;
    font-weight: 800;
    text-align: center;
}

.btn.btn-primary {
    width: 100%;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 15px;
    background-image: linear-gradient(to right, #77A1D3 0%, #79CBCA 51%, #77A1D3 100%);
    border: none;
    transition: 0.5s;
    background-size: 200% auto;

}


.btn.btn.btn-primary:hover {
    background-position: right center;
    color: #fff;
    text-decoration: none;
}



.btn.btn-primary:hover .fas.fa-arrow-right {
    transform: translate(15px);
    transition: transform 0.2s ease-in;
}

.form-control {
    color: white;
    background-color: #223C60;
    border: 2px solid transparent;
    height: 60px;
    padding-left: 20px;
    vertical-align: middle;
}

.form-control:focus {
    color: white;
    background-color: #0C4160;
    border: 2px solid #2d4dda;
    box-shadow: none;
}

.text {
    font-size: 14px;
    font-weight: 600;
}

::placeholder {
    font-size: 14px;
    font-weight: 600;
}
</style>


</head><!--/head-->

<!--*********************************************START OF NAVIGATION BAR****************************************-->
<body>
<?php include('includes/dbconn.php');
      $uid = $_SESSION['login_customer'];
        $total=0;
        $balance=0;

        $uid = $_SESSION['login_customer'];

             $sql = ("SELECT balanace FROM `payment_tbl` where customer_username='$uid'") ;
             $p = mysqli_query($con, $sql);
             while($l = mysqli_fetch_array($p)){
               $balance=$l['balanace']-$total;
             }



         if($balance>0){
           if($total>20000)
            $coin=20;
            else
            $coin=(int)($total/100);


        ?>

<nav class="navbar navbar-inverse" role="banner">
            <div class="container" >
                <div class="navbar-header"style="width:60%">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <a href="index.php"  style="margin-top:20px; color:#FFF;">
                <!--      <img src="images/logo.jpg"  width="15% "/> --> Online School Products Sale Website</a>
                <a href="showcarthead.php" style="color:white;margin-left:40%;">Back To Cart</a>
                </div>

                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                           <li></li>

<li></li>
<li>        <div class="container p-0">
    <form action="" method="post">
        <div class="card px-4">
            <p class="h8 py-3">Payment Details</p>
            <div class="row gx-3">
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Person Name</p>
                        <input class="form-control mb-3" name="name" type="text" placeholder="Name" value="Barry Allen">
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Card Number</p>
                        <input class="form-control mb-3" type="text" name="card_no" minlength="16" maxlength="16" placeholder="1234 5678 435678">
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Expiry</p>
                        <input class="form-control mb-3" type="text" placeholder="MM/YYYY">
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">CVV/CVC</p>
                        <input class="form-control mb-3 pt-2 " type="password" placeholder="***">
                    </div>
                </div>
                <div class="col-12">
                    <div class="btn btn-primary mb-3">
                    <span class="fas fa-arrow-right">   <input type="submit" class="btn btn-info" name="submit" VALUE="<?php echo "pay "; echo $balance; ?>"></span>
                        <span class="fas fa-arrow-right"></span>
                    </div>
         </form>
                </div>
            </div>
        </div>
    </div>
</li>

</li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
<br><br>

   
<!--*********************************************START OF Availables************************************************-->



<?php include('includes/dbconn.php');
if(isset($_POST['submit'])){
    $uid = $_SESSION['login_customer'];
    $name=$_POST['name'];
    $card_no=$_POST['card_no'];
    $sql = ("INSERT INTO payment_info VALUES('','$uid','$name','$card_no',now())");
      mysqli_query($con, $sql);
  echo '<script>alert("payment sucessfull");
         window.location.href="index.php"</script>';}
         }




  ?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>payment_info
</body>
</html>
<?php }else{
  echo '<script>window.location.href="userlogin.php";</script>';
}?>

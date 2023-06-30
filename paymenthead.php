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
</style>


</head><!--/head-->

<!--*********************************************START OF NAVIGATION BAR****************************************-->
<body>

<nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <a href="index.php"><h4 class="wow fadeInDown" style="margin-top:20px; color:#FFF;">
                <!--      <img src="images/logo.jpg"  width="15% "/> --> Online School Products Sale Website</h4></a>
                </div>

                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                           <li><a href="showcarthead.php">Back To Cart</a></li>

<li></li>

</li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->


        <?php include('includes/dbconn.php');
      $uid = $_SESSION['login_customer'];
        $total=0;
        $balance=0;

          $pid= $_GET['buy'];
          $sql = ("SELECT prize FROM `pro_dtl_tbl` where pro_id=$pid") ;
          $p = mysqli_query($con, $sql);
          while($l = mysqli_fetch_array($p)){
            $total=$total+$l['prize'];
          }
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

<!--*********************************************START OF Availables************************************************-->





      <form class="form-horizontal" enctype="multipart/form-data" method="post" action="">
      <div class="modal-body">

        <h3><center>TOTAL AMOUNT TO BE USED:</center></h3><h2><center> <?php echo $total;?><B></center></h2>
        <h3><center>BALANCE AFTER DEDUCTION:</center></h3><h2><center> <?php echo $balance;?><B></center></h2>
          <h3><center>OBTAINED COIN:</center></h3><h2><center> <?php echo $coin;?><B></center></h2>


<center><button type="submit" class="btn btn-primary" name="savechanges"><i class="glyphicon glyphicon-thumbs-up"></i> COMPLETE PAYMENT</button></center>


      </div>
      </form>
    </div>
  </div>
</div>



<?php include('includes/dbconn.php');

  if(isset($_POST['savechanges'])){
     $uid = $_SESSION['login_customer'];
      $prize=0;
      $balance=$balance+$coin;
      $total=0;
      $pid= $_GET['buy'];
      $sql = "INSERT INTO recomendation VALUES('$uid','$pid')" ;
      mysqli_query($con, $sql);
      $sql = ("SELECT * FROM `pro_dtl_tbl` where pro_id='$pid'") ;
      $i = mysqli_query($con, $sql);
      while($row = mysqli_fetch_array($i)){
        $prize= $row['prize'];
        $total=$total+$prize;
      }
      $sql = ("INSERT INTO order_tbl VALUES('','$uid','$total',now())");
      mysqli_query($con, $sql);




      $sql = ("SELECT * FROM order_tbl");
      $re=mysqli_query($con, $sql);
      while($row = mysqli_fetch_array($re)){
        $order_id= $row['order_id'];
      }
      $sql = ("INSERT INTO payment_history_tbl VALUES('$uid','$total','$order_id',now())");
      mysqli_query($con, $sql);

      $sql=("UPDATE payment_tbl SET balanace='$balance' WHERE customer_username='$uid'");
      $re=mysqli_query($con, $sql);


               $pid= $_GET['buy'];;


               $sql=("SELECT prize,stock FROM pro_dtl_tbl where pro_id='$pid' " );
               $re=mysqli_query($con, $sql);
               while($l = mysqli_fetch_array($re)){
                 $prize= $l['prize'];
                  $stock=$l['stock'] - 1;
                  $sql=("UPDATE pro_dtl_tbl SET stock='$stock' WHERE pro_id='$pid'");
                  mysqli_query($con, $sql);


               $sql = ("INSERT INTO ordersum_tbl VALUES('$order_id','$prize','$pid',1)");
               mysqli_query($con, $sql);

             }
echo '<script>alert("proceed to payment");
                                   window.location.href="card-payment.php"</script>';

                          }}
else{
  echo '<script>alert("please recharge");
         window.location.href="index.php"</script>';}





  ?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
<?php }else{
  echo '<script>window.location.href="userlogin.php";</script>';
}?>

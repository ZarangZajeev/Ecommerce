<?php
    session_start();
$total=0;
$uid = $_SESSION['login_customer'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
 <!--    <link href="images/logo.jpg" rel="shortcut icon"> -->
    <title>E-MART</title>

	<!-- core CSS -->
  <link href="css/jssss.css" rel="stylesheet">
  <link href="css/main3.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/text10.css">
  <link rel="stylesheet" type="text/css" href="css/img3copy.css">



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
        $total=0;
        $balance=0;
        $sql = ("SELECT * FROM `cart_tbl` where customer_username='$uid'") ;
        $i = mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($i)){
          $pid= $row['pro_id'];
          $qty= $row['qty'];
          $sql = ("SELECT prize FROM `pro_dtl_tbl` where pro_id=$pid") ;
          $p = mysqli_query($con, $sql);
          while($l = mysqli_fetch_array($p)){
            $total=$total+($qty*$l['prize']);
          }}

             $sql = ("SELECT balanace FROM `payment_tbl` where customer_username='$uid'") ;
             $p = mysqli_query($con, $sql);
             while($l = mysqli_fetch_array($p)){
               $balance=$l['balanace']-$total;
             }
         if($balance>=0){
           if($total>2000)
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



<?php
include('includes/dbconn.php');

  if(isset($_POST['savechanges'])){

      $balance=$balance+$coin;


      $sql = ("INSERT INTO order_tbl VALUES('','$uid','$total',now())");//INSERT INTO ORDER TABLE TO SUMMARAISE THE ORDER DATILS
      mysqli_query($con, $sql);

      $sql = ("SELECT * FROM order_tbl");
      $re=mysqli_query($con, $sql);
      while($row = mysqli_fetch_array($re)){
        $order_id= $row['order_id'];
      }
      $sql = ("INSERT INTO payment_history_tbl VALUES('$uid','$total','$order_id',now())");//INSERT INTO PAYMRNT HISTORY TABLE TO TRACK PAYMENT GONE FROM USER BALANCE
      mysqli_query($con, $sql);

      $sql=("UPDATE payment_tbl SET balanace='$balance' WHERE customer_username='$uid'");//UPDATE BALANCE IN THE PAYMENT TABLE BY SUBSTARCTING THE TOTAL AMOUNT
      $re=mysqli_query($con, $sql);

      $sql = ("SELECT * FROM `cart_tbl` where customer_username='$uid' ") ;
             $i = mysqli_query($con, $sql);
             while($row = mysqli_fetch_array($i)){
               $pid= $row['pro_id'];
               $sql=("SELECT prize,stock FROM pro_dtl_tbl where pro_id='$pid' " );
               $re=mysqli_query($con, $sql);
               while($l = mysqli_fetch_array($re)){
                 $prize= $l['prize'];

                  $sql = ("SELECT * FROM `cart_tbl` where customer_username='$uid' and pro_id='$pid'") ;
                  $i = mysqli_query($con, $sql);
                  while($row = mysqli_fetch_array($i)){
                    $qty= $row['qty'];
                    $stock=$l['stock'] - $qty;
                    $sql=("UPDATE pro_dtl_tbl SET stock='$stock' WHERE pro_id='$pid'");//UPDATING THE STOCK BY SUBSTRACTING THE STOCK
                    mysqli_query($con, $sql);

             }
             }}




             $sql = ("SELECT * FROM `cart_tbl` where customer_username='$uid' ") ;
                    $i = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($i)){
                      $pid= $row['pro_id'];
                      $sql=("SELECT prize,stock FROM pro_dtl_tbl where pro_id='$pid' " );
                      $re=mysqli_query($con, $sql);
                      while($l = mysqli_fetch_array($re)){
                        $prize= $l['prize'];
                        $sql = ("INSERT INTO ordersum_tbl VALUES('$order_id','$prize','$pid','$qty')");//INSERT INTO ORDER SUM TABLE FOR DATILED PRODUCT PURCAHED
                        mysqli_query($con, $sql);
                      }
                      }


                      $sql = ("DELETE FROM cart_tbl where customer_username='$uid' " );//DELETE PRODUCT FROM CART
                          mysqli_query($con, $sql);
                echo '<script>alert("Order Completed");
                      window.location.href="index.php"</script>';

                          }
} else{
  echo '<script>alert("please recharge");
         window.location.href="index.php"</script>';}





  ?>




<!----------loginModal----------->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

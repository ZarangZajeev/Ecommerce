<html>
<?php session_start();
$id = $_GET['info'];
?><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/foods/logo.png" rel="shortcut icon">
    <title>E-MART</title>

	<!-- core CSS -->
<style>
.info{

  display:inline-block;
  float:right;
  margin: 0 auto;
  width:50%;

}
*{
  box-sizing: border-box;
}
.btn111:hover{
  color: #fff;
    transform: scale(1.125);
    box-shadow: rgba(0, 0, 0, 0.24) 0px 5px 10px
}
.bt1{
background-color:#5cb85c;
}
</style>
<link href="css/jssss.css" rel="stylesheet">
<link href="css/main3.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/text9.css">
<link rel="stylesheet" type="text/css" href="css/img3copy.css">
<link rel="stylesheet" type="text/css" href="css/text7.css">
<link rel="stylesheet" type="text/css" href="css/text11.css">
</head><body>
<!--*********************************************START OF NAVIGATION BAR****************************************-->

 <nav class="navbar navbar-inverse" role="banner">
    <div class="container">
      <?php include('header.php');?>
  </div>
</nav>

<?php if (isset($_SESSION['login_customer'])){?>
  <div class="container1">
    <div class="container1">
<?php include('chardetail.php');?>

      </div></div><?php } ?>
                                                                                    <!-- Product Info view-->

<br><br><div class="container">
         <?php include('includes/dbconn.php');
         if(isset($_GET['info'])){

         if (isset($_SESSION['login_customer'])){
            $uname = $_SESSION['login_customer'];
          }
        $id = $_GET['info'];
        $sql = "SELECT * FROM product_tbl WHERE pro_id = '$id'" or die (mysqli_error($con));
        $result=mysqli_query($con, $sql) or die (mysqli_error($con));
        if(mysqli_num_rows($result)>=0){
        while($row = mysqli_fetch_assoc($result)){
          $id = $row['pro_id'];
          $sql = "SELECT * FROM pro_dtl_tbl WHERE pro_id = '$id'" ;
          $r=mysqli_query($con, $sql) or die (mysqli_error($con));
          if(mysqli_num_rows($r)>=0){
          while($l = mysqli_fetch_assoc($r)){
        ?>
        <div class="cards3" style="left:10px;" >
        <div class="image3">
        <img src="<?php echo $row['image']?>">
        </div>
        <div class="des1">
                                                                                  <!-- Product add to Cart-->

          <form action="" method="post"><button class="btn111" name="order" type="submit"  style="border-color: inherit;margin-top:100px;margin-right:20px; padding:20px; background-color:orange;color:white;" value="<?php echo $row['pro_id']; ?>"><i class="glyphicon glyphicon-shopping-cart"></i> Add to Cart</button>
          </form>
          <form action="paymenthead.php" method="get"><button class="btn111"name="buy" type="submit"  style="border-color: inherit;margin-top:100px; padding:20px;padding-left: 150px;background-color:green;color:white;" value="<?php echo $row['pro_id']; ?>"><i class="glyphicon glyphicon-shopping-cart"></i> Buy</button>
          </form>

        </div>
<br><br><br><br><br><br>
      </div>


      <div class="info" style="padding-bottom: 100px;padding-top:5%; color:black; ">

        <p style="padding-right:30%; padding-top:5%; color:black; font-size:25px;"><?php echo $row['name']; ?></p><br>
<p>PRIZE</p>
<p style="padding-right:40%; padding-top:5%; color:red; font-size:25px;">&#x20B9;<?php echo $l['prize']; ?><p><br><br>
<p><b>SPECIFICATIONS</b></P>
  <p><?php echo $row['description']; ?></p><br><br>
  <?php if (isset($_SESSION['login_customer'])){?>
    <form action="review.php" method="get"><button  name="review" type="submit"  value="<?php echo $row['pro_id']; ?>" style="border-color: inherit;margin-top:100px;margin-right:20px; padding:5px; background-color:blue;color:white;"> Rate the Product</button></form>
<?php } ?>

    <?php }}}
      }}
        ?>

              <?php
                  $pro=$_GET['info'];
                  $sql="SELECT * FROM review where proid='$pro' && aprove=1 order by rating desc   limit 5";
                  $result=mysqli_query($con, $sql);
                  if(mysqli_num_rows($result)>0){?>
                    <table border="1" >
                        <tr><td>
                          <p style="padding:10px"><b>Review</b></p>
                        </td></tr><?php   while($row=mysqli_fetch_assoc($result)){ ?>
                        <tr><td><br>
                          <p style="padding-left:10px"><b><?php echo $row['username']; ?></b></p><br>
                            <p style="padding-left:20px">Rating:<?php echo $row['rating']; ?><br>

                            Review:<?php echo $row['review']; ?></p>
                        </td></tr>

                  <?php }}
              ?>


        </table>  </div>
</div>

                                                                                          <!--        add to cart        -->

   <?php

      if(isset($_POST["order"])){
          if (isset($_SESSION['login_customer'])){
            $pid=$_POST["order"];
            $uid = $_SESSION['login_customer'];
            include('includes/dbconn.php');
            $sql = "SELECT * FROM cart_tbl where customer_username='$uid' and pro_id=$pid";
            $result=mysqli_query($con, $sql);
            if(mysqli_num_rows($result)>0){
              $row = mysqli_fetch_assoc($result);
              $quan = $row['qty'];
              $quan=$quan+1;
              $sql = "SELECT * FROM pro_dtl_tbl WHERE pro_id = '$pid'" ;
              $re=mysqli_query($con, $sql) or die (mysqli_error($con));
              if(mysqli_num_rows($re)>=0){
              while($l = mysqli_fetch_assoc($re)){
                $qtyy=$l['stock'];
                  if($quan<=$qtyy){
              $sql = ("UPDATE cart_tbl set qty='$quan' WHERE customer_username='$uid' and pro_id=$pid") ;
              $result=mysqli_query($con, $sql);
            }}}
            }
            else{
            $sql = "INSERT INTO cart_tbl (customer_username,pro_id,qty) VALUES ('$uid',$pid,1)";
            $result=mysqli_query($con, $sql);
          }
            if($result==true){
              echo '<script>window.location.href="index.php";</script>';}
            }
            else{
              echo '<script>window.location.href="userlogin.php";</script>';
            }}

      ?>
      <?php
        if (isset($_SESSION['login_customer'])){
          include('recomendation.php');}?>



      <footer id="footer" class="midnight-blue wow fadeInDown">
              <?php include('footer.php');?>
          </footer><!--/#footer-->
          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script src="js/jquery.prettyPhoto.js"></script>
          <script src="js/jquery.isotope.min.js"></script>
          <script src="js/main.js"></script>
          <script src="js/wow.min.js"></script>
</body>
</html>

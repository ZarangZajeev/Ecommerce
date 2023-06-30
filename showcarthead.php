<?php
    session_start();
$sth=0;
    $count = 0;
    if (isset($_SESSION['login_customer'])){
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
  <link rel="stylesheet" type="text/css" href="css/text10.css">
  <link rel="stylesheet" type="text/css" href="css/img3copy.css">
  <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
       <?php include('header.php');?>
   </div>
  </nav>


<!--*********************************************START OF Availables************************************************-->

<section id="tour-packages" class="center wow fadeInDown">
    <div style="font-size:30px; font-family:verdana; font-weight:bold; color: #8B8B00; text-align:center;">CART</div>
        <p style="text-align:center; font-family:verdana;"><br></p>

        <div class="container" style="min-height:400px;">
          <table  style="border: 1px dashed #8c8b8b;
            border-top: 1px dashed #8c8b8b;">


     <?php include('includes/dbconn.php');
     $uname = $_SESSION['login_customer'];
    $count = 0;
    $sql = "SELECT * FROM cart_tbl WHERE customer_username = '$uname' order by pro_id asc" or die (mysqli_error($con));
    $result=mysqli_query($con, $sql) or die (mysqli_error($con));
    if(mysqli_num_rows($result)>=0){
      while($kk = mysqli_fetch_assoc($result)){
        $id = $kk['pro_id'];
        $count++;
        $qty=$kk['qty'];
        $sql = "SELECT * FROM product_tbl WHERE pro_id = $id "  or die (mysqli_error($con));
        $r=mysqli_query($con, $sql) or die (mysqli_error($con));
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($r);
            $id = $row['pro_id'];
            $sql = "SELECT * FROM pro_dtl_tbl WHERE pro_id = '$id'" ;
            $re=mysqli_query($con, $sql) or die (mysqli_error($con));
            if(mysqli_num_rows($re)>0){
            while($l = mysqli_fetch_assoc($re)){
              $qtry=$l['stock'];
    ?>




              <tr style="border: 1px dashed #8c8b8b; cursor:pointer;">
                <td  style="border: 1px dashed #8c8b8b;"><center><strong class="wow fadeInDown"><p style="margin-top:25px;">No.<?php echo $count;?></p></strong></center></td>
                  <td style="border: 1px dashed #8c8b8b;"><center><img src="<?php echo $row['image']?>" width="120px;" class="img-responsive img-rounded wow fadeInDown"></center></td>
                    <td style="border: 1px dashed #8c8b8b;">
                    <dl class="dl-horizontal wow fadeInDown" style="text-align:left">
                    <dt>Name:</dt> <dd><?php echo $row['name'];?></dd>
                    <dt>Description:</dt> <dd><?php echo $row['description'];?></dd>
                    <?php if($l['stock']<=0){ $sth=1;?>
                    <dd><font color="red" size="6px">STOCK NOT AVAILABLE</font></dd>
                  <?php }else{ ?>
                    <dt>Quantity:</dt> <dd><?php echo $kk['qty'];?></dd>
                    <dt>Prize:</dt> <dd><?php echo $l['prize'];?></dd>
                    <dt>MRP:</dt> <dd><?php echo $l['mrp'];?></dd>
                    <?php } ?>
                    </dl></td>
                   <td style="border: 1px dashed #8c8b8b;"><form action="" method="post"><button class="btn btn-primary  wow fadeInDown" name="cancel" type="submit" style="margin-top:25px;" value="<?php echo $id ?>">Cancel</button></form>
                     <dt>Quantity:</dt> <dd><form method="post">
                      <input type="hidden" name="id" value="<?php echo $row['pro_id']?>">
                       <input type="submit" name="minu" value="-"style="width:20px;">
                       <input type="button" name="stk" value="<?php echo $kk['qty'];?>"style="width:20px;">
                       <input type="submit" name="add" value="+"style="width:20px;"></form></dd>
                   </td>
                </tr>
  <?php }}
  }}
  }

  if(isset($_POST["add"])){
    $pid=$_POST["id"];
    $uid = $_SESSION['login_customer'];
    $sql = "SELECT * FROM cart_tbl where  customer_username='$uid' and pro_id=$pid";
    $result=mysqli_query($con, $sql);
    if(mysqli_num_rows($result)>0){
      $row = mysqli_fetch_assoc($result);
      $quan = $row['qty'];
      $quan=$quan+1;
    }
    $sql = "SELECT * FROM pro_dtl_tbl WHERE pro_id = '$pid'" ;
    $re=mysqli_query($con, $sql) or die (mysqli_error($con));
    if(mysqli_num_rows($re)>=0){
    while($l = mysqli_fetch_assoc($re)){
      $qtyy=$l['stock'];
      $sql = "SELECT * FROM product_tbl WHERE pro_id = '$pid'" ;
      $re=mysqli_query($con, $sql) or die (mysqli_error($con));
      $m = mysqli_fetch_assoc($re);
      $name=$m['name'];
      if($quan>$qtyy){?>
        <p style="color:red;">Max Quantity Reached for product &nbsp;<b><?php echo $name ?></b> </p>
      <?php }
      else{
        $sql = ("UPDATE cart_tbl set qty='$quan' WHERE  customer_username='$uid' and pro_id=$pid") ;
        $result=mysqli_query($con, $sql);
          echo '<script>window.location.href="showcarthead.php";</script>';
      }
    } }

    }

    if(isset($_POST["minu"])){
      $pid=$_POST["id"];
        $uid = $_SESSION['login_customer'];
      $sql = "SELECT * FROM cart_tbl where customer_username='$uid' and pro_id=$pid";
      $result=mysqli_query($con, $sql);
      if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        $quan = $row['qty'];
        $quan=$quan-1;
        if($quan<=0){
          $sql = "DELETE FROM cart_tbl WHERE pro_id = $pid AND customer_username='$uid'";
          mysqli_query($con, $sql);
          echo '<script>window.location.href="showcarthead.php";</script>';

        }
        $sql = ("UPDATE cart_tbl set qty='$quan' WHERE customer_username='$uid' and pro_id=$pid") ;
        $result=mysqli_query($con, $sql);
        echo '<script>window.location.href="showcarthead.php";</script>';

      }


  }
  if(isset($_POST["cancel"])){
    $pid=$_POST["cancel"];
    $sql = "DELETE FROM cart_tbl WHERE pro_id = $pid AND customer_username = '$uname'";
    mysqli_query($con, $sql);
    echo '<script>window.location.href="showcarthead.php";</script>';
  }

  ?>

</table>
            </div>
        </div>
    </section>
    <?php include('includes/dbconn.php');
   $uname = $_SESSION['login_customer'];
   $count = 0;
   $id = 0;
   $total=0;
   $sql = "SELECT * FROM cart_tbl WHERE customer_username = '$uname' order by c_id desc" or die (mysqli_error($con));
   $result=mysqli_query($con, $sql) or die (mysqli_error($con));
   if(mysqli_num_rows($result)>=0){
     while($row = mysqli_fetch_assoc($result)){
       $id = $row['pro_id'];
       $qty = $row['qty'];
       $count++;
       $sql = "SELECT * FROM product_tbl WHERE pro_id = $id " or die (mysqli_error($con));
       $r=mysqli_query($con, $sql) or die (mysqli_error($con));
       if(mysqli_num_rows($result)>=0){
           $row = mysqli_fetch_assoc($r);
           $id = $row['pro_id'];
           $sql = "SELECT * FROM pro_dtl_tbl WHERE pro_id = '$id'" ;
           $re=mysqli_query($con, $sql) or die (mysqli_error($con));
           if(mysqli_num_rows($re)>=0){
           while($l = mysqli_fetch_assoc($re)){
             $total=$total+($qty*$l['prize']);}}}}}
             ?>




<!--*************************************************** FOOTERS **********************************************-->
<div class="container">
<!--<div class="vertical-center">-->

<?php
if($count>0){?>
<p align="right">Total:<?php echo $total?></p><?php } ?>
</div>
<div class="container">

<?php
  if($count>0){
    if($sth!=1) {?>
      <a class="btn btn-success  wow fadeInDown" name="order" type="button" style="margin-top:25px;" href="billhead.php"><i class="glyphicon glyphicon-shopping-cart"></i> Buy</a></td>
    <?php } else{?>
      <button class="btn btn-success  wow fadeInDown" name="order" style="margin-top:25px;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-shopping-cart"></i> Buy</button></td>
      <?php
  }
}
?>
</div>



<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Stock Not Available</h4>
      </div>
      <div class="modal-body">

        <?php include('includes/dbconn.php');
        $uname = $_SESSION['login_customer'];
       $count = 0;
       $sql = "SELECT * FROM cart_tbl WHERE customer_username = '$uname' order by c_id desc" or die (mysqli_error($con));
       $result=mysqli_query($con, $sql) or die (mysqli_error($con));
       if(mysqli_num_rows($result)>=0){
         while($row = mysqli_fetch_assoc($result)){
           $id = $row['pro_id'];
           $count++;

           $sql = "SELECT * FROM pro_dtl_tbl WHERE pro_id = $id and stock=0" or die (mysqli_error($con));
           $r=mysqli_query($con, $sql) or die (mysqli_error($con));
           if(mysqli_num_rows($result)>0){
               $row = mysqli_fetch_assoc($r);
               $id = $row['pro_id'];
               $sql = "SELECT * FROM product_tbl WHERE pro_id = '$id'" ;
               $re=mysqli_query($con, $sql) or die (mysqli_error($con));
               if(mysqli_num_rows($re)>0){
               while($l = mysqli_fetch_assoc($re)){
       ?>



      <center>  <p><font color="red" size="5px"><?php echo $l['name'];}}}}} ?></font></p></center>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Remove Product to continue shopping</button>
      </div>
    </div>

  </div>
</div>

</div>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php

} ?>

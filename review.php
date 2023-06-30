<?php   session_start();
include('includes/dbconn.php');
  $pid= $_GET['review'];

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
  <link rel="stylesheet" type="text/css" href="css/font.css">
    <link rel="stylesheet" type="text/css" href="css/text12.css">
  <link rel="stylesheet" type="text/css" href="css/img3copy.css">
<style>
.search{
  width:50%;
}
.button1{
  width:100%;
}
.bt1{
  background-color: #5cb85c;
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

<div class="container">
  <b> Ratings and Reviews</b>
  <b><?php   include('includes/dbconn.php');
        $pid= $_GET['review'];
        $sql = "SELECT * FROM product_tbl where pro_id='$pid'";
        $r=mysqli_query($con, $sql) or die (mysqli_error($con));
        $row = mysqli_fetch_assoc($r);
    ?>
    <div class="collapse navbar-collapse navbar-right wow fadeInDown" ><button>
    <img src="<?php echo $row['image']; ?>"/>  <?php echo $row['name']; ?>
</button>
</div>  </b>


                                                      <!--CONDITION FOR ORDER PURCHASE-->


            <?php if (isset($_SESSION['login_customer'])){
               $username = $_SESSION['login_customer'];

              $sql="select order_id from order_tbl where username='$username'";
              $re=mysqli_query($con, $sql);
              while($row=mysqli_fetch_assoc($re)){
                $order=$row['order_id'];
                $sql="select pro_id from ordersum_tbl where orderid='$order'&& pro_id='$pid'";
                $ree=mysqli_query($con, $sql);
              }
              if(mysqli_num_rows($ree)>0){


              ?>

              <form action="" method="post">
                <table border="1"  >
                  <tr><td><br><br><center>WRITE THE REVIEW</center>
                    <center><textarea name="review" margin="10px"></textarea></center>
                    <br><br>
                  </td></tr>
                  <tr><td>
                    <br><br><center><b>RATE THE PRODUCT </b><br>
                      <input name="rate" type="radio"value="1">1</input>
                      <input name="rate"type="radio"value="2">2</input>
                      <input name="rate"type="radio"value="3">3</input>
                      <input name="rate"type="radio"value="4">4</input>
                      <input name="rate"type="radio"value="5">5</input></center><br><br>
                  </td></tr>
                  <tr><td>
                    <center><button  name="rated" type="submit"  value="<?php echo $pid; ?>" style="border-color: inherit;margin-top:10px;margin-right:20px; padding:5px; background-color:blue;color:white;"> Rate the Product</button></center>
                  </td></tr>
              </table>
            </form><BR><BR><BR>
            <?php }


                                                  //IF THE USER HAVENT PURCHASED THE PRODUCT 
          else{?>
            <table border="1">
              <tr><td>
            <br><br><center>    <i class="glyphicon glyphicon-shopping-cart" ></i><p style="font-size:40px"><B>Havent Purchased this Product? </B></p>
              Sorry!You are not allowded to review this product since you havent bought the product
              <br><br></center></td></tr>
            </table><br><br>
          <?php }} else {
              echo '<script> window.location.href="index.php";
              </script>';

            }?>











</div>
              <footer id="footer" class="midnight-blue wow fadeInDown">
                      <?php include('footer.php');?>
                  </footer><!--/#footer-->


                  <?php
                     if(isset($_POST["rated"])){
                           $rate=$_POST['rate'];
                           $review=$_POST['review'];
                           $rated=$_POST['rated'];
                            $username = $_SESSION['login_customer'];
                           if($rate!=""&&$review!=""){
                             $sql=("INSERT INTO review VALUES ('',$pid,'$username','$review',$rate,0)");
                             mysqli_query($con, $sql);
                           echo '<script>window.location.href="index.php"
                                                              </script>';}
                      }
                  ?>

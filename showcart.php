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
  <link rel="stylesheet" type="text/css" href="css/text10.css">
  <link rel="stylesheet" type="text/css" href="css/img3copy.css">
  </head><!--/head-->
<!--*********************************************START OF NAVIGATION BAR****************************************-->


            	<table class="table table-responsive table-hover" style="border: 1px dashed #8c8b8b;
                border-top: 1px dashed #8c8b8b;">


         <?php include('includes/dbconn.php');
         session_start();
         $uname = $_SESSION['login_customer'];
        $count = 0;
        $id = 0;
        $total=0;
        $sql = "SELECT * FROM cart_tbl WHERE customer_username = '$uname' order by c_id desc" or die (mysqli_error($con));

        $result=mysqli_query($con, $sql) or die (mysqli_error($con));

        if(mysqli_num_rows($result)>=0){
          while($row = mysqli_fetch_assoc($result)){
            $id = $row['pro_id'];
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

        ?>




                	<tr style="border: 1px dashed #8c8b8b; cursor:pointer;">
                    <td  style="border: 1px dashed #8c8b8b;"><center><strong class="wow fadeInDown"><p style="margin-top:25px;">No.<?php echo $count;?></p></strong></center></td>
                    	<td style="border: 1px dashed #8c8b8b;"><center><img src="<?php echo $row['image']?>" width="120px;" class="img-responsive img-rounded wow fadeInDown"></center></td>
                        <td style="border: 1px dashed #8c8b8b;">
                        <dl class="dl-horizontal wow fadeInDown" style="text-align:left">

                        <dt>Name:</dt> <dd><?php echo $row['name'];?></dd>
						            <dt>Description:</dt> <dd><?php echo $row['description'];?></dd>
                        <dt>Prize:</dt> <dd><?php echo $l['prize'];?></dd>
                        <dt>MRP:</dt> <dd><?php echo $l['mrp'];?></dd>
                        </dl></td>
                       <td style="border: 1px dashed #8c8b8b;"><form action="" method="post"><button name="cancel" type="submit" style="margin-top:25px;" value="<?php echo $id ?>">Cancel</button></form></td>
                    </tr>


 <?php }}


}}
}

 if(isset($_POST["cancel"])){


    $pid=$_POST["cancel"];
    $uid = $_SESSION['login_customer'];
    $sql = "DELETE FROM cart_tbl WHERE pro_id = $pid AND customer_username = '$uname'";
    mysqli_query($con, $sql);
    header("refresh:0");
    }


    ?>

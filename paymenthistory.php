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
  <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head><!--/head-->

<body><?php session_start() ?>
  <nav class="navbar navbar-inverse" role="banner">
    <div class="container">
      <?php include('header.php');?>
  </div>
</nav>
        <br><br><br><br>
        <div class="container">

        </div>

  <br>
        <div class="col-md-12" >

                <table class="table table-hover table-condensed wow fadeInDown">
                            <thead style="background-color:#282828; color:#fff;">
                                <tr>
                                    <th width="30%" class="hidden-print" style="text-align:center;">Bill Amount</th>
                                    <th  width="35%" style="text-align:center;">Bill No</th>
                                    <th  width="35%"style="text-align:center;"> Time</th>


                                </tr>
                            </thead>
                            <tbody id="tablebody">
                               <?php include('includes/dbconn.php');
                                 $id=($_SESSION['login_customer']);

                                 $sql = ("SELECT * FROM `payment_history_tbl` where customer_username='$id'") ;
                                 $result = mysqli_query($con, $sql);      if(mysqli_num_rows($result)>0){
                					                     while($row = mysqli_fetch_assoc($result)){



                                        ?>
                               <tr class="success" style="cursor:pointer;">
                                 <td  style="text-align:center;"><?php  echo $row['bill_no'];?></td>
                               
                                <td  style="text-align:center;"><?php  echo $row['amount'];?></td>
                                <td style="text-align:center;"><?php   echo $row['time']; ?></td>

                                <td style="text-align:center;">
                                </td>
                                <?php
                                }?>

                               </tr>



                               <?php }?>
                            </tbody>
                        </table>
                </div>

        </div>

</div>

<br><br><br><br><br><br>
<!--*************************************************** FOOTERS **********************************************-->

<footer id="footer" class="midnight-blue wow fadeInDown">
        <?php include('footer.php');?>
    </footer><!--/#footer-->
</script>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

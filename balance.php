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

<div class="container wow fadeInDown">
    <div class="row">
        </div>
        <div class="col-md-6" style="border: solid #CFCFCF 2px; border-radius: 10px;">





              <form class="form-horizontal"  method="POST" action="balance_process.php" style="margin-top: 20px;">
                 <table>

                 </table>

                 <div class="form-group">
                     <label for="username" class="col-sm-4 control-label wow fadeInDown">Add Balanace:</label>
                     <div class="col-sm-6">
                     <input type="text" class="form-control wow fadeInDown" id="username" name="balance" placeholder="Enter Balance to Add" required>
                     </div>
                 </div>
                 <hr>

                 <div class="form-group">
                     <center><input type="submit" class="btn btn-success wow fadeInDown" name="update" value="Save Changes">
                 </center></div>
                <?php
              		include('includes/dbconn.php');
                	$id = $_SESSION['login_customer'];
                 $sql = ("SELECT balanace FROM `payment_tbl` where customer_username='$id'") ;
                 $result = mysqli_query($con, $sql);

                     $row = mysqli_fetch_assoc($result);
                     if($row!=""){
                 ?>
                 <table class="table table-responsive table-hover" style="border: 1px dashed #8c8b8b;
                   border-top: 1px dashed #8c8b8b;">
                 <tr>
                           <td>
                             <dl class="dl-horizontal wow fadeInDown" style="text-align:center">

                            <dt>AVAILABLE BALANCE</dt></dl></td>
                            <td>
                              <dl class="dl-horizontal wow fadeInDown" style="text-align:center">

                             <dt><?php echo $row['balanace'];?></dt></dl></td></table>
               </form>
             <?php }?>
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

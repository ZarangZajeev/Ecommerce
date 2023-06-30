<?php
    session_start();
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

  <link rel="stylesheet" type="text/css" href="css/text12.css">
  <link rel="stylesheet" type="text/css" href="css/img3copy.css">
  <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>

    .button1{
      width:100%;
    }
    .bt1{
      background-color: #5cb85c;
    }
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

        <div class="container1">
          <div class="container1">
  <?php include('chardetail.php');?>

            </div></div>

        <CENTER>
		<?php include('search.php');?>
  </CENTER>

<br><br>
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

<?php
    session_start();
    if(isset($_SESSION['admin_name'])) {

        include('admin.php');

    }
    else if(isset($_SESSION['company_name'])) {

        include('company.php');

    }
    else{
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
              <?php if (isset($_SESSION['login_customer'])){?>
                <div class="container1">
                    <?php include('chardetail.php');?>
                </div><?php } ?>

<div class="jj">
  <div class="pro">
    <!--*********************************************START SLIDER************************************************-->
    <div class="slideshow-container">
      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <div class="show"></div>
        <img src="images/10000.jpg" style="width:100%">
      </div>
      <div class="mySlides fade">
        <div class="show"></div>
        <img src="images/10001.jpg" style="width:100%">
      </div>
      <div class="mySlides fade">
        <div class="show"></div>
        <img src="images/100002.jpg" style="width:100%">
      </div>
         </div>
    <br>
    <!-- The dots/circles -->
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
<!--*********************************************END OF SLIDER************************************************-->


<!--*********************************************PRODUCT DISPLAY************************************************-->
<center>
<?php include('includes/dbconn.php');
  $sql = "SELECT * FROM pro_dtl_tbl where stock > 0";                           //FETCH PRODYCT FROM DATABASE
  $result=mysqli_query($con, $sql) or die (mysqli_error($con));
  if(mysqli_num_rows($result)>0){
  while($l = mysqli_fetch_assoc($result)){
    $pro_id=$l['pro_id'];
    $sql = "SELECT * FROM product_tbl where pro_id='$pro_id'";
    $r=mysqli_query($con, $sql) or die (mysqli_error($con));
    if(mysqli_num_rows($r)>0){
    while($row = mysqli_fetch_assoc($r)){
?>
    <div class="cards2" style="left:10px" >
          <form action="infohead.php" method="get">
          <button name="info" type="submit" value="<?php echo $row['pro_id'];?>">
            <div class="image2">
              <img src="<?php echo $row['image']?>">
            </div>
            <div class="des">
              <p><font color="black" size="3px" ><?php echo $row['name'];?></font></p>
              <p><font color="red" size="5px">Rs.<?php echo $l['prize'];?></font></p>
              <p><font color="green" size="3px">MRP:&nbsp;&nbsp;&nbsp;Rs.<?php echo $l['mrp'];?></font></p>
            </div>
          </button></form>
    </div>
  <?php }}}}?>
</div></div>
<br><br>

</center>
<!--*************************************************** FOOTERS **********************************************-->
<footer id="footer" class="midnight-blue wow fadeInDown">
        <?php include('footer.php');?>
    </footer><!--/#footer-->

<!--*************************************************** SLIDER WORKING FUNCTION **********************************************-->

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
<?php
}
?>

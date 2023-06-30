                                                                <!--HEADER FOR ADMIN-->
<?php if(isset($_SESSION['admin_name'])){?>
  <DIV CLASS="container">
    <H2>EKART-ONLINE SHOPPING PORTAL</H2>
    <h3><?php echo $_SESSION['admin_name']; ?></h3>
    <div class="contain">
      <div class="dropdown">
        <button class="dropbtn">Approval</button>
        <div class="dropdown-content">
          <a href="allowreview.php">Review</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">Catagory</button>
        <div class="dropdown-content">
          <a href="addcatagory.php">Add Catagory</a>
          <a href="viewcatagory.php">Update/Delete Catagory</a>
        </div>
      </div>

      <div class="dropdown">
        <button class="dropbtn">Company</button>
        <div class="dropdown-content">
          <a href="cus_signup.php">Add Company</a>
          <a href="deletecompany.php">Delete Company</a>
        </div>
      </div>
      <a class="anchor" href="logout_process.php">Logout</a>
    </div>
  </div>
                                                                  <!--HEADER FOR COMPANY-->
<?php } elseif(isset($_SESSION['company_name'])) { ?>
  <DIV CLASS="container">
  <H2>EKART-ONLINE SHOPPING PORTAL</H2>
  <div class="contain">
  <a class="anchor"><?php echo $_SESSION['company_name']?></a>
  <div class="dropdown">
    <button class="dropbtn">Products</button>
    <div class="dropdown-content">
      <a href="addproducts.php">Add Products</a>
      <a href="viewproducts.php">Update/Delete Products</a>
      <a href="bulkupload.php">Bulk Add Products</a>
    </div>
  </div>
  <a class="anchor" href="logout_process.php">Logout</a>
  </div>
  </div>
                                                              <!--HEADER FOR USER-->
<?php } else { ?>
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
     <a href="index.php"><h2 class="wow fadeInDown" style="margin-top:20px;padding-left:0px; color:#FFF;">
  <center><i class="fa fa-shopping-cart"></i>&nbsp;E-KART</center></h2><h2 class="wow fadeInDown" style="margin-top:-10px;padding-left:0px; color:#FFF;">

</h2></a>
</div>

<div class="collapse navbar-collapse navbar-right wow fadeInDown">
    <ul class="nav navbar-nav">
         <li class="active"><a href="index.php"><i class="fa fa-home"></i>HOME</a></li>
         <?php if (isset($_SESSION['login_customer'])){?>

            <li class="dropdown"><a class="dropdown-toggle wow fadeInDown" data-toggle="dropdown" href="#"><i class="fa fa-lock"></i> <?php echo $_SESSION['login_customer']; ?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="showcarthead.php"></i>&nbsp;CART</a></li>
                    <li><a href="orderhead.php">ORDERS</a></li>
                    <li><a href="balance.php">ADD BALANCE</a></li>
                      <li><a href="paymenthistory.php">PAYMENT HISTORY</a></li>
                    <li><a href="custacc.php">ACCOUNT</a></li>
               </ul>
            </li>
            <li><a href="logout.php">lOGOUT</a></li>
          <?php }else{?>
            <li><a href="userlogin.php"><i class="fa fa-lock"></i>&nbsp;lOGIN</a></li><?php } ?>

    </ul>

</div>

<center><div class="topnav">
                <div class="search-container">
                  <form action="searchhead.php" method="get">
                    <input type="text" placeholder="Search for products, brands and more"  name="search" list="products">
                    <datalist id="products">
                      <?php include('includes/dbconn.php');
                      $count = 0;
                      $sql = "SELECT * FROM product_tbl";
                      $result=mysqli_query($con, $sql) or die (mysqli_error($con));
                      if(mysqli_num_rows($result)>=0){
                      while($row = mysqli_fetch_assoc($result)){
                      ?>
                      <option ><?php echo $row['name'];?></option>
                      <option ><?php echo $row['catagory'];?></option>
                      <option ><?php echo $row['subcatagory'];?></option>

                    <?php } } ?>
  </datalist>
                    <button Class ="bt11" type="submit"><i class="fa fa-search">SEARCH</i></button>
                  </form>
                </div>
              </div></center><?php } ?>

<html><? session_start();?>
<head><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="images/logo.jpg" rel="shortcut icon">
  <title> COMPANY | E-KART:ONLINE SHOPPING PORTAL</title>
<link href="css/style5.css" rel="stylesheet">
<link href="css/img1.css" rel="stylesheet"></head>
<body>
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
<br>

<!--*********************************************DASHBOARD************************************************-->

<div class="jj">
  <div class="pro">
<?php
include('includes/dbconn.php');
$user=$_SESSION['company_name'];
$pro=0;
$sql="SELECT * FROM product_tbl where company_username='$user'";
$result=mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($result)){
  $pro++;
}?>

<center><a href="prolist.php">
<div class="cards1">

  <div class="title1">
<BR><BR><font color="white" size="5px"><?php echo $pro ?></font>
<BR><BR>
             <b>TOTAL PRODUCTS</b>
           </div>
</div></a>
</center>
<br><br>
    <!--*********************************************VIEWING UNAVAILABLE PRODUCTS************************************************-->
  <div class="products">
    <BR><BR><b>UNAVAILABLE PRODUCTS</b>
    <BR><BR>
      <table style="width:100%;">
          <thead style="background-color:#282828; color:#fff;">
              <tr>
    <th  width="20%"style="text-align:center;">Name</th>
    <th width="40%"> Image</th>
    <th width="10%"> Catagory</th>
    <th width="20%">Prize</th>
    <th width="30%">MRP</th>

              </tr>
          </thead>
            <?php include('includes/dbconn.php');
            $user=$_SESSION['company_name'];
           $sql = ("SELECT * FROM pro_dtl_tbl where stock=0") ;
           $result1=mysqli_query($con, $sql);
           if(mysqli_num_rows($result1)>0){
           while($l = mysqli_fetch_assoc($result1)){
             $sql = ("SELECT * FROM product_tbl where pro_id='$l[pro_id]' and company_username='$user'") ;
             $result=mysqli_query($con, $sql);
             if(mysqli_num_rows($result)>0){
             while($row = mysqli_fetch_assoc($result)){
                     ?>
            <tr>
             <td style="text-align:center;"><?php echo $row['name']?></td>
             <td style="text-align:center;"><img width="10%" height="10%" src="<?php echo $row['image']?>"></td>
             <td style="text-align:center;"><?php echo $row['catagory']?></td>
             <td style="text-align:center;"><?php echo $l['prize']?></td>
             <td style="text-align:center;"><?php echo $l['mrp']?></td>
             </td>
           </tr>
             <?php
           }}}}?>
       </table>
               </div>
    </div>
  </div>
  </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<?php include('footer.php')?>
</body>
</html>

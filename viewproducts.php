
 <?php session_start() ?>
 <html>
<head>
<link href="css/style5.css" rel="stylesheet">
<style>
.navig{
  float:left;
  min-width:13%;
  min-height:100%;
  margin-top: 15px;
  margin-left: -5px;
  box-shadow: #282727 0px 2px 3px 1px;
}
.selec{
  padding:5%;
}
.filter{
  float:right;
  margin-top: 100px;
  border:0px;
}
</style>

</head>
<body>
  <DIV CLASS="container">
<H2>EKART-ONLINE SHOPPING PORTAL</H2>
<div class="contain">
  <a class="anchor" href="index.php"><?php echo $_SESSION['company_name']; ?></a>
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





<div class="navig">
<div class="selec"><p>SORT</p>
<form action="" method="get">

  <input type="radio"  name="filter" value="catagory ASC">Catagory ASC</input><br>
  <input type="radio"  name="filter" value="catagory DESC">Catagory DESC</input><br>
  <input type="radio"  name="filter" value="subcatagory ASC">Subcatagory ASC</input><br>
  <input type="radio"  name="filter" value="subcatagory DESC">Subcatagory DESC</input><br>
  <input type="radio"  name="filter" value="name ASC">Name ASC</input><br>
  <input type="radio"  name="filter" value="name DESC">Name DESC</input><br>

  <input  class="filter" type="submit"></button>
</form></div>
</div>


<div  style="background-color: white;border: solid #D9D9D9 1px;  padding: 10px; padding-top: 5px; box-shadow: #282727 0px 2px 3px 1px; margin-top:15px;width:85%;border-left:150px;float:right;">
  <p ><em>Product List</em></p>
      <table style="width:100%;">
          <thead style="background-color:#282828; color:#fff;">
              <tr>
                <th  width="10%"style="text-align:center;">Name</th>
  <th width="20%"> Image</th>
  <th width="10%"> Catagory</th>
  <th width="10%">SubCatagory</th>
  <th width="10%"> Prize</th>
  <th width="10%"> MRP</th>
  <th width="10%"> Stock</th>
<th width="10%"> Action</th>
              </tr>
          </thead>
            <?php include('includes/dbconn.php');
            $user=$_SESSION['company_name'];
            if(isset($_GET['filter'])){
              $meth=$_GET['filter'];
              echo"$meth";
              $sql = ("SELECT * FROM product_tbl where company_username='$user'order by $meth ") ;
              $result=mysqli_query($con, $sql);
            }else{
              $sql = ("SELECT * FROM product_tbl where company_username='$user'") ;
              $result=mysqli_query($con, $sql);
            }
           if(mysqli_num_rows($result)>0){
           while($row = mysqli_fetch_assoc($result)){
             $pro_id=$row['pro_id'];
             $sql = ("SELECT * FROM pro_dtl_tbl where pro_id=$pro_id") ;
            $jj=mysqli_query($con, $sql);
             if(mysqli_num_rows($jj)>0){
             while($l = mysqli_fetch_assoc($jj)){


                     ?>
            <tr>
             <td style="text-align:center;"><?php echo $row['name']?></td>
             <td style="text-align:center;"><img width="10%" height="10%" src="<?php echo $row['image']?>"></td>
             <td style="text-align:center;"><?php echo $row['catagory']?></td>
             <td style="text-align:center;"><?php echo $row['subcatagory']?></td>
             <td style="text-align:center;"><?php echo $l['prize']?></td>
             <td style="text-align:center;"><?php echo $l['mrp']?></td>

             <td style="text-align:center;"><?php echo $l['stock']?></td>


             <td style="text-align:center;"><form action="updateproduct.php" method="post">
               <button class="subm" type="submit" name="update" value="<?php echo $row['pro_id']?>">UPDATE</button></form>
               <form action="deleteproduct.php" method="post">
                 <button class="subm" type="submit" name="delete" value="<?php echo $row['pro_id']?>">DELETE</button></form>
             </td>

           </tr>
             <?php
           }}}}?>



       </table>

       </div>
       </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</body>
</html>

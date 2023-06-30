  <?php include('includes/dbconn.php');
  $user=0;
  $company=0;
  $pro=0;
  $order=0;
      $sql="SELECT * FROM user_tbl where role='user'";
      $result=mysqli_query($con,$sql);
      while($row = mysqli_fetch_assoc($result)){
        $user++;
      }

      $sql="SELECT distinct(order_id) FROM order_tbl" ;
      $result=mysqli_query($con,$sql);
      while($row = mysqli_fetch_assoc($result)){
        $order++;
      }
      $sql="SELECT * FROM user_tbl where role='company'";
      $result=mysqli_query($con,$sql);
      while($row = mysqli_fetch_assoc($result)){
        $company++;
      }
      $sql="SELECT * FROM product_tbl";
      $result=mysqli_query($con,$sql);
      while($row = mysqli_fetch_assoc($result)){
        $pro++;
      }
  ?>
  <center>
    <a href="userlist.php">
<div class="cards1">

  <div class="title1">
<BR><BR><font color="white" size="5px"><?php echo $user ?></font>
<BR><BR>
             <b>TOTAL NO OF CUSTOMERS</b>

           </div>
</div></a>
<a href="viewcompany.php">
<div class="cards1">

  <div class="title1">
<BR><BR><font color="white" size="5px"><?php echo $company ?></font>
<BR><BR>
             <b>TOTAL NO OF COMPANIES</b>

           </div>
</div></a>
<a href="adminorderhead.php">
<div class="cards1">

  <div class="title1">
<BR><BR><font color="white" size="5px"><?php echo $order ?></font>
<BR><BR>
             <b>TOTAL NO OF BILLS</b>
           </div>
</div></a>
<a href="prolist.php">
<div class="cards1">

  <div class="title1">
<BR><BR><font color="white" size="5px"><?php echo $pro ?></font>
<BR><BR>
             <b>TOTAL PRODUCTS</b>

           </div>
</div><br><br></center></a>

<div class="products">
  <BR><BR><b>UNAVAILABLE PRODUCTS</b>
  <BR><BR>
    <table style="width:100%;">
        <thead style="background-color:#282828; color:#fff;">
            <tr>
              <th  width="20%"style="text-align:center;">Name</th>
              <th width="20%"> Image</th>
              <th width="10%"> Catagory</th>
              <th width="30%">Company</th>
            </tr>
        </thead>
          <?php include('includes/dbconn.php');

         $sql = ("SELECT * FROM pro_dtl_tbl where stock=0") ;
         $result1=mysqli_query($con, $sql);
         if(mysqli_num_rows($result1)>0){
         while($l = mysqli_fetch_assoc($result1)){
           $sql = ("SELECT * FROM product_tbl where pro_id='$l[pro_id]' ") ;
           $result=mysqli_query($con, $sql);
           if(mysqli_num_rows($result)>0){
           while($row = mysqli_fetch_assoc($result)){
                   ?>
          <tr>
            <td style="text-align:center;color:black;"><?php echo $row['name']?></td>
            <td style="text-align:center;color:black;"><img width="10%" height="10%" src="<?php echo $row['image']?>"></td>
            <td style="text-align:center;color:black;"><?php echo $row['catagory']?></td>
            <td style="text-align:center;color:black;"><?php echo $row['company_username']?></td>

           </td>

         </tr>
           <?php
         }}}}?>



     </table>
             </div>

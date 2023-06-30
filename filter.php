
<?php
if(!isset($_GET['filter1'])){?>
  <div  style="background-color: white;border: solid #D9D9D9 1px;  padding: 10px; padding-top: 5px; box-shadow: #282727 0px 2px 3px 1px; margin-top:15px;width:85%;border-left:150px;float:right;">
    <p ><em>Product List</em></p>
      <table style="width:100%;">
          <thead style="background-color:#282828; color:#fff;">
              <tr>
                  <th width="20%">Name</th>
                  <th width="20%" style="text-align:center;">MRP</th>
                  <th width="20%"> prize</th>
                  <th width="20%"> Stock</th>
                  <th style="text-align:center; width:20%"> Catagory</th>
              </tr>
          </thead>
            <?php include('includes/dbconn.php');
            if(isset($_SESSION['company_name']))
              $user=$_SESSION['company_name'];
            if(isset($_GET['filter'])){
                $meth=$_GET['filter'];
                $sql = ("SELECT * FROM pro_dtl_tbl order by $meth") ;
                $result=mysqli_query($con, $sql);}
          else{
                $sql = ("SELECT * FROM pro_dtl_tbl order by stock") ;
                $result=mysqli_query($con, $sql);
          }
          if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result)){
             $pro_id=$row['pro_id'];
             if(isset($_SESSION['admin_name']))
             $sql = ("SELECT * FROM product_tbl where pro_id=$pro_id") ;
             else {
               $sql = ("SELECT * FROM product_tbl where pro_id=$pro_id and company_username='$user'") ;
             }
             $jj=mysqli_query($con, $sql);
             if(mysqli_num_rows($jj)>0){
             while($l = mysqli_fetch_assoc($jj)){
                     ?>
            <tr>
             <td style="text-align:center;"><?php echo $l['name']?></td>
             <td style="text-align:center;"><?php echo $row['mrp']?></td>
             <td style="text-align:center;"><?php echo $row['prize']?></td>
             <td style="text-align:center;"><?php echo $row['stock']?></td>
             <td style="text-align:center;"><?php echo $l['catagory']?></td>
           </tr>
             <?php
           }}}}?>
       </table>
       </div>
       <?php
     } else{?>

       <div  style="background-color: white;border: solid #D9D9D9 1px;  padding: 10px; padding-top: 5px; box-shadow: #282727 0px 2px 3px 1px; margin-top:15px;width:85%;border-left:150px;float:right;">
         <p ><em>Product List</em></p>
           <table style="width:100%;">
               <thead style="background-color:#282828; color:#fff;">
                   <tr>
                       <th width="20%">Name</th>
                       <th width="20%" style="text-align:center;">MRP</th>
                       <th width="20%"> prize</th>
     <th width="20%"> Stock</th>
     <th style="text-align:center; width:20%"> Catagory</th>

                   </tr>
               </thead>
                 <?php include('includes/dbconn.php');
               if(isset($_GET['filter1'])){
                 $meth=$_GET['filter1'];
                 if(isset($_SESSION['company_name'])){
                   $user=$_SESSION['company_name'];
                   $sql = ("SELECT * FROM product_tbl where catagory='$meth' and company_username='$user'") ;
                 }else{
                    $sql = ("SELECT * FROM product_tbl where catagory='$meth' ") ;
                 }
                   $result=mysqli_query($con, $sql);
                   if(mysqli_num_rows($result)>0){
                   while($row = mysqli_fetch_assoc($result)){
                     $pid=$row['pro_id'];
                     $sql = ("SELECT * FROM pro_dtl_tbl where pro_id='$pid'");
                     $jj=mysqli_query($con, $sql);
                     if(mysqli_num_rows($jj)>0){
                     while($l = mysqli_fetch_assoc($jj)){

                          ?>
                 <tr>
                  <td style="text-align:center;"><?php echo $row['name']?></td>
                  <td style="text-align:center;"><?php echo $l['mrp']?></td>
                  <td style="text-align:center;"><?php echo $l['prize']?></td>
                  <td style="text-align:center;"><?php echo $l['stock']?></td>
                  <td style="text-align:center;"><?php echo $row['catagory']?></td>
                </tr>
                  <?php
                }}}}}?>
            </table>
            </div>

            <?php
            }?>

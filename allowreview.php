
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

  <nav class="navbar navbar-inverse" role="banner">
    <div class="container">
      <?php include('header.php');?>
  </div>
</nav>


<div  style="background-color: white;border: solid #D9D9D9 1px;  padding: 10px; padding-top: 5px; box-shadow: #282727 0px 2px 3px 1px; margin-top:15px;width:98%;border-left:150px;float:right;">
  <p ><em>Product List</em></p>
      <table style="width:100%;">
          <thead style="background-color:#282828; color:#fff;">
              <tr>
                <th width="10%"> Product</th>
                <th width="10%">Customer Name</th>
                <th width="30%">Review</th>
                <th width="30%"> Rating</th>
                <th width="10%"> Action</th>
              </tr>
          </thead>
            <?php include('includes/dbconn.php');
            $sql = ("SELECT * FROM review where aprove=0") ;
            $result=mysqli_query($con, $sql);
           while($row = mysqli_fetch_assoc($result)){
             $pro_id=$row['proid'];
             $sql = ("SELECT * FROM product_tbl where pro_id=$pro_id") ;
            $jj=mysqli_query($con, $sql);
             while($l = mysqli_fetch_assoc($jj)){


                     ?>
            <tr>
             <td style="text-align:center;"><?php echo $l['name']?></td>
             <td style="text-align:center;"><?php echo $row['username']?></td>
             <td style="text-align:center;"><?php echo $row['review']?></td>
             <td style="text-align:center;"><?php echo $row['rating']?></td>

             <td style="text-align:center;"><form action="" method="post">
               <button class="subm" type="submit" name="update" value="<?php echo $row['rev_id']?>">APPROVE</button></form>
               <form action="" method="post">
                 <button class="subm" type="submit" name="delete" value="<?php echo $row['rev_id']?>">DELETE</button></form>
             </td>

           </tr>
             <?php
           } } ?>
       </table>
       </div>
       </div>
</div>
<?php
   if(isset($_POST["update"])){
          $data=$_POST['update'];
           $sql=("UPDATE review SET aprove=1 where rev_id='$data'");
              mysqli_query($con, $sql);
         echo '<script>window.location.href="allowreview.php"
                                            </script>';
    }
?>
<?php
   if(isset($_POST["delete"])){
          $data=$_POST['delete'];
           $sql=("DELETE FROM review where rev_id='$data'");
              mysqli_query($con, $sql);
         echo '<script>window.location.href="allowreview.php"
                                            </script>';
    }
?>

</body>
</html>




<?php include('includes/dbconn.php');
$sql = "SELECT * FROM product_tbl ORDER BY NAME";
$result=mysqli_query($con, $sql) or die (mysqli_error($con));
if(mysqli_num_rows($result)>=0){
while($row = mysqli_fetch_assoc($result)){
  $pro_id=$row['pro_id'];
  $sql = "SELECT * FROM pro_dtl_tbl where pro_id='$pro_id'";
  $r=mysqli_query($con, $sql) or die (mysqli_error($con));
  if(mysqli_num_rows($r)>=0){
  while($l = mysqli_fetch_assoc($r)){
?>

   <div class="cards2" style="left:10px" >
<div class="image2">


  <form action="infohead.php" method="get">
      <button name="infos" type="submit" value="<?php echo $row['pro_id'];?>">
<img src="<?php echo $row['image']?>">
</div>
<div class="title2">

</div>
<div class="des"><center>
<p><font color="white" size="3px"><?php echo $row['name'];?></font></p>
<p><font color="white" size="7px">RS:<?php echo $l['prize'];?></font></p>
<p><font color="white" size="3px">MRP:<?php echo $l['mrp'];?></font></p>

</center>
</div></div></button></form>

<?php }}}



}
?></div></div>
</div></div>

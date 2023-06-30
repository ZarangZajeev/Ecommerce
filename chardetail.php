<div class="cards1">
  <div class="image1"><form action="charhead.php" method="get"><button class="btn btn-success  wow fadeInDown" name="char" type="submit"  style="margin-top:25px;" value="all">
    <img src="images/1.jpg">
  </div>
  <div class="title1">
    <ul class="nav ">
             <li ><a class="dropdown-toggle wow fadeInDown" data-toggle="dropdown" href="#">ALL PRODUCTS </a>

         </li>
    </ul></button></form>
  </div>
</div>
<table class="table table-responsive table-hover" style="border: 1px dashed #8c8b8b;
border-top: 1px dashed #8c8b8b;">


<?php include('includes/dbconn.php');


$sql = "SELECT * FROM catagory_tbl";

$result=mysqli_query($con, $sql) or die (mysqli_error($con));

if(mysqli_num_rows($result)>=0){
while($row = mysqli_fetch_assoc($result)){
$id = $row['name'];
?>
  <div class="cards1">
<div class="image1">

<form action="charhead.php" method="get">
  <button class="btn btn-success  wow fadeInDown chatagory" name="char"  type="submit" type="button"  value="<?php echo $row['name'];?>">
    <img src="<?php echo $row['image']?>">
</div>



<div class="title1">
<ul class="nav ">

         <li><a class="dropdown-toggle wow fadeInDown" data-toggle="dropdown" href="#"><?php echo $id;?><br> <span class="caret"></span></a>
         <ul class="dropdown-menu bt1">
           <?php include('includes/dbconn.php');


           $sql = "SELECT distinct subcatagory FROM product_tbl where catagory='$id' ";

           $re=mysqli_query($con, $sql) or die (mysqli_error($con));

           if(mysqli_num_rows($re)>0){
           while($r = mysqli_fetch_assoc($re)){
           $sub = $r['subcatagory'];

           ?>
           <li class="bt1"><button  class="btn btn-success  wow fadeInDown button1" name="subchar"  type="submit" type="button"  value="<?php echo $sub;?>"><?php echo $sub;?></button></li>
<?php }}?>
           </ul>
     </li>
</ul>
</div></button></form>
</div>

<?php }}


?>
</table>

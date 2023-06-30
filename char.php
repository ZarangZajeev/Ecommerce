<br><br>
         <?php include('includes/dbconn.php');
         if (isset($_SESSION['login_customer'])){
            $uname = $_SESSION['login_customer'];
      }

      if (isset($_GET['char'])) {
          $name = $_GET['char'];
          if($name=="all"){
            $sql = "SELECT * FROM product_tbl " or die (mysqli_error($con));
            $result=mysqli_query($con, $sql) or die (mysqli_error($con));
          }
          else{
            $sql = "SELECT * FROM product_tbl where catagory='$name'";
            $result=mysqli_query($con, $sql) or die (mysqli_error($con));}
        }
        else if (isset($_GET['subchar'])) {
            $name = $_GET['subchar'];
            $sql = "SELECT * FROM product_tbl where subcatagory='$name'";
            $result=mysqli_query($con, $sql) or die (mysqli_error($con));
        }

          if(mysqli_num_rows($result)>0){
          while($row = mysqli_fetch_assoc($result)){
            $pro_id=$row['pro_id'];
            $sql = "SELECT * FROM pro_dtl_tbl where pro_id='$pro_id'";
            $r=mysqli_query($con, $sql) or die (mysqli_error($con));
            if(mysqli_num_rows($r)>=0){
            while($l = mysqli_fetch_assoc($r)){
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
           

        <?php }
      }

}
        }
        ?>

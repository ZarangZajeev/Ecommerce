
<?php
include('includes/dbconn.php');
			$pro_id = $_POST['delete'];


					$sql = ("DELETE FROM product_tbl WHERE pro_id='$pro_id' ");
                    $result=mysqli_query($con, $sql) or die();
					$sql = ("DELETE FROM pro_dtl_tbl WHERE pro_id='$pro_id' ");
					           $result=mysqli_query($con, $sql) or die();

                    if($result==true){
                        echo "<script>alert('Product Removed successfully');
        window.location.href='index.php';</script>";
                    }
                    else{
                      echo "<script>alert('Product Not Removed ');
      window.location.href='deleteproduct.php';</script>";
                    }


?>

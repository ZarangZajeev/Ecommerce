
<?php
include('includes/dbconn.php');
			$name = $_POST['delete'];


					$sql = ("DELETE FROM catagory_tbl WHERE name='$name' ");
                    $result=mysqli_query($con, $sql) or die();
                    if($result==true){
                        echo "<script>alert('Catagory Removed successfully');
        window.location.href='index.php';</script>";
                    }
                    else{
                      echo "<script>alert('Catagory Not Removed ');
      window.location.href='deletecompany.php';</script>";
                    }


?>

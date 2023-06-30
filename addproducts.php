<html>
<head><link href="css/style2.css" rel="stylesheet">
</head>
<body>
<div class="contain">
  <div class="container"><h3>ADD PRODUCTS</h3></div>
            	<form action="" method="post" enctype="multipart/form-data">
                <div class="formaction">
                        	<b>Name* :</b>
                             <input type="text" name="name" required><br>
<br><br>
                            <b>Description*:</b>
                             <input type="text" name="des" required><br>
                            <br><br>
                            <b>Catagory :</b>
                            <select name="cata" >
                              <?php include('includes/dbconn.php');


                              $sql = "SELECT name FROM catagory_tbl";

                              $result=mysqli_query($con, $sql) or die (mysqli_error($con));

                              if(mysqli_num_rows($result)>=0){
                               while($row = mysqli_fetch_assoc($result)){
                              echo '  <option value="'.$row['name'].'">'.$row['name'].'</option>';
                            }}

                              ?>
                            </select><br>
                            <br><br>
                            <b>Subcatagory*:</b>
                             <input type="text" name="sub" required><br><br><br>

                             <b>Stock*:</b>
                              <input type="text" name="stock" required><br><br><br>

                              <b>Prize*:</b>
                               <input type="text" name="prize" required><br><br><br>

                               <b>Mrp*:</b>
                                <input type="text" name="mrp" required><br><br><br>

                        	<td ><b>Image* :</b> </td>
                            <td > <input type="file" name="image" required /></td>
                        </tr></div>
</table><br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="save">
                </form>
</div>
<?php
session_start();
include('includes/dbconn.php');
if(isset($_POST['save'])){
			$name = $_POST['name'];
      	$des = $_POST['des'];
        $cata=$_POST['cata'];
        $cata=$_POST['cata'];
        $sub=$_POST['sub'];
        $stock=$_POST['stock'];
        $prize=$_POST['prize'];
        $mrp=$_POST['mrp'];
        $comp=$_SESSION['company_name'];
			 //image
                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $_FILES["image"]["name"]);
                                $location = "../upload/" . $_FILES["image"]["name"];


                                $sql = "SELECT name FROM product_tbl WHERE name='$name'";
                                $result=mysqli_query($con, $sql);
                                if(mysqli_num_rows($result)>0){

                                echo '<script>alert("Name alredy exist!!");
                      								 window.location.href="addproducts.php";
                      					</script>';
                              }

			else if($mrp<$prize){
					echo '<script>alert("MRP Is Lesser.");
								 window.location.href="addproducts.php";
					</script>';

				}else {
					$sql = ("INSERT INTO product_tbl   VALUES(null,'$name','$des','$location','$cata','$sub','$comp')");
                    $result=mysqli_query($con, $sql);
           $sql = ("SELECT pro_id FROM product_tbl WHERE name='$name'");
                    $result=mysqli_query($con, $sql);
                     while($row = mysqli_fetch_assoc($result)){
                             $pro_id=$row['pro_id'];
                     }
          $sql = ("INSERT INTO pro_dtl_tbl   VALUES($pro_id,$stock,$prize,$mrp)");
                    $result=mysqli_query($con, $sql);

					if($result==true){
						echo '<script>alert("Saved Successfully!");
									window.location.href="index.php";</script>';}else {
										echo '<script>alert("Sorry unable to process your request!");
									window.location.href="addcatagory.php";</script>';
										}

					}
		}
?>

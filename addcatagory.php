<html>
<head><link href="css/style2.css" rel="stylesheet">
</head>
<body>
<div class="contain">
<div class="container"><h3>ADD CATAGORY</h3></div>
            	<form action="" method="post" enctype="multipart/form-data">
                	<table>
                    	<tr>
                        	<td ><b>Catagory Name* :</b> &emsp;</td>
                            <td >&emsp; <textarea name="name" required></textarea></td>
                        </tr>

                        	<td ><b>Image* :</b> &emsp;</td>
                            <td >&emsp; <input type="file" name="image" required /></td>
                        </tr>
</table><br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="save">
                </form>
</div>
<?php
include('includes/dbconn.php');
if(isset($_POST['save'])){
			$name = $_POST['name'];
      $sql="SELECT * from catagory_tbl where name='$name'";
      $result=mysqli_query($con,$sql);
      if(mysqli_num_rows($result)>0){
        echo '<script>alert("catagory alredy exist");
               window.location.href="addcatagory.php";
        </script>';
      }else{
			 //image
                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                              
                                $location = "../upload/" . $_FILES["image"]["name"];
			if(empty($name)){
					echo '<script>alert("Fields must be empty.");
								 window.location.href="addcatagory.php";
					</script>';

				}else {
					$sql = ("INSERT INTO catagory_tbl   VALUES('$name','$location')");
                    $result=mysqli_query($con, $sql);
					if($result==true){
						echo '<script>alert("Save Successfully!");
									window.location.href="index.php";</script>';}else {
										echo '<script>alert("Sory unable to process your request!");
									window.location.href="addcatagory.php";</script>';
										}

					}
		}}
?>

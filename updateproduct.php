<html>
<head>
<link href="css/style2.css" rel="stylesheet">
</head>
<body>
  <?php
  include('includes/dbconn.php');
  if(isset($_POST['update'])){
  $id=$_POST['update'];
  $sql="select * from product_tbl where pro_id=$id";
  $result=mysqli_query($con, $sql) or die (mysqli_error($con));
  $row = mysqli_fetch_assoc($result);
  $sql="select * from pro_dtl_tbl where pro_id=$id";
  $re=mysqli_query($con, $sql) or die (mysqli_error($con));
  $ro = mysqli_fetch_assoc($re);}
  ?>
<div class="contain">
<div class="container"><h3>Update Product</h3></div>
<form action="" method="post" enctype="multipart/form-data">
  <div class="formaction">

    <b>Name*:</b>

     <input type="text"  name="name" placeholder="<?php echo $row['name']?>" ><br><br>
       <input type="hidden" class="form-control" id="fdid" name="fdid"  value="<?php echo $_POST['update']?>" >
       <b>Description*:</b>

        <input type="text"  name="des" placeholder="<?php echo $row['description']?>" ><br><br>
        <b>Catagory :</b>
        <select name="cata" >
          <option value="none">Select</option>'
          <?php include('includes/dbconn.php');


          $sql = "SELECT name FROM catagory_tbl";

          $result=mysqli_query($con, $sql) or die (mysqli_error($con));

          if(mysqli_num_rows($result)>=0){
           while($rows = mysqli_fetch_assoc($result)){
          echo '  <option value=" '.$rows['name'].' ">'.$rows['name'].'</option>';
        }}

          ?>
        </select><br>
        <br>
        <b>Subcatagory*:</b>

         <input type="text"  name="sub" placeholder="<?php echo $row['subcatagory']?>" ><br><br>
         <b>Stock*:</b>

          <input type="number"  name="stock" placeholder="<?php echo $ro['stock']?>" ><br><br>
          <b>Prize*:</b>

           <input type="number"  name="prize" placeholder="<?php echo $ro['prize']?>" ><br><br>
           <b>Mrp*:</b>

            <input type="number"  name="mrp" placeholder="<?php echo $ro['mrp']?>" ><br><br>


  <b>Image</b>

      <input type="file" class="form-control" id="image" name="image" value=""><br><br>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info" name="savechanges">Save changes</button>
      </form>
    </div>
  </div>


<?php include('includes/dbconn.php');
if(isset($_POST['savechanges'])){
  $name = $_POST['name'];
    $des = $_POST['des'];
    $cata=$_POST['cata'];
    $sub=$_POST['sub'];
    $stock=$_POST['stock'];
    $prize=$_POST['prize'];
    $mrp=$_POST['mrp'];
    $fdid=$_POST['fdid'];
  $image=$_POST['image'];






                                if($name!=""){
				                            $sql = ("UPDATE product_tbl set name='$name' WHERE pro_id = '$fdid'") ;
                                    $result=mysqli_query($con, $sql);
                                  }
                                if($des!=""){
                                  $sql = ("UPDATE product_tbl set description='$des' WHERE pro_id = '$fdid'") ;
                                  $result=mysqli_query($con, $sql);
                                }
                                if($image!=""){
                                    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                  $image_name = addslashes($_FILES['image']['name']);
                                  $image_size = getimagesize($_FILES['image']['tmp_name']);
  //
                                  move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
                                  $location = "upload/" . $_FILES["image"]["name"];
                                  $sql = ("UPDATE product_tbl set image = '$location' WHERE pro_id = '$fdid'") ;
                                  $result=mysqli_query($con, $sql);

                                }
                                if($cata!="none"){
                                  $sql = ("UPDATE product_tbl set catagory='$cata' WHERE pro_id = '$fdid'") ;
                                  $result=mysqli_query($con, $sql);
                                }
                                if($sub!=""){
                                  $sql = ("UPDATE product_tbl set subcatagory='$sub' WHERE pro_id = '$fdid'") ;
                                  $result=mysqli_query($con, $sql);
                                }
                                if($stock!=""){
                                  $sql=("SELECT stock FROM pro_dtl_tbl where pro_id='$fdid'");
                                  $result=mysqli_query($con, $sql);
                                  while($l = mysqli_fetch_assoc($result)){
                                    $stk=(int)($l['stock']);
                                  }
                                  $stock=$stk+(int)$stock;
                                  $sql=("UPDATE pro_dtl_tbl set stock='$stock' WHERE pro_id = '$fdid'");
                                  $result=mysqli_query($con, $sql);
                                }
                                if($mrp!=""){
                                  $sql=("UPDATE pro_dtl_tbl set mrp='$mrp' WHERE pro_id = '$fdid'");
                                  $result=mysqli_query($con, $sql);
                                }
                                if($prize!=""){
                                  $sql=("UPDATE pro_dtl_tbl set prize='$prize' WHERE pro_id = '$fdid'");
                                  $result=mysqli_query($con, $sql);

                                }
				if($result==true){
					echo '<script>alert("Updated successfully!");
								  window.location.href="index.php"</script>';
					}
					else{
						echo '<script>alert("Sorry unable to process your request!");
								  window.location.href="index.php"</script>';
						}


	}

	?>

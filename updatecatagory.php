<html>
<head>
<link href="css/style2.css" rel="stylesheet">
</head>
<body>
<div class="contain">
<div class="container"><h3>Update Catagory</h3></div>

<form action="" method="post" enctype="multipart/form-data">
  <div class="formaction">

    <b>Name*:</b>

     <input type="text"  name="name1" value="<?php echo $_GET['update']?>" ><br><br>
       <input type="hidden" class="form-control" id="fdid" name="fdid"  value="<?php echo $_GET['update']?>" >

  <b>Image</b>

      <input type="file" class="form-control" id="image" name="image" value=""><br><br>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info" name="savechanges">Save changes</button>
      </form>
    </div>
  </div>

<?php include('includes/dbconn.php');
if(isset($_POST['savechanges'])){

		$name= $_POST['fdid'];
$image= $_FILES['image'];
$nam=$_POST['name1'];

        if($image!=""){
          $sql = ("UPDATE catagory_tbl set name='$nam'
  													    WHERE name = '$name'") ;
        }
        else{
              $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
              $image_name = addslashes($_FILES['image']['name']);
              $image_size = getimagesize($_FILES['image']['tmp_name']);
              move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
              $location = "upload/" . $_FILES["image"]["name"];
				        $sql = ("UPDATE catagory_tbl set name='$name',
													   image = '$location' WHERE name = '$name'") ;
           }
        $result=mysqli_query($con, $sql);

				if($result==true){
					echo '<script>alert("Update successfully!");
								  window.location.href="index.php"</script>';
					}
					else{
						echo '<script>alert("Sorry unable to process your request!");
								  window.location.href="index.php"</script>';
						}


	}

	?>

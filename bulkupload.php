<html>
<head><link href="css/style2.css" rel="stylesheet">
</head>
<body>
<?php
include "includes/dbconn.php";
session_start();
if(isset($_POST['but_import'])){
   $target_dir = "uploads/";
   $target_file = $target_dir . basename($_FILES["importfile"]["name"]);

   $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

   $uploadOk = 1;
   if($imageFileType != "csv" ) {
     $uploadOk = 0;
   }

   if ($uploadOk != 0) {
      if (move_uploaded_file($_FILES["importfile"]["tmp_name"], $target_dir.'importfile.csv')) {

        // Checking file exists or not
        $target_file = $target_dir . 'importfile.csv';
        $fileexists = 0;
        if (file_exists($target_file)) {
           $fileexists = 1;
        }
        if ($fileexists == 1 ) {

           // Reading file
           $file = fopen($target_file,"r");
           $i = 0;

           $importData_arr = array();

           while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {              //count number of data items
             $num = count($data);

             for ($c=0; $c < $num; $c++) {
                $importData_arr[$i][] = mysqli_real_escape_string($con, $data[$c]);
             }
             $i++;
           }
           fclose($file);

           $skip = 0;
           // insert import data
           foreach($importData_arr as $data){
              if($skip != 0){
                $ID = null;
                $Name = $data[1];
                $des = $data[2];
                $image = $data[3];
                $cata = $data[4];
                $sub = $data[5];
                $prize =$data[6];
                $mrp =$data[7];
                $stock =$data[8];
                $user=$_SESSION['company_name'];
                $sql="SELECT name from catagory_tbl where name='$cata'";
                $rr=mysqli_query($con,$sql);
                if(mysqli_num_rows($rr)>0){
                if($Name!=null){
                 // Checking duplicate entry
                 $sql = "select count(name) as allcount from product_tbl where name='" . $Name . "' ";


                 $retrieve_data = mysqli_query($con,$sql);
                 $row = mysqli_fetch_array($retrieve_data);
                 $count = $row['allcount'];

                 if($count == 0){
                    // Insert record
                    $insert_query = "INSERT into product_tbl values('".$ID."','".$Name."','".$des."','".$image."','".$cata."','".$sub."','".$user."')";
                    mysqli_query($con,$insert_query);
                    $sql = ("SELECT pro_id FROM product_tbl WHERE name='".$Name."'");
                             $result=mysqli_query($con, $sql);
                              while($row = mysqli_fetch_assoc($result)){
                                      $pro_id=$row['pro_id'];
                                      $sql = ("INSERT INTO pro_dtl_tbl  VALUES($pro_id,$stock,$prize,$mrp)");
                                                $kk=mysqli_query($con, $sql);

                              }}


                 }
              }
            }
              $skip ++;
           }
           $newtargetfile = $target_file;
           if (file_exists($newtargetfile)) {
              unlink($newtargetfile);                           //unlink existing file
           }
         }

      }
   }
}
?>

<!-- Import form (start) -->
<div class="contain">
  <div class="container"><h3>Bulk Upload</h3></div><br><br>
  <div class="formaction">
 <form method="post" action="" enctype="multipart/form-data" id="import_form">
  <table width="100%">

   <tr>
    <td colspan="2">
     <input type='file' name="importfile" id="importfile">
   </td>
   </tr>
   <tr>
    <td colspan="2" ><br><br><input type="submit" id="but_import" name="but_import" value="Import"></td>
   </tr>
</div>
</div>

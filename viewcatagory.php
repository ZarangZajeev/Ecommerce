
 <?php session_start() ?>
 <html>
<head>
<link href="css/style5.css" rel="stylesheet"></head>
<body>
  <DIV CLASS="container">
<H2>EKART-ONLINE SHOPPING PORTAL</H2>
<div class="contain">
  <a class="anchor" href="index.php"><?php echo $_SESSION['admin_name']; ?></a>
  <div class="dropdown">
    <button class="dropbtn">User</button>
    <div class="dropdown-content">
      <a href="userlist.php">User List</a>

    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Catagory</button>
    <div class="dropdown-content">
      <a href="addcatagory.php">Add Catagory</a>
      <a href="viewcatagory.php">Update/Delete Catagory</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Company</button>
    <div class="dropdown-content">
      <a href="cus_signup.php">Add Company</a>
      <a href="viewcompany.php">View Company</a>
      <a href="deletecompany.php">Delete Company</a>
    </div>
  </div>
<a class="anchor" href="logout_process.php">Logout</a>
</div>
</div>
<br><br><br>
  <div  style="border: solid #D9D9D9 1px; padding: 10px; padding-top: 5px; box-shadow: #9F9F9F 2px 3px 5px; margin-top: 10px;">
    <p ><em>Catagory List</em></p>
      <table style="width:100%;">
          <thead style="background-color:#282828; color:#fff;">
              <tr>

                  <th  width="30%"style="text-align:center;">Name</th>

<th width="30%"> Image</th>

<th width="30%"> Action</th>

              </tr>
          </thead>
            <?php include('includes/dbconn.php');
           $sql = ("SELECT * FROM catagory_tbl ") ;
           $result=mysqli_query($con, $sql);
           if(mysqli_num_rows($result)>0){
           while($row = mysqli_fetch_assoc($result)){

                     ?>
            <tr>
             <td style="text-align:center;"><?php echo $row['name']?></td>
             <td style="text-align:center;"><img width="10%" height="10%" src="<?php echo $row['image']?>"></td>
             <td style="text-align:center;"><form action="updatecatagory.php" method="get">
               <button type="submit" name="update" value="<?php echo $row['name']?>">UPDATE</button></form>
               <form action="deletecatagory.php" method="post">
                 <button type="submit" name="delete" value="<?php echo $row['name']?>">DELETE</button></form>
             </td>

           </tr>
             <?php
           }}?>



       </table>

       </div>
       </div>












<br><br><br><br><br><br><br><br><br><br><br><br><br>


<br><br><br><br><br><br><br><br><br><br><br><br><br>




</div>
<?php include('footer.php')?>
</body>
</html>

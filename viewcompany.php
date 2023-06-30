 <?php session_start() ?>
 <html>
<head>
<link href="css/style5.css" rel="stylesheet"></head>
<body>

  <nav class="navbar navbar-inverse" role="banner">
    <div class="container">
      <?php include('header.php');?>
  </div>
</nav>

<br><br><br>
  <div  style="border: solid #D9D9D9 1px; padding: 10px; padding-top: 5px; box-shadow: #9F9F9F 2px 3px 5px; margin-top: 10px;">
    <p ><em>Company List</em></p>
      <table style="width:100%;">
          <thead style="background-color:#282828; color:#fff;">
              <tr>
                  <th width="20%">Username</th>
                  <th width="20%" style="text-align:center;">Name</th>
                  <th width="20%"> Phone</th>
                  <th width="20%"> Email</th>
                  <th style="text-align:center; width:20%"> Address</th>
              </tr>
          </thead>
            <?php include('includes/dbconn.php');
           $sql = ("SELECT * FROM user_tbl where role='company'") ;
           $result=mysqli_query($con, $sql);
           if(mysqli_num_rows($result)>0){
           while($row = mysqli_fetch_assoc($result)){
                     ?>
            <tr>
             <td style="text-align:center;"><?php echo $row['username']?></td>
             <td style="text-align:center;"><?php echo $row['name']?></td>
             <td style="text-align:center;"><?php echo $row['phone']?></td>
             <td style="text-align:center;"><?php echo $row['email']?></td>
             <td style="text-align:center;"><?php echo $row['address']?></td>
           </tr>
             <?php
           }}?>
       </table>
  </div>
 </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include('footer.php')?>
</body>
</html>

                          <!--PRODUCT DISPLAY FOR BOTH COMPANY AND ADMIN DONE IN SAME PHP SHEET-->
 <?php session_start() ?>
 <html>
<head>
<link href="css/style5.css" rel="stylesheet">
<style>
.navig{
  float:left;
  min-width:13%;
  min-height:100%;
  margin-top: 15px;
  margin-left: -5px;
  box-shadow: #282727 0px 2px 3px 1px;
}
.selec{
  padding:5%;
}
.filter{
  float:right;
  margin-top: 100px;
  border:0px;
}
</style>
</head>
<body>

    <nav class="navbar navbar-inverse" role="banner">
      <div class="container">
        <?php include('header.php');?>
    </div>
  </nav>

<div class="navig">
<div class="selec"><p>SORT</p>
<form action="" method="get">
  <input type="radio"  name="filter" value="stock ASC">Stock ASC</input><br>
  <input type="radio"  name="filter" value="stock DESC">Stock DESC</input><br>
  <input type="radio"  name="filter" value="mrp ASC">MRP ASC</input><br>
  <input type="radio"  name="filter" value="mrp DESC">MRP DESC</input><br>
  <input type="radio"  name="filter" value="prize ASC">Prize ASC</input><br>
  <input type="radio"  name="filter" value="prize DESC">Prize DESC</input><br>
<p>CATAGORY WISE VIEW</p>
  <?php //OBTAINING CATAGORY NAME
    include('includes/dbconn.php');
    $sql = "SELECT * FROM catagory_tbl";
    $result=mysqli_query($con, $sql) or die (mysqli_error($con));
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['name'];
  ?>
<input type="radio"  name="filter1" value="<?php echo $id?>"><?php echo $id?></input><br>
  <?php } ?>
  <input  class="filter" type="submit"></button>
</form></div>
</div>
  <div class="container">
    <?php include('filter.php');?>
</div>

</body>
</html>

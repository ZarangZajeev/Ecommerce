<?php
 function fetch_data()
 {

      $output = '';
      include('includes/dbconn.php');
      $id =$_POST['create_pdf'];

      $sql = "SELECT * FROM ordersum_tbl WHERE orderid = '$id'";

      $result=mysqli_query($con, $sql) or die (mysqli_error($con));

      if(mysqli_num_rows($result)>0){
        while($j = mysqli_fetch_assoc($result)){
          $pid = $j['pro_id'];
          $sql = "SELECT * FROM product_tbl WHERE pro_id = $pid " or die (mysqli_error($con));
          $r=mysqli_query($con, $sql) or die (mysqli_error($con));
          if(mysqli_num_rows($r)>0){
                while($k = mysqli_fetch_assoc($r)){
                  $sql = "SELECT * FROM pro_dtl_tbl WHERE pro_id = $pid " or die (mysqli_error($con));
                  $res=mysqli_query($con, $sql) or die (mysqli_error($con));
                  if(mysqli_num_rows($res)>0){
                        while($m = mysqli_fetch_assoc($res)){



      {
      $output .= '<tr>
                          <td>'.$k["name"].'</td>
                          <td>'.$j["qty"].'</td>
                          <td align="right">'.$j["prize"].'</td>
                            <td>'.$m["mrp"].'</td>
                     </tr>
                          ';
      }}
    }}}


    }
    $total=0;
       $sql = ("SELECT total FROM `order_tbl` where order_id='$id'") ;
       $i = mysqli_query($con, $sql);
       while($row = mysqli_fetch_array($i)){
         $total= $row['total'];}
         $output .= '<tr><td colspan="4"></td></tr>
         <tr><td></td>
                          <td><B>GRAND TOTAL</B>:</td>
                             <td align="right"><B>'.$total.'</B></td>
                                                <td></td>   </tr>
                             ';


      return $output;
 }}
 if(isset($_POST["create_pdf"]))
 {
      require_once('tcpdf/tcpdf.php');
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
      $obj_pdf->SetCreator(PDF_CREATOR);
      $obj_pdf->SetTitle("Bill");
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
      $obj_pdf->SetDefaultMonospacedFont('helvetica');
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
      $obj_pdf->setPrintHeader(false);
      $obj_pdf->setPrintFooter(false);
      $obj_pdf->SetAutoPageBreak(TRUE, 10);
      $obj_pdf->SetFont('helvetica', '', 12);
      $obj_pdf->AddPage();
      $content = '';
      $content .= '
      <h3 align="center"><BR>
Tax Invoice<br>
<hr>
      E-KART<BR>
H.O. Tara Mansion,39/4287-a&B,Maanikkiri cross road<BR>
Pallikukku Ernakulam<BR>
Kerala PO 686533<BR>
Tel:8765678987 , 9876789876<BR>Email:onlineproducts@gmail.com<BR><hr><BR><BR></h3>
TO:<BR>
      <table border="1" cellspacing="0" cellpadding="5">
           <tr>
                <th width="35%"><b>NAME</b></th>
                <th width="15%"><b>QTY</b></th>
                <th width="25%" align="right"><b>PRIZE</b></th>
                <th width="25%"><b>MRP</b></th>

           </tr>
      ';
      $content .= fetch_data();
      $content .= '</table><BR><HR>

      <p style="font-size:7px;">AUTOGENERATED BY COMPUTER</P>';
      $obj_pdf->writeHTML($content);
      $obj_pdf->Output('bill.pdf', 'I');
 }
 ?>





 <?php
     session_start();


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="">
     <meta name="author" content="">
     <link href="../images/foods/logo.png" rel="shortcut icon">
     <title> E-MART:ONLINE SHOPPING PORTAL</title>

     <!-- core CSS -->
     <link href="css/jssss.css" rel="stylesheet">
     <link href="css/main3.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="css/text9.css">
     <link rel="stylesheet" type="text/css" href="css/img3copy.css">
     <link rel="stylesheet" href=
   "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
 <body>


   <nav class="navbar navbar-inverse" role="banner">
     <div class="container">
       <?php include('header.php');?>
   </div>
 </nav>
 <br>

 <div class="container">
         <div class="form-horizontal wow fadeInDown">
                 <label for="filter" class="control-label">  <h2> RECORDS </h2></label>
         </div>
</div>



       <div class="col-md-12" style="border: solid #D9D9D9 1px; padding: 10px; padding-top: 5px; box-shadow: #9F9F9F 2px 3px 5px; margin-top: 10px;">
    		<p class="wow fadeInDown"><em>Order List</em></p>
         <table class="table table-hover table-condensed wow fadeInDown">
             <thead style="background-color:#282828; color:#fff;">
                 <tr>
                     <th class="hidden-print" style="text-align:center;"> <span class="glyphicon glyphicon-exclamation-sign"></span> Order id</th>
                     <th width="120px" style="text-align:center;"><span class="glyphicon glyphicon-user"></span> username</th>
                     <th style="text-align:center;"><span class="glyphicon glyphicon-gift"></span>  Total</th>
                       <th style="text-align:center;"><span class="glyphicon glyphicon-gift"></span>  Action</th>


                 </tr>
             </thead>
             <tbody id="tablebody">
                <?php include('includes/dbconn.php');
                  $username=($_SESSION['login_customer']);

 			              $sql = ("SELECT * FROM order_tbl where username='$username' order by order_id  ") ;

                      $result=mysqli_query($con, $sql);
 				                 if(mysqli_num_rows($result)>0){
 					                     while($row = mysqli_fetch_assoc($result)){



                         ?>
                <tr class="success" style="cursor:pointer;">
                 <td style="text-align:center;"><?php  echo $row['order_id'];?></td>
                 <td style="text-align:center;"><?php  echo $row['username'];?></td>
                 <td style="text-align:center;"><?php   echo $row['total']; ?></td>

                 <td style="text-align:center;">
                   <form action="" method="POST">
                       <button type="submit" class="btn btn-success  wow fadeInDown" name="create_pdf"  type="submit"value="<?php echo $row['order_id'];?>" /> BILL</button>




                 </form></td>
                 <?php
                 }?>

                </tr>



                <?php }?>
             </tbody>
         </table>

     </div>


 <!--*************************************************** FOOTERS **********************************************-->

 <footer id="footer" class="midnight-blue wow fadeInDown">
         <?php include('footer.php');?>
     </footer><!--/#footer-->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>


 </body>
 </html>

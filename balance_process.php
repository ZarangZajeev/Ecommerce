<?php
		session_start();

		include('includes/dbconn.php');
if(isset($_POST['update'])){


		if(isset($_POST['balance'])){
				$id = $_SESSION['login_customer'];
$balance = intval($_POST['balance']);
$sql = ("SELECT balanace FROM `payment_tbl` where customer_username='$id'") ;
$p = mysqli_query($con, $sql);
while($l = mysqli_fetch_array($p)){
	 $balance=$l['balanace']+$balance;
 }


$sql=("UPDATE payment_tbl SET balanace='$balance' WHERE customer_username='$id'");
$re=mysqli_query($con, $sql);
if($re!=""){
	echo "<script>alert('Saved Successfully!');
				window.location.href='balance.php';</script>";
}
else{
	echo "<script>alert('Saved Unsuccessfull!');
				window.location.href='balance.php';</script>";
}
}}

		mysqli_close($con);
?>

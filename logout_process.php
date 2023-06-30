<?php
	session_start();


		unset($_SESSION['admin_name']);
		unset($_SESSION['company_name']);
		unset($_SESSION['login_customer']);


	header('location:index.php');

	
?>

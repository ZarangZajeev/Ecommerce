<?php

include('includes/dbconn.php');
  session_start();
    $myuser = mysqli_real_escape_string($con,$_POST['username']);
  	$mypass = mysqli_real_escape_string($con,$_POST['password']);

  		$sql = ("SELECT * FROM user_tbl WHERE
      	 username='$myuser' AND password=MD5('$mypass')");

         $result=mysqli_query($con, $sql);
         if (mysqli_num_rows($result)>0){
            while ($row = mysqli_fetch_assoc($result)){
              $user= $row['username'];
              $role=$row['role'];
            }

      if ($role=="user")
      {

        $_SESSION['login_customer']=$user;
        echo "<h1>LOGIN SUCCESSFUL</h1>";
            header("location: index.php");



      }
      else if ($role=="admin")
      {

        $_SESSION['admin_name']=$user;
        echo "<h1>LOGIN SUCCESSFUL</h1>";

            header("location: index.php");



      }
      else if ($role=="company")
      {

        $_SESSION['company_name']=$user;
        echo "<h1>LOGIN SUCCESSFUL</h1>";

            header("location: index.php");



      }
}
      else {
        echo '<script>
  					window.alert("Your not registered user!")
  					window.location.href="index.php";
  				</script>';
        }
        mysqli_close($con);



?>

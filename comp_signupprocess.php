<?php

include('includes/dbconn.php');

$customer_name = $con->real_escape_string($_POST['name']);
$customer_username = $con->real_escape_string($_POST['username']);
$customer_email = $con->real_escape_string($_POST['email']);
$customer_phone = $con->real_escape_string($_POST['phone']);
$customer_address = $con->real_escape_string($_POST['address']);

$customer_password = $con->real_escape_string($_POST['password']);
$query="SELECT * FROM user_tbl where username='$customer_username' ";
$re=mysqli_query($con,$query);
if(mysqli_num_rows($re)>0){
  echo "<script>alert('!!!!!UserName alredy Exist!!!!! Please change your Username');
    window.location.href='cus_signup.php';</script>";
}
else{

    $query="SELECT * FROM user_tbl where phone='$customer_phone'";
    $re=mysqli_query($con,$query);
    if(mysqli_num_rows($re)>0){
      echo "<script>alert('PhoneNumber alredy Exist!Please change your Phonenumber');
        window.location.href='cus_signup.php';</script>";
  }
  else{

    $uppercase=preg_match('@[A-Z]@',$customer_password);
    $lowercase=preg_match('@[a-z]@',$customer_password);
    $number=preg_match('@[0-9]@',$customer_password);
    $spclchar=preg_match('@[^\w]@',$customer_password);
    if(!$uppercase){
        echo"<script>alert('password should contain atleast an upper case letter');
        window.location.href='signup.php';</script>";
    }
    else if(!$lowercase){
      echo"<script>alert('password should contain atleast a lower case letter');
      window.location.href='signup.php';</script>";
    }
    else if(!$number){
      echo"<script>alert('password should contain atleast a Number');
      window.location.href='signup.php';</script>";
    }
    else if(!$spclchar){
      echo"<script>alert('password should contain atleast a Special character');
      window.location.href='signup.php';</script>";
    }
    else if(strlen($customer_password)<8){
      echo"<script>alert('password should be greater than 8 letters');
      window.location.href='signup.php';</script>";
    }


    else if(strlen($customer_phone)!=10){
        echo"<script>alert('Phone number is 10 Digit');
        window.location.href='signup.php';</script>";
    }
    else
    {

      $query = "INSERT into user_tbl VALUES('" . $customer_username . "','" . $customer_name . "','" . $customer_phone . "','" . $customer_email . "','" . $customer_address ."','" . MD5($customer_password) ."','null','company')";
      $success = $con->query($query);

      if (!$success){
      	die("Couldnt enter data: ".$con->error);
      }
      else{
        echo "<script>alert('company added successfully');
        window.location.href='index.php';</script>";
      }
}
  }
}
$con->close();

?>

<?php
/*$userid=$_POST['userid'];
$uname=$_POST['uname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address*/
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "library";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) 
    {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else 
    {
     $INSERT = "INSERT Into user (userid,uname,phone,email,address) values(?, ?, ?, ?,?)";
  
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("issss",$userid,$uname,$phone,$email,$address);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } 
     $stmt->close();
     $conn->close();
     
?>
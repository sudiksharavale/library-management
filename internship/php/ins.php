<?php
$userid=$_POST['userid'];
$uname=$_POST['uname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];

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
     $INSERT =" SELECT * from user WHERE libid=?";



   /* "INSERT Into form (bookname,email,phone,address,quantity,bookno,price,userid,uname) values(?, ?, ?, ?,?,?,?,?,?)";*/
  
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss",$uname,$email,$phone,$address);
      $stmt->execute();
      return true;     } 
     $stmt->close();
     $conn->close();
    
?>
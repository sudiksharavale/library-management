<?php
$bookno=$_POST['bookno'];
$bookname=$_POST['bookname'];
$quantity=$_POST['quantity'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$price=$_POST['price'];
$userid=$_POST['userid'];
$uname=$_POST['uname'];

if (!empty($bookname) || !empty($email) || !empty($phone)) 
{
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
     
       $INSER = "INSERT Into user (userid,uname,phone,email,address) values(?,?,?,?,?)";
  
      $stmt = $conn->prepare($INSER);
      $stmt->bind_param("issss",$userid,$uname,$phone,$email,$address);
      $stmt->execute();
      echo "New record inserted sucessfully";
      $INSE = "INSERT Into books (bookno,bookname,quantity,price) values(?,?,?,?)";
  
      $stmt = $conn->prepare($INSE);
      $stmt->bind_param("isii",$bookno,$bookname,$quantity,$price);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } 
     $stmt->close();
     $conn->close();
    
} else {
 echo "All field are required";
 die();
}
?>
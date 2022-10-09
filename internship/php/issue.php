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
    $dbname = "khushha";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) 
    {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else 
    {
     $INSERT = "INSERT Into form (bookname,email,phone,address,quantity,bookno,price,userid,uname) values(?, ?, ?, ?,?,?,?,?,?)";
  
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssiiiis",$bookname,$email,$phone,$address,$quantity,$bookno,$price,$userid,$uname);
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
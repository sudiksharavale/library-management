<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$libid=$_POST['libid'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$password=$_POST['password'];

if (!empty($libid) || !empty($email) || !empty($phone)) 
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
     $INSERT =" UPDATE `admin` SET `fname`=?,`lname`=?,`libid`=?,`email`=?,`phone`=?,`address`=?,`password`=? WHERE libid=1";



   /* "INSERT Into form (bookname,email,phone,address,quantity,bookno,price,userid,uname) values(?, ?, ?, ?,?,?,?,?,?)";*/
  
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssissss",$fname,$lname,$libid,$email,$phone,$address,$password);
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
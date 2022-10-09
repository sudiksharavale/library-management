<?php
$user=$_POST['uname'];
$user=stripslashes($user);
$user=mysql_real_escape_string($user);
mysql_connect("localhost","root","");
mysql_select_db("library");
$result=mysql_query("select * from user where uname='$userid'")
or die("failed to ".mysql_error());
$row=mysql_fetch_array($result);
if($row<0)
{
   return true;
}
else 
{
    return false;
}
?>

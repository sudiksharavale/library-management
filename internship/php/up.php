<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"library")
?>
<!doctype html>
<html lang="en">
<head>
<title>Librarian Panel</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/newuser.css">
</head>
<body>
<header>
<div class="nav">
<p>LIBRARIAN PANEL</p>
<img src="../images/bvit.png">
<p id="user">Bvit</p>
<a href="index.html" style="text-decoration: none;"><div id="logout" style="text-decoration: none;">Logout</div></a>

</div>
<!--<nav>
<ul>
<li><a href="../php/dashboard.php">Dashboard</a></li>
<li><a href="profile.html">My Profile</a></li>
<li><a href="issue.html">Issue Books</a></li>
<li><a href="../php/issued.php">View Issued Books</a></li>
<li><a href="manageuser.html">Manage Users</a></li>
<li><a href="bookmanage.html">Book Management</a></li>
<li><a href="help.html">Help</a></li>
<li><a href="about.html">About Software</a></li>

</ul>
</nav>-->
</header>
<div class="sectionbox">
<section>
  <div id="loginpic">
<img src="../images/login1.png" alt="LIBRARIAN Image" height="10%" width="10%">
 </div>
</button>
<form action="" method="POST" name="f1">
<table>

<tr><td> <label>First Name</label></td>
<td><input type="text" id="fname" name="fname" placeholder="Book No."></td></tr>
<tr><td> <label>Last Name</label></td>
<td><input type="text" id="bno" name="bookno" placeholder="Book No."></td></tr>
<tr><td><label>Phone</label></td>
<td><input type="text" id="bno" name="bookno" placeholder="Book No."></td></tr>
<tr><td> <label>Email</label></td>
<td><input type="text" id="bno" name="bookno" placeholder="Book No."></td></tr>
 <tr><td><label>Address</label></td>
<td><input type="text" id="bno" name="bookno" placeholder="Book No."></td></tr>

<tr><td><input type="submit" value="submit" name="sub"></td></tr></table></form>
</section>
</div>
</body>
  </html>
  
<?php
//$fname=$_POST["fname"];
if(isset($_POST["sub"]))
{
	$res=mysqli_query($link,"select * from user where userid='$_POST[fname]'");
	echo "<table>";
	while($row=mysqli_fetch_array($res))
	{
echo "<tr>";
echo "<td>"; 
 echo $row["uname"];  
 echo "</td>";
echo "</tr>";
	}
echo "</table>";
}



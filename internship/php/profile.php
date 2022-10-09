<!doctype html>
<html lang="en">
<head>
<title>Librarian Panel</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/profile.css">
</head>
<body>
<header>
<div class="nav">
<p>LIBRARIAN PANEL</p>
<img src="../images/bvit.png">
<p id="user">Bvit</p>
<a href="index.html" style="text-decoration: none;"><div id="logout" style="text-decoration: none;">Logout</div></a>

</div>
<nav>
<ul>
<li><a href="../html/dashboard.html">Dashboard</a></li>
<li><a href="../html/profile.html">My Profile</a></li>
<li><a href="../html/issue.html">Issue Books</a></li>
<li><a href="../html/issued.html">View Issued Books</a></li>
<li><a href="../html/manageuser.html">Manage Users</a></li>
<li><a href="../html/bookmanage.html">Book Management</a></li>
<li><a href="../html/help.html">Help</a></li>
<li><a href="../html/about.html">About Software</a></li>

</ul>
</nav>
</header>
<div class="sectionbox">
<section>
  <div id="loginpic">
<img src="../images/bvit.png" alt="LIBRARIAN Image" height="40%" width="40%">
 </div>
</button>
<form action="../html/profile.html" method="POST">

<?php
$conn = mysqli_connect("localhost", "root", "", "Library");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT fname,lname,libid,email,phone,address,password FROM admin";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
  echo "<label>First Name</label>
<input value=" . $row["fname"]. "><br> <label>Last Name              </label>
<input value=" . $row["lname"] . "><br> <label>Lib id</label>
<input value=" . $row["libid"]. "><br> <label>Email</label>
<input value=" . $row["email"]. "><br> <label>Phone</label>
<input value=" . $row["phone"]. "><br> <label>Address</label>
<input value=" . $row["address"]. "><br> <label>Password</label>
<input value=" . $row["password"]. ">" ;
}
echo "</form>";
} else { echo "0 results"; }
$conn->close();
?>
<a href="../html/profile.html"><input type="submit" value="submit"></a>
</form>
</section>
</div>
</body>
</html>
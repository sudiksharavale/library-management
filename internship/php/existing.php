<!doctype html>
<html lang="en">
<head>
<title>Librarian Panel</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/existing.css">
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
<li><a href="../php/dashboard.php">Dashboard</a></li>
<li><a href="profile.php">My Profile</a></li>
<li><a href="issue.html">Issue Books</a></li>
<li><a href="../php/issued.php">View Issued Books</a></li>
<li><a href="manageuser.html">Manage Users</a></li>
<li><a href="bookmanage.html">Book Management</a></li>
<li><a href="help.html">Help</a></li>
<li><a href="about.html">About Software</a></li>

</ul>
</nav>
</header>
<div class="sectionbox">
<section>
  <div id="loginpic">
<img src="../images/login1.png" alt="LIBRARIAN Image" height="10%" width="10%">
 </div>
</button>
<form action="../php/ins.php" method="POST">
<table>

<tr><td> <label>First Name</label></td>
<td><input type="text" id="bno" name="bookno" placeholder="Book No."></td></tr>
<tr><td> <label>Last Name</label></td>
<td><input type="text" id="bno" name="bookno" placeholder="Book No."></td></tr>
<tr><td><label>Phone</label></td>
<td><input type="text" id="bno" name="bookno" placeholder="Book No."></td></tr>
<tr><td> <label>Email</label></td>
<td><input type="text" id="bno" name="bookno" placeholder="Book No."></td></tr>
 <tr><td><label>Address</label></td>
<td><input type="text" id="bno" name="bookno" placeholder="Book No."></td></tr>
<tr><td><input type="submit" value="submit"></td></tr>
     <?php
$conn = mysqli_connect("localhost", "root", "", "library");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT * from user where userid=?";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["userid"]. "</td><td>" . $row["uname"] . "</td><td>"
. $row["phone"]. "</td><td>" . $row["email"]. "</td><td>" . $row["address"]. "</td></tr>";
}
echo "</table>";
}
else { echo "0 results"; }
$conn->close();
?>
</table>
</form>
</section>
</div>
  </body>
  </html>
<!doctype html>
<html lang="en">
<head>
<title>Dashboard</title>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Cute+Font&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/dashboard.css">
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
<section>
<button id="issuebook"><p>
	<?php
$conn = mysqli_connect("localhost", "root", "", "Library");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT MAX(bookno) FROM books";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo  $row["MAX(bookno)"];
}
} else { echo "0 results"; }
$conn->close();
?>

</p><br><i class="fa fa-book" aria-hidden="true"></i>Issued Books</button>
<button id="users"><p>
    <?php
$conn = mysqli_connect("localhost", "root", "", "Library");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT MAX(userid) FROM user";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo  $row["MAX(userid)"];
}
} else { echo "0 results"; }
$conn->close();
?>
  
</p><br><i class="fa fa-user" aria-hidden="true"></i>Users</button>
<button id="books"><p>
      <?php
$conn = mysqli_connect("localhost", "root", "", "Library");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT SUM(quantity) FROM books";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo  $row["SUM(quantity)"];
}
} else { echo "0 results"; }
$conn->close();
?>

</p><br><i class="fa fa-book" aria-hidden="true"></i>Books Available</a></button>
<img src="../images/pop.jpg">
</section>
</body>
</html>
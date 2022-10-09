<html lang="en">
<head>
<title>Librarian Panel</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/issued.css">
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
<form>
  <ul>
<li><label>User id</label>
<input type="text" id="bno" name="bookno" placeholder="Book No."></li>
 <li><label>User Name</label>
<input type="text" id="bno" name="bookno" placeholder="Book No."></li>
<li><label>Book No</label>
<input type="text" id="bno" name="bookno" placeholder="Book No."></li>
</form>
<table>
  <tr>
    <th>Book No.</th>
    <th>Book Name</th>
    <th>Price</th> 
    <th>Quantity</th>
        <th>User Id</th>
        <th>User name</th>
        
        <th>Author Name</th>
        <th>Date Issued</th>
        <th>Due Date</th>
        <th>Action</th>
    </tr>
     <?php
$conn = mysqli_connect("localhost", "root", "", "library");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT bookno,bookname,quantity,price from books";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["bookno"]. "</td><td>" . $row["bookname"] . "</td><td>"
. $row["price"]. "</td><td>" . $row["quantity"]. "</td>></tr>";
}
echo "<?table>";
}
$sql = "SELECT userid,uname FROM user";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["userid"]. "</td><td>" . $row["uname"] . "</td></tr>";
}

echo "</table>";
 }else { echo "0 results"; }
$conn->close();
?>
</table>
</section>	
</body>
</html>
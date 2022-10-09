<html>
<head>
</head>
<body>

<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('****');

$query = "SELECT * FROM anstalld";
$result = mysql_query($query) or die(mysql_error());

?>


<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" cellspacing="1" cellpadding="2">
<tr>

<?php 

while($row = mysql_fetch_array($result))
            {

$namn = $row['namn'];
$mandag = $row['mandag'];
$tisdag = $row['tisdag'];
$onsdag = $row['onsdag'];
$torsdag = $row['torsdag'];
$fredag = $row['fredag'];
?>


<td width="100"></td>
<td><?=$namn?></td>
</tr>
<tr>
<td width="100">Mandag</td>
<td><input name="mandagid" type="text" value="<?=$mandag?>"></td>
</tr>
<tr>
<td width="100">Tisdag</td>
<td><input name="tisdagid" type="text" value="<?=$tisdag?>"></td>
</tr>
<tr>
<td width="100">Onsdag</td>
<td><input name="onsdagid" type="text" value="<?=$onsdag?>"></td>
</tr>
<tr>
<td width="100">Torsdag</td>
<td><input name="torsdagid" type="text" value="<?=$torsdag?>"></td>
</tr>
<tr>
<td width="100">Fredag</td>
<td><input name="fredagid" type="text" value="<?=$fredag?>"></td>
</tr>
<?php } ?>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="update" type="submit" id="update" value="Update">
</td>
</tr>
</table>
</form>



<?php

if(isset($_POST['update']))
{

$namn = $_POST['namnid'];
$mandag = $_POST['mandagid'];
$tisdag = $_POST['tisdagid'];
$onsdag = $_POST['onsdagid'];
$torsdag = $_POST['torsdagid'];
$fredag = $_POST['fredagid'];

$sql = mysql_query("UPDATE anstalld SET mandag = '$mandag', tisdag = '$tisdag', onsdag = '$onsdag', torsdag = '$torsdag', fredag = '$fredag' WHERE namn = '$namn'");

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";

}


?>
</body>
</html>
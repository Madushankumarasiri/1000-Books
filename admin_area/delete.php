
<?php
  include('session.php');
 
?>

<!DOCTYPE html>
<html>
<head>
	<?php include("header_admin.php"); ?>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
<th>Delete Item</th>
</tr>
<?php
include('../scripts/connect_to_mysql.php');


$sql = "SELECT Product_ID, Product_Name, Product_Category FROM product";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Product_ID"]. "</td><td>" . $row["Product_Name"] . "</td><td>"
. $row["Product_Category"]. "</td><td><a href='delete_query.php?del=$row[Product_ID]'>delete</a> </td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
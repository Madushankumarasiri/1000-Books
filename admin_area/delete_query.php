<?php

include('../scripts/connect_to_mysql.php');

 
	if( isset($_GET['del']) )
	{
		$id = $_GET['del'];
		$sql= "DELETE FROM product WHERE Product_ID='$id'";
		$res= mysqli_query($conn,$sql) or die("Failed".mysqli_error());
		echo "<meta http-equiv='refresh' content='0;url=delete.php'>";
	}

?>
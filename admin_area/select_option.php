<?php
   include ('session.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Store Admin Area</title>

</head>

<body>
<div align="center" id="mainWrapper">
  <?php include_once("header_admin.php");?>
  <div id="pageContent"><br />
    <div align="left" style="margin-left:24px;">
      <h2>Hi Administrator !</h2>
      <p><a href="inventory_list.php">Add New Book to the Store</a><br />
      
      <a href="delete.php ?>">Remove Item from the store</a><br>
    </p>
    </div>
    <br />
  <br />
  <br />
  </div>
 <!-- <?php //include_once("../template_footer.php");?> -->
</div>
</body>
</html>
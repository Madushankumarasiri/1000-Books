
<?php
  include('session.php');

?>

<?php
 
include('../scripts/connect_to_mysql.php');
if (isset($_POST['product_name'])){


  $product_name = $_POST['product_name'];
  $category = $_POST['category'];
  $price = $_POST['price'];

$sql = "INSERT INTO product(Product_Name,Product_Category,Product_Price) VALUES ('$product_name','$category','$price')";
   /*or die (mysql_error());*/
   if($conn->query($sql) === TRUE){

    echo "<h1>Successfully Added</h1>"; 
   }
     else{
      echo "<h1>An Error Occured</h1>" .$sql ."<br>" .$conn->error;
     }

     $pid = mysqli_insert_id($conn);
  // Place image in the folder 
  $newname = "$pid.jpg";
  move_uploaded_file( $_FILES['fileField']['tmp_name'], "../inventory_images/$newname");
  //header("location: inventory_list.php");
  
    exit();
}


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inventory List</title>
<link rel="stylesheet" href="../style/style.css" type="text/css" media="screen" />
</head>

<body>
<div align="center" id="mainWrapper">
  <?php include_once("header_admin.php");?>
  <div id="pageContent"><br />
    
<div align="left" style="margin-left:24px;">
      <h2>Add New</h2>
     <!--  <?php// echo $product_list; ?> -->
    </div>
    <hr />
    <a name="inventoryForm" id="inventoryForm"></a>
    <h3>
    Add New Book to the Store
    </h3>
    <form action="inventory_list.php" enctype="multipart/form-data" name="myForm" method="POST">
    <table width="90%" border="0" cellspacing="0" cellpadding="6">
      <tr>
        <td width="20%" align="right">Product Name</td>
        <td width="80%"><label>
          <input name="product_name" type="text"  required>
        </label></td>
      </tr>
      <tr>
        <td align="right">Product Price</td>
        <td><label>
          $
          <input name="price" type="text" required >
        </label></td>
      </tr>
      <tr>
        <td align="right">Category</td>
        <td><label>
          <select name="category">
         <!--  <option value=""></option> -->
          <option value="Biographies">Biographies</option>
          <option value="Health and Fitness">Health and Fitness</option>
          <option value="Business">Business</option>
          <option value="Comics">Comics</option>
          <option value="Religion">Religion</option>
          <option value="Romance">Romance</option>

          </select>
        </label></td>
      </tr>
      <tr>

      <tr>
        <td align="right">Product Image</td>
        <td><label>
          <input type="file" name="fileField" id="fileField" required>
        </label></td>
      </tr>      
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <input type="submit" name="button" id="button" value="Add This Item Now"/>
        </label></td>
      </tr>
    </table>
    </form>
    <br />
  <br />
  </div>

</div>
</body>
</html>
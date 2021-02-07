 <?php

if (isset($_GET['category'])) {
  // Connect to the MySQL database  
    include "scripts/connect_to_mysql.php"; 
  $category = $_GET['category'];

$category_list="";
  
  $sql = mysqli_query($conn,"SELECT * FROM product WHERE Product_Category='$category' ");
  $category_list .= '<div class="row">';
 $productCount = mysqli_num_rows($sql); // count the output amount
    if ($productCount > 0) {
    // get all the product details
    while($row = mysqli_fetch_array($sql)){ 
       $id = $row["Product_ID"];
       $product_name = $row["Product_Name"];
       $price = $row["Product_Price"];
      // $category2 = $row["Product_Category"];
       $category_list .= '
       <div class="col-md-3" id="list2">
        <div class="card" style="width: 10rem;">
  <a href="product.php?id=' . $id . '?category=' . $category . '"><img class="card-img-top" src="inventory_images/' . $id . '.jpg" alt="Card image cap"></a>
  <div class="card-block">
    <h6 class="card-title">' . $product_name . '</h6>
    <p class="card-text">Price: $' . $price . '</p>
    <a href="#" data-name="' . $product_name . '"  data-price="' . $price . '"  class= "add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>';

}}} ?>


<!DOCTYPE html>
<html>
<head>
	<title>Category : <?php $category ?></title>
</head>
<body>
<?php include 'template_header.php';
echo $category_list; 
?>

</body>
</html>
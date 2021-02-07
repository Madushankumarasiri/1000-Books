<head><?php include_once("template_header.php");?></head>
<?php 

if (isset($_GET['id'])) {
  // Connect to the MySQL database  
    include "scripts/connect_to_mysql.php"; 
  $id = preg_replace('#[^0-9]#i', '', $_GET['id']); 
  
 
  $sql = mysqli_query($conn,"SELECT * FROM product WHERE Product_ID='$id' LIMIT 1");
  $productCount = mysqli_num_rows($sql); // count the output amount
    if ($productCount > 0) {
    // get all the product details
    while($row = mysqli_fetch_array($sql)){ 
       $product_name = $row["Product_Name"];
       $price = $row["Product_Price"];
       $category = $row["Product_Category"];
      
       
         }
  }}
  $rlist="";
  
  $sql2 = mysqli_query($conn,"SELECT * FROM product WHERE Product_Category='$category' ");
  $rlist .= '<div class="row">';
$productCount2 = mysqli_num_rows($sql2); // count the output amount
    if ($productCount > 0) {
    // get all the product details
    while($row = mysqli_fetch_array($sql2)){ 
       $id2 = $row["Product_ID"];
       $product_name2 = $row["Product_Name"];
       $price2 = $row["Product_Price"];
      // $category2 = $row["Product_Category"];
       $rlist .= '
       <div class="col-md-3" id="list2">
        <div class="card" style="width: 10rem;">
  <a href="product.php?id=' . $id2 . '?category=' . $category . '"><img class="card-img-top" src="inventory_images/' . $id2 . '.jpg" alt="Card image cap"></a>
  <div class="card-block">
    <h6 class="card-title">' . $product_name2 . '</h6>
    <p class="card-text">Price: $' . $price2 . '</p>
    <form id="form1" name="form1" method="post" action="cart.php">
        <input type="hidden" name="pid" id="pid" value="' . $id2 . '" />
    <button type = "submit" class="btn btn-success">Add to cart</button>
    </form>
  </div>
</div>
      </div>';

      
       
         }
  }

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>

<title><?php echo $product_name; ?></title>

</head>
<body><br>
<div class="container-fluid">
<div class="row">
  <div class="col-md-3">
<img src="inventory_images/<?php echo $id; ?>.jpg" width="284" height="376" alt="<?php echo $product_name; ?>" />

  </div>
  <div class="col-md-3">
    <h2><?php echo "<h4 display-4>$product_name</h4> "; ?></h2><br>
    <h4><?php echo "<h4 display-4>Price: $ $price </h4>"; ?></h4><br>
    <h4><?php echo "Category: $category "; ?></h4><br>
    <form id="form1" name="form1" method="post" action="cart.php">
        <input type="hidden" name="pid" id="pid" value="<?php echo $id; ?>" />
    <button type="submit" class="btn btn-success">Add to Cart</button>
  </form>
</div>
</div>
<br>
</div>
<div class="container-fluid">
 <h1>Related Books</h1>
 <hr>
  <?php echo "$rlist"; ?>
</div>

  <hr>
 <?php include_once("template_footer.php");?>
</body>
</html>


<?php 

error_reporting(E_ALL);
ini_set('display_errors', '1');

// Run a select query to get my letest 6 items
// Connect to the MySQL database  
include "scripts/connect_to_mysql.php"; 
$dynamicList = "";
$sql = mysqli_query($conn,"SELECT * FROM product ORDER BY Product_ID DESC LIMIT 8");
$dynamicList .= '<div class="row">';
 
$productCount = mysqli_num_rows($sql); // count the output amount
if ($productCount > 0) {
  while($row = mysqli_fetch_array($sql)){ 
             $id = $row["Product_ID"];
       $product_name = $row["Product_Name"];
       $price = $row["Product_Price"];
       $category = $row["Product_Category"];
      
    
        $dynamicList .= '
      <div class="col-md-3" id="list">
        <div class="card" id="ca" style="width: 10rem;">
  <a href="product.php?id=' . $id . '?category=' . $category . '"><img class="card-img-top" id="test" src="inventory_images/' . $id . '.jpg" alt="Card image cap"></a>
  <div class="card-block">
    <h6 class="card-title">' . $product_name . '</h6>
    <p class="card-text">Price: $' . $price . '</p>
   
    <form id="form1" name="form1" method="post" action="cart.php">
        <input type="hidden" name="pid" id="pid" value="' . $id . '" />
    <button type = "submit" class="btn btn-success">Add to cart</button>
    </form>
  </div>
</div>
      </div>';
  

}  }
?>

<!DOCTYPE html>
<html>
<head>

<title>Store Home Page</title>

</head>
<body>
  <?php
  include_once "template_header.php";
  ?>
<div align="center">
 
  <div id="pageContent">
<div class="col-11">  
    <div id="slides" class="carousel slide" data-ride="carousel">
  
    <ol class="carousel-indicators">
      <li data-target="#slides" data-slide-to="0" class="active"></li>
      <li data-target="#slides" data-slide-to="1"></li>
      <li data-target="#slides" data-slide-to="2"></li>
    </ol>
     
    <div class="row">
         
        <div class="carousel-inner">
     
     <div class="col-12">
      <div class="carousel-item active">
        <img src="3.jpg">
        <div class="carousel-caption d-none d-md-block">
          <h5>Over 10 000 books database</h5>
          <p>The quality of the content is not determined by the section it sits in in the bookstore</p>
        </div>
      </div>
       
      <div class="carousel-item">
        <img src="2.jpg" >
        <div class="carousel-caption d-none d-md-block">
          <h5>Daily Increasing Customer Base</h5>
          <p>Large Amount of Positive Reviews</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="1.jpg"  >
        <div class="carousel-caption d-none d-md-block">
          <h5>100% Readers' Satisfaction</h5>
          <p>Best Service</p>
        </div>
      </div>
    </div> 
  </div>
</div><br>

  
 </div>
</div>
    <br>
     
<h2>Latest Arrivals</h2>
<h6 class="display-6">Latest Books from Famous Authors</h5>
<hr>
<?php

echo "$dynamicList"; 
?>
<div class="container">
        <!-- We are -->
        <h1 class="display-4 center">
            Why do you choose us ?
        </h1><br>
        <div class="card-deck">

            <div class="card" style="border:none;">
                <i class="fas fa-map-marked-alt fas_icon" style="font-size: 60px;"></i><br>
                <h5 class="card-title center">Fast Delivery</h5>
                <div class="card-body">
                    <p class="card-text">Fast delivery to your door-step</p>
                </div>

            </div>
            <div class="card" style="border:none;">
                <i class="fas fa-user-shield fas_icon" style="font-size: 60px;"></i><br>

                <h5 class="card-title center">Secure</h5>
                <div class="card-body">
                    <p class="card-text">Secure Payments and customer privacy protection</p>
                </div>
            </div>
            <div class="card" style="border:none;">
                <i class="fas fa-chart-line fas_icon" style="font-size: 60px;"></i><br>
                <h5 class="card-title center">Customer Base</h5>
                <div class="card-body">
                    <p class="card-text">Daily increasing Customer Base</p>
                </div>
            </div>
      </div>
</div>

<hr>
 <?php include_once("template_footer.php");?>


</body>
  



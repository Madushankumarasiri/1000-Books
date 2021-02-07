
<!DOCTYPE html>
<html>
<head>
	<title>1000 Books</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="style.css">

	<script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <script type="text/javascript" src="javascript.js"></script>

</head>
<body>


  <nav class="navbar navbar-expand-md navbar-dark bg-dark text-white sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="logo2.png" width="40" height="40"> 1000 BOOKS !</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
  

    <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    
                    
                   
                    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
                    <?php
                    if(!isset($_SESSION)){
                    session_start();
                    }
                if(isset($_SESSION['loggedin'])):?>
                  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>
          All Categories</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="category.php?category=Biographies">Biographies</a>
          <a class="dropdown-item" href="category.php?category=Health and Fitness">Health and Fitness</a>
          <a class="dropdown-item" href="category.php?category=Business">Business</a>
          <a class="dropdown-item" href="category.php?category=Comics">Comics</a>
          <a class="dropdown-item" href="category.php?category=Religion">Religion</a>
          <a class="dropdown-item" href="category.php?category=Romance">Romance</a>
        </div>
      </li>
      <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                
                <li class="nav-item"> <a class="nav-link" href="#"><?php echo $_SESSION['username'];?></a></li>
                 <li class="nav-item"><a class="nav-link" href="logout.php" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="fas fa-power-off" style="font-size:20px; color: white;"></i></a></li>
                
                <li class="nav-item"><a class="nav-link" href="cart.php" data-toggle="tooltip" data-placement="bottom" title="View Cart"><i class="fas fa-shopping-cart" style="font-size:20px; color: white;"></i></a></li>

               <?php

                else:?>



                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>
          All Categories</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="category.php?category=Biographies">Biographies</a>
          <a class="dropdown-item" href="category.php?category=Health and Fitness">Health and Fitness</a>
          <a class="dropdown-item" href="category.php?category=Business">Business</a>
          <a class="dropdown-item" href="category.php?category=Comics">Comics</a>
          <a class="dropdown-item" href="category.php?category=Religion">Religion</a>
          <a class="dropdown-item" href="category.php?category=Romance">Romance</a>
        </div>
      </li>
      <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                <li class="nav-item"><a class="nav-link" href="login.php" data-toggle="tooltip" data-placement="bottom" title="Login/Register"><i class="fas fa-sign-in-alt" style="font-size:20px; color: white;"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="cart.php" data-toggle="tooltip" data-placement="bottom" title="View Cart"><i class="fas fa-shopping-cart" style="font-size:20px; color: white;"></i></a></li>
                <?php
                endif;

                ?>
                </ul>
            </div>
        </div>
    </nav>  
 
</body>
</html>


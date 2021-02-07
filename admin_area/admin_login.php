

<?php
   include('../scripts/connect_to_mysql.php');

   session_start();
   
   if (isset($_POST["username"]) && isset($_POST["password"]))  {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         session_start();
         $_SESSION['login_user'] = $myusername;
         
         header("location: select_option.php");
      }else {

         header("location: error.php");
      }
   }

?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Log In </title>

</head>
<link rel="stylesheet" type="text/css" href="admin_style.css">

<body>

 <?php include("header_admin.php"); ?>

   
    <div class="container-fluid" id="ad_mid">
    
     
      <div class="row">
        <div class="col-lg-6">
      <form id="form1" name="form1" method="POST" action="admin_login.php">
         <h2>Admin Area</h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" placeholder="Enter Username">
    <small id="emailHelp" class="form-text text-muted">Enter username of the store administrator !</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-success">Submit</button>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  <button type="reset" class="btn btn-danger">Reset</button>
</form>
      <p>&nbsp; </p>
     <!--  <?php 

      
   // echo $error;    

    ?> -->
    </div>
   </div>

</div>

</div>

</body>
</html>
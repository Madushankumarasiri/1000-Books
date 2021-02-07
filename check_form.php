

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php include "template_header.php"?>
<div class="container">
<form method="post" id="check">
  <div class="form-row">
    <div class="form-group col-md-6">
      <h4 class="display-4 center">Your details</h2>
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Your Name" required>
    </div>
   
  </div>
  <div class="form-group">
    <label for="inputAddress">Shipping Address</label>
    <input type="text" class="form-control" name="addr" placeholder="1234 Main St" required>
  </div>
  <div class="form-group">
    <label for="inputAddress">Phone number</label>
    <input type="number" class="form-control" name="phno" placeholder="Phone Number" required>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" required>
    </div>
    
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" name="zip" required>
    </div>
  </div>
  <div class="form-group">
    
  </div>

  
<button type="submit" class="btn btn-success" >Place Order Now</button>  <br><br>
</form>

<script>
$("#check").submit(function(e){
    $('#ModalSuccess').modal('show');
    return false;
});

</script>


<div class="modal fade" id="ModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Order Placed !</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

    
      <div class="modal-body">
        <div class="text-center">
          <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
          <p>You have placed an order! We will check your information and inform you soon through an email.</p>
        </div>
      </div>

   
      <div class="modal-footer justify-content-center">
        <a type="button" class="btn btn-success" href="index.php">Shop Again</a>
      
      </div>
    </div>

  </div>
</div>

</div>
<?php include "template_footer.php"; ?>


</body>
</html>
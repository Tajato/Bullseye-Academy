<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="assets/css/style.css?v=0.001" rel="stylesheet">
    <script src="assets/js/main.js" async></script>
    <script src="https://kit.fontawesome.com/0d4c0a0b4d.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-6 text-center">
        
        <form class="form-container m-3" action="login.inc.php" method="POST">
            <h5 style="position:relative;bottom:30px;font-size:30px;">Member Login</h5>
            <div class="form-group">
            <?php
                  if (isset($_GET['error'])) {
                  if ($_GET['error'] == 'incorrect') {
              echo '<p class="text-danger"> Incorrect email or password</p>';
              } 
                  } else {
                    echo "<p class='text-success'>Please login</p>";
                  }
            ?>
              <label for="exampleInputEmail2">Email address</label>
              <input type="email" name="mail" class="form-control" id="inputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword2">Password</label>
              <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
              
              <!--<small id="pwmess" class="form-text text-muted"><strong style="color:white;">Password should be 8 characters long</strong></small>-->
            </div>
            <div>
            
            </div>
            <button type="submit" name="login-submit" class="btn btn-primary" id="login-button"><i class="fas fa-sign-in-alt"></i>Sign in</button>
            <div>
                <p style="color:white;" class="border bg-primary m-2">Not a member yet?<a class="m-2" style="color:white;"href="signup.php">Join Us</a></p>
            </div>
          </form>
            </div>
          </div>
        </div>

        <section class="purchase-form">
    <div class="m-5 d-flex justify-content-center" style="position:relative;right:150px;">
    <div class="card w-100 text-center">
        <div class="card-header text-center bg-light">
        <img class="card-img-top" src="assets/images/logo.jpg" style="height:150px;width:150px;border-radius:50%;">
</div>
        <div class="card-body">
      <form action="login.inc.php" method="post" id="payment-form">
        <div class="form-group">

        <?php
                  if (isset($_GET['error'])) {
                  if ($_GET['error'] == 'incorrect') {
              echo '<p class="text-danger"> Incorrect email or password</p>';
              } 
                  } else {
                    echo "<p class='text-success'>Please login</p>";
                  }
            ?>
        
        <input type="email" class="form-control StripeElement StripeElement--empty" name="mail"  placeholder="Email Address" required>
        </div>

        <div class="form-group">
        
        
  <input type="password" id="exampleInputPassword1" class="form-control StripeElement StripeElement--empty" name="pwd" placeholder="Password" required>
 
</div>
        
        <button href="" name="login-submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>Sign in </button>
        <p class="m-2">Not yet a member? <a href="signup.php" class="">Signup</a></p>
    </form>
  </div>
</div>
</section>
</body>
</html>
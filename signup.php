<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
    <link href="assets/css/style.css?v=0.001" rel="stylesheet">
    <script src="assets/js/main.js" async></script>
    <script src="https://kit.fontawesome.com/0d4c0a0b4d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-6 text-center">
           
        <form class="form-container m-3" action="signup.inc.php" method="POST">
            <h5 style="position:relative;bottom:30px;font-size:30px;">Member Signup</h5>
            <div class="form-group">
<?php
                  if (isset($_GET['error'])) {
                  if ($_GET['error'] == 'taken') {
              echo '<p class="text-danger">User already exists!</p>';
              } 
                  } else {
                    echo "<p class='text-success'>Step into financial greatness</p>";
                  }
?>
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="mail" class="form-control" id="inputEmail2" aria-describedby="emailHelp" placeholder="Enter email" required>
                
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Create a password</label>
              <input type="password" name="pwd" class="form-control" id="exampleInputPassword" placeholder="Password" required>
              



    
            </div>
            <button type="submit" name="signup-submit"  class="btn btn-primary"><i class="fas fa-user-plus"></i>Sign Up</button>
            <div>
            <p style="color:white;" class="border bg-primary m-2">Already a member?<a class="m-2" style="color:white;"href="login.php">Login</a></p>
            </div>
          </form>
            </div>
          </div>
        </div>

        <section class="purchase-form">
    <div class="m-5 d-flex justify-content-center" style="position:relative;right:150px;">
    <div class="card w-100  text-center">
        <div class="card-header text-center bg-light">
        <img class="card-img-top" src="assets/images/logo.jpg" style="height:150px;width:150px;border-radius:50%;">
</div>
        <div class="card-body">
      <form action="signup.inc.php" method="post" id="payment-form">
        <div class="form-group">
<?php
                  if (isset($_GET['error'])) {
                  if ($_GET['error'] == 'taken') {
              echo '<p class="text-danger">User already exists!</p>';
              } 
                  } else {
                    echo "<p class='text-success'>Step into financial greatness</p>";
                  }
?>
        <input type="email" class="form-control StripeElement StripeElement--empty" name="mail"  placeholder="Email Address" required>
        </div>

        <div class="form-group">
        
        <input type="password"  class="form-control StripeElement StripeElement--empty" name="pwd" id="exampleInputPassword2" placeholder="Password" required>
        
        
        <button href="" name="signup-submit" class="btn btn-primary m-3"><i class="fas fa-user-plus"></i>Sign up </button>
        <p class="m-2">Already a member? <a href="login.php" class="">Login</a></p>
    </form>
  </div>
</div>
</section>
</body>
</html>
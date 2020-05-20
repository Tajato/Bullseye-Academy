<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://js.stripe.com/v3/"></script>
    <script src="assets/js/charge.js" defer></script>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/0d4c0a0b4d.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <header class="purchase-head">
        <img src="assets/images/logo.jpg" class="purchase-logo">
        <h1>Purchase Below</h1>
        <?php 
            
        ?>
    </header>
        <div class="section mt-4 d-flex justify-content-center">
            <div class="btn-group" role= "group">
                <a href="purchase.php" class="btn btn-primary">Debit/Credit Card</a>
                <a href="zelle.php" class="btn btn-secondary">Zelle</a>
                <a href="cashapp" class="btn btn-secondary">CashApp</a>
            </div>
        </div>
    
        <section class="purchase-form">
    <div>
    <div class="card m-3 w-75 text-center">
        <h5 class="card-header text-center">2 Month Online Forex Trading Course [$250USD]</h5>
  <div class="card-body">
      <form action="charge.php" method="post" id="payment-form">
        <div class="form-group">
        
        <input type="name" class="form-control StripeElement StripeElement--empty" name="first_name"  placeholder="First Name" required>
        </div>

        <div class="form-group">
        
        <input type="name" class="form-control StripeElement StripeElement--empty" name="last_name" placeholder="Last Name" required>
        </div>

        <div class="form-group">
        
        <input type="email" class="form-control StripeElement StripeElement--empty" name="email" value="<?php echo $_SESSION["email"];?>" placeholder="Email Address" required>
        </div>
        <div class="form-group" style="display:none;">
        
        <input type="number" class="form-control StripeElement StripeElement--empty" name="amount" value="25000" placeholder="Amount" required>
        </div>

        <div class="form-group" style="display:none;">
        
        <input type="text" class="form-control StripeElement StripeElement--empty" name="description" value="2 Month Online Forex Trading Course" placeholder="Description" required>
        </div>

        <div class="form-group">
        <!-- <label for="card-element">
         Credit or debit card
        </label> -->
        <div id="card-element" class="form-control">
            <!-- A Stripe Element will be inserted here. -->
        </div>

            <!-- Used to display form errors. -->
        <div id="card-errors" class="" role="alert"></div>
        </div>
        

        <button href="#" class="btn btn-primary btn-block">Buy Now</button>
    </form>
  </div>
</div>
</section>
    


    <!-- <?php
     if (isset($_SESSION['email'])) {
        
    echo '<nav class="navbar navbar-expand-sm navbar-light bg-success">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a href="index1.php" class="nav-item nav-link active">Home <span class="sr-only">(current)</span></a>
            <a href="courses.php" class="nav-item nav-link bg-primary" >Courses</a>
            <a href="#" class="nav-item nav-link" >Contact</a>
            <a href="#" class="nav-item nav-link" >Return Policy</a>
            <a href="#student-results" class="nav-item nav-link">Student Results</a>

            <a href="logout.php" style="position:relative;" class="nav-item nav-link text-primary p-2">Logout</a>
          
            
          </div>
        </div>
      </nav>';
     } else {
      echo '<nav class="navbar navbar-expand-sm navbar-light bg-light">
        
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a href="index1.php" class="nav-item nav-link active" >Home <span class="sr-only">(current)</span></a>
          <a href="signup.php" class="nav-item nav-link" >Sign Up</a>
          <a href="login.php" class="nav-item nav-link bg-muted" >Login</a>
          <a href="courses.php" class="nav-item nav-link" >Courses</a>
          <a href="#" class="nav-item nav-link" >Contact</a>
          <a href="#student-results" class="nav-item nav-link">Student Results</a>

          <a href="#" class="nav-item nav-link" >Return Policy</a>
        </div>
      </div>
    </nav>';
     }
      ?>
       -->
      
</body>
</html>

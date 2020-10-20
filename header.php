<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Bulleyes Online Forex Trading">
    <meta name="keywords" content="bullseyeacademyllc.com,forex, trading, online trading, money,class,online class,bullseyeacademy forex,business,">
    <meta name="author" content="Deangelo Phillips">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="2j76CapQBq2lhPy4FGU1F_KZHg9ZA1QODfdztT0FlBw" />
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js" async></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" async></script>
    <link rel="stylesheet" href="background_styles.css">

    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/main.js" defer></script>
    <script src="https://kit.fontawesome.com/0d4c0a0b4d.js" crossorigin="anonymous" async></script>

</head>
<body>
    <header>
<?php
     if (isset($_SESSION['email'])) {

      echo '<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <a class="navbar-brand" href="index.php">Bullseye Academy</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="courses.php">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="students.php">Results</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="refundpolicy.php">Refund Policy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>

      </ul>
         
      </div>
    </nav>';

     } else {
      echo '<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand" href="index.php"> Bullseye Academy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="courses.php">Courses</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="students.php">Results</a>
    </li>
      <li class="nav-item">
        <a class="nav-link " href="refundpolicy.php">Refund Policy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footer">Contact</a>
      </li>
  <li class="nav-item">
  <a class="text-white nav-link" href="signup.php">Register</a>
  </li>
  <li class="nav-item">
  <a class="text-white nav-link" href="login.php">Sign in</a>
  </li>
  </ul>
        
  </div>
  
</nav>';
     }
?>   
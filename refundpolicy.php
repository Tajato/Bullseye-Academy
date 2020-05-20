<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="assets/css/style.css?v=0.001" rel="stylesheet">
    <!-- <script defer src="assets/js/main.js"></script> -->
    <script src="https://kit.fontawesome.com/0d4c0a0b4d.js" crossorigin="anonymous"></script>

</head>
<body>
    <header>
    <?php
     if (isset($_SESSION['email'])) {
        
    echo '<nav class="navbar navbar-expand-sm navbar-light bg-dark">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a href="index.php" class="nav-item nav-link active">Home <span class="sr-only">(current)</span></a>
            <a href="courses.php" class="nav-item nav-link" >Courses</a>
            <a href="#" class="nav-item nav-link" >Contact</a>
            <a href="refundpolicy.php" class="nav-item nav-link" >Return Policy</a>
            <a href="logout.php" style="position:relative;" class="nav-item nav-link text-primary p-2">Logout</a>
          
            
          </div>
        </div>
      </nav>';
     } else {
      echo '<nav class="navbar navbar-expand-sm navbar-light bg-dark">
        
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a href="index.php" class="nav-item nav-link active" >Home <span class="sr-only">(current)</span></a>
          <a href="signup.php" class="nav-item nav-link" >Sign Up</a>
          <a href="login.php" class="nav-item nav-link " >Login</a>
          <a href="courses.php" class="nav-item nav-link" >Courses</a>
          <a href="#footer" class="nav-item nav-link" >Contact</a>
        

          <a href="refundpolicy.php" class="nav-item nav-link" >Return Policy</a>
        </div>
      </div>
    </nav>';
     }
      ?>
    </header>
      <div class="head">
          <img src="assets/images/logo.jpg" class="logo">
          <div class="head-text">



        <div class="jumbotron m-4" style="" id="modal">
            <div class="modal-header">
            <h1 class="title display-4">Refund Policy</h1>
            </div>
            <p>Just so you know, Bullseye Academy does not issue refunds. If you are concerned even the slightest bit about refunds or whether the educational system is going to work for you or not, just simply do not purchase it. If you go to your bank and try to issue a chargeback dispute on the purchase of the program, you will receive a notice of legal action from the company’s attorney. Thank you in advance for your cooperation. </p>
    </div>
    </div>
    </div>

    <footer id="footer" class="bg-dark">
      <nav class="nav bg-dark justify-content-center m-4">
          <a href="https://www.instagram.com/bullseye_academy/" class="nav-link" target="_blank" ><i class="fab fa-instagram fa-lg"></i></a>
          <a href="https://www.snapchat.com/add/dangelo_876" class=" nav-link" target="_blank" ><i class="fab fa-snapchat-ghost fa-lg"></i></a>
          <a href="" class="nav-link " ><i class=" nav-link fas fa-phone-volume fa-lg"></i>(876) 451-7583</a>
          <a href="" class="nav-link" ><i class="nav-link fas fa-phone-volume fa-lg"></i>(470) 529-6212</a>
  
    </nav>

      </footer>
    </body>
    </html>
    
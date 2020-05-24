<?php
ob_start();
session_start();
?>

<?php
    if ($_GET['success'] == 'signup') {
        header("refresh:5;url=login.php");

        echo "<p class='alert alert-success m-5'>You have successfully signed up! You will be redirected to the login page in 5 seconds. If you are not, <a href='login.php'>Click here.</a>";
        echo '<div class="d-flex justify-content-center">
        <div class="spinner-border text-success" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>';
      

      
    }
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
</body>
</html>

<?php ob_flush(); ?>
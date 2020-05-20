<?php
 if (!empty($_GET['tid']) && (!empty($_GET['product'])) && (!empty($_GET['firstname']))) {
     $GET = filter_var_array($_GET,FILTER_SANITIZE_STRING);

     $tid = $GET['tid'];
     $product = $GET['product'];
     $firstname = $GET['firstname'];

 } else {
     header("Location: purchase.php");
 }

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <script src="https://kit.fontawesome.com/0d4c0a0b4d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-4">
        <h2 class="alert alert-success">Thank you <?php echo $firstname;?> for purchasing <?php echo $product; ?></h2>
        <hr>
        <p class=""> Your transaction id is <?php echo $tid ?></p>
        <p>Check your email for more info.</p>
        <p class=""><a href="courses.php" class="btn btn-light mt-2">Go to Courses</a></p>
        <p><a href="index.php" class="btn btn-light mt-2">Home</a></p>
    </div>
</body>
</html>
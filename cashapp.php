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
    
    <link href="assets/css/style.css?v=0.001" rel="stylesheet">
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
                <a href="purchase.php" class="btn btn-secondary">Debit/Credit Card</a>
                <!-- <a href="zelle.php" class="btn btn-secondary">Zelle</a> -->
                <a href="cashapp.php" class="btn btn-primary">CashApp</a>
            </div>
            
        </div>

        <section class="forcash">
            <h1 class="text-center m-3" style="font-family:'Oswald', sans-serif;">Scan the bar code</h1>
            <p class="time text-center">
            <img width="20%" height="auto" id="for" src="assets/images/cashapp.jpeg">
</p>
</section>
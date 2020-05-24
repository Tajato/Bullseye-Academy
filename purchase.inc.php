<?php
ob_start();
require 'dbh.php';

if (isset($_POST['purchase-submit1'])) {
    $conn = config::connect();
    // $email = $_POST['mail'];
    // $password = $_POST['pwd'];

  
            if (isset($_SESSION['email'])){
            //   var_dump($_SESSION['mail']);
            //var_dump($_SESSION['mail']);
            
    $get = "SELECT * FROM user WHERE usersEmail = ";
    $result_get = $result_get = mysqli_query($conn, $get);
    $_SESSION['data'] = mysqli_fetch_assoc($result_get);
    header("Location: purchase.php");
    exit();
            } else {
                header("Location: signup.php");
                exit();
            }
} else if (isset($_POST['purchase-submit2'])) {
    $conn = config::connect();
    // $email = $_POST['mail'];
    // $password = $_POST['pwd'];

  
            if (isset($_SESSION['email'])){
            //   var_dump($_SESSION['mail']);
            //var_dump($_SESSION['mail']);
            
    $get = "SELECT * FROM user WHERE usersEmail = ";
    $result_get = $result_get = mysqli_query($conn, $get);
    $_SESSION['data'] = mysqli_fetch_assoc($result_get);
    header("Location: purchase1.php");
    exit();
            } else {
                header("Location: signup.php");
                exit();
            }
} else if (isset($_POST['purchase-submit3'])) {
    $conn = config::connect();
    // $email = $_POST['mail'];
    // $password = $_POST['pwd'];

  
            if (isset($_SESSION['email'])){
            //   var_dump($_SESSION['mail']);
            //var_dump($_SESSION['mail']);
            
    $get = "SELECT * FROM user WHERE usersEmail = ";
    $result_get = $result_get = mysqli_query($conn, $get);
    $_SESSION['data'] = mysqli_fetch_assoc($result_get);
    header("Location: purchase2.php");
    exit();
            } else {
                header("Location: signup.php");
                exit();
            }
} else if (isset($_POST['purchase-submit4'])) {
    $conn = config::connect();
    // $email = $_POST['mail'];
    // $password = $_POST['pwd'];

  
            if (isset($_SESSION['email'])){
            //   var_dump($_SESSION['mail']);
            //var_dump($_SESSION['mail']);
            
    $get = "SELECT * FROM user WHERE usersEmail = ";
    $result_get = $result_get = mysqli_query($conn, $get);
    $_SESSION['data'] = mysqli_fetch_assoc($result_get);
    header("Location: purchase3.php");
    exit();
            } else {
                header("Location: signup.php");
                exit();
            }
}

ob_flush();
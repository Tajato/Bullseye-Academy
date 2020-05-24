<?php
require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('sk_test_A27S6oaoKkqVI5dwSwA8CMyA00mzoerNOb');

// Sanitize POST Array, so no harmful info can be typed

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$email = $POST['email'];
$amount = $POST['amount'];
$description = $POST['description'];
$token = $POST['stripeToken'];


// Create customer in Stripe

$customer = \Stripe\Customer::create(array(
    'email' => $email,
    'source' => $token
));

// Charge customer

$charge = \Stripe\Charge::create(array(
    "amount" => $amount,
    "currency" => "usd",
    'description' => $description,
    'customer' => $customer->id
));



// Redirect for successful purchase
header("Location: success.php?tid=$charge->id.&product=$charge->description.&firstname=$first_name");

<?php
  require_once('vendor/autoload.php');

  \Stripe\Stripe::setApiKey('sk_test_BtbGMvw32ORLi6L5CKs2JmDv');

  // annihilation of the post Array
  $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

  $first_name = $POST['first_name'];
  $last_name = $POST['last_name'];
  $email = $POST['email'];
  $token = $POST['stripeToken'];

  //create customers in stripe
  $customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
  ));

  // Charge customer
  $charge = \Stripe\Charge::create(array(
    "amount" => 4999,
    "currency" => "usd",
    "description" => "Intro To vue course",
    "customer" => $customer->id
  ));

  // redirect to success
  header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);

  ?>

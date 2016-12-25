<?php
  require_once('./config.php');

  $token  = $_POST['stripeToken'];
  $email = $_POST['stripeEmail'];


  //var_dump($token);
  
  $customer = \Stripe\Customer::create(array(
      'email' => $email,
      'source'  => $token
  ));


  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 4000000,
      'currency' => 'lkr'
  ));

  $amount = ($charge->amount)/100;
  echo "<h1>Successfully charged $amount LKR!</h1>";
  //echo $charge->currency;
?>
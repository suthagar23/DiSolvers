<?php
require_once('../vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_ru44aZiDqGXnzQw5Tc0Whqcq",
  "publishable_key" => "pk_test_k1MtbvunaQLvSFILBRnkJT6w"
);



\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
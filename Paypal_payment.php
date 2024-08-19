<?php
require_once "payment_type.php";
class Paypal_payment implements payment_type
{
  function payment_method()
  {
    echo "Paypal is payment type to pay order price."."<br>";
  }
}
?>
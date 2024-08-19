<?php
require_once "payment_type.php";
class Instapay_payment implements payment_type
{
  function payment_method()
  {
    echo "Instapay is payment type to pay order price."."<br>";
  }
}
?>
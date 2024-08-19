<?php
require_once "Payment_type.php";
class Vodafone_cash_payment implements Payment_type
{
  function payment_method()
  {
    echo "Vodaphone Cash is payment type to pay order price."."<br>";
  }
}
?>
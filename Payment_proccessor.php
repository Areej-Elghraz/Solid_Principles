<?php
require_once "payment_type.php";
class Payment_processor
{
  private payment_type $payment_type;
  function __construct(payment_type $payment){
    $this->payment_type = $payment;
  }
  function paymnet_information(Order $order){
    echo "order Price is: ".$order->getprice()."<br>";
    return $this->payment_type->payment_method();
  }
}

?>
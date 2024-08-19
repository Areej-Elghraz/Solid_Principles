<?php
require_once "Order.php";
class Order_processor
{
  function process_order(Order $order){
    echo "Order name is ".$order->getname()."<br>";
    echo "Order price is ".$order->getprice()."<br>";
  }
}

?>
<?php
require_once "Order.php";
class Notefication_management
{
  function send_notefication(Order $order){
    echo "Your order name is : ".$order->getname()."<br>";
    echo "Your order price is : ".$order->getprice()."<br>";
  }
}

?>
<?php
  
  require_once "Order.php";
  require_once "Order_processor.php";
  require_once "Notefication_management.php";
  
  require_once "city_price.php";
  require_once "To_another_city_price.php";
  require_once "To_same_city_price.php";
  
  require_once "Payment_processor.php";
  require_once "Payment_type.php";
  require_once "Instapay_payment.php";
  require_once "Paypal_payment.php";
  require_once "Vodafone_cash_payment.php";
  
  $order = new Order("blous", 50);
  
  // order processor
  $order_process = new Order_processor();
  $order_process->process_order($order);
  
  // send messages.
  $noteficaiton = new Notefication_management();
  $noteficaiton->send_notefication($order);
  
  // another city price
  $to_another_city_price = new To_another_city_price($order);
  echo $to_another_city_price->total_cost_count(15);
  
  // payment processor
  $payment_strategy = new Payment_processor(new Instapay_payment());
  $payment_strategy->paymnet_information($order)."<br>";
?>
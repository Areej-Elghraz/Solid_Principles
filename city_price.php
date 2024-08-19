<?php
require_once "Order.php";
class city_price
{
  protected Order $order;
  public function __construct(Order $order) {
    $this->order = $order;
  }
}
?>
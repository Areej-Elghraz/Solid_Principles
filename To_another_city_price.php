<?php
require_once "Shopping_cost_count.php";
require_once "city_price.php";
require_once "order.php";
class To_another_city_price extends city_price implements Shopping_cost_count
{
  public function total_cost_count($shopping_cost)
  {
    echo "the total after add shopping cost is: ".$this->order->getprice() + $shopping_cost."<br>";
  }
}

?>
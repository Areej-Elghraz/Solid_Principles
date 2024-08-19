<?php
require_once "city_price.php";
class To_same_city_price extends city_price
{
  public function total_cost_count()
  {
    echo "the total price is: ".$this->order->getprice()."<br>";
  }
}

?>
<?php

class Order{
  private $name, $price;
  function __construct(string $name, int $price) {
    $this->name = $name;
    $this->price = $price;
  }
  public function getname(){
    return $this->name;
  }
  public function getprice(){
    return $this->price;
  }
}

?>
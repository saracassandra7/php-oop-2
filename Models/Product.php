<?php

class Product{
  public $category;
  public $name;
  public $image;
  public $brand;
  public $price;
  public $is_available = true;

  public function __construct(Category $_category, $_name, $_image, $_brand, $_price)
  {
    $this->category = $_category;
    $this->name = $_name;
    $this->image = $_image;
    $this->brand = $_brand;
    $this->price = $_price;
  }
}

?>
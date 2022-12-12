<?php

class Food extends Product{
  public $weight;
  public $ingredients;
  public $isWet=false;

  public function __construct(Category $category, $_name, $_image, $_brand, $_price, $_weight, $_ingredients)
  {
    parent::__construct($category, $_name, $_image, $_brand, $_price);

    $this->weight = $_weight;
    $this->ingredients = $_ingredients;
  }
}

?>
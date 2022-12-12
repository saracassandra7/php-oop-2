<?php

class Toy extends Product{
  public $feature;
  public $color;

  public function __construct(Category $_category, $_name, $_image, $_brand, $_price, $_feature, $_color)
  {
    parent::__construct($_category, $_name, $_image, $_brand, $_price);
    $this->feature = $_feature;
    $this->color = $_color;
  }
  
}

?>
<?php

class Toy extends Product{
  public $feature;
  public $size;

  public function __construct(Category $_category, $_name, $_brand, $_price, $_feature, $_size)
  {
    parent::__construct($_category, $_name, $_brand, $_price);
    $this->feature = $_feature;
    $this->size = $_size;
  }
  
}

?>
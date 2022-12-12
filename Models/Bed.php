<?php

class Bed extends Product{
  public $material;
  public $size;
  public $color;

  public function __construct(Category $_category, $_name, $_brand, $_price, $_material, $_size, $_color)
  {
    parent::__construct($_category, $_name, $_brand, $_price);
    $this->material = $_material;
    $this->size = $_size;
    $this->color = $_color;
  }
}

?>
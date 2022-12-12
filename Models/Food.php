<?php

class Food extends Product{
  public $weight;
  public $ingredients;
  public $isWet;

  public function __construct(Category $category, $_name, $_image, $_brand, $_price, $_weight, $_ingredients, $_isWet)
  {
    parent::__construct($category, $_name, $_image, $_brand, $_price);

    $this->weight = $_weight;
    $this->ingredients = $_ingredients;
    $this->isWet = $_isWet;
  }

  public function getIsWet(){
    if($this->isWet){
      return 'Cibo umido';
    }else{
      return 'Crocchette';
    }
  }
}

?>
<?php

class Food extends Product{
  public $weight;
  public $ingredients;
  public $isWet=false;

  public function __construct(Category $category, $_name, $_brand, $_price, $_weight, $_ingredients)
  {
    parent::__construct($category, $_name, $_brand, $_price);

    $this->weight = $_weight;
    $this->ingredients = $_ingredients;
  }

  public function setIsWet($_isWet){
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
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
  
  public function getImage(){
    $placeholder = "https://www.bilderwelten.it/assets/placeholder.jpg";
    if ($this->image) {
      return $this->image;
    } else{
      return $placeholder;
    }
  }

  public function setAvailability($_is_available){
    $this->is_available = $_is_available;
  }
  
  public function getAvailability(){
    if($this->is_available){
      return 'Prodotto disponibile';
    }else{
      return 'Prodotto esaurito';
    }
  }
}

?>
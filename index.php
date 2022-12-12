<?php

include __DIR__ . '/Models/Category.php';
include __DIR__ . '/Models/Product.php';
include __DIR__ . '/Models/Food.php';
include __DIR__ . '/Models/Toy.php';
include __DIR__ . '/Models/Bed.php';

$prova = new Food(new Category('gatto', 'icona gatto'), 'cibo prova', 'marca', 20, '5kg', 'carne, verdure');

$prova->setImage('djdjhdjd');
$prova->setAvailability(false);
$prova->setIsWet(true);

var_dump($prova);

?>
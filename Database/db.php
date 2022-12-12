<?php

include __DIR__ . '/../Models/Category.php';
include __DIR__ . '/../Models/Product.php';
include __DIR__ . '/../Models/Food.php';
include __DIR__ . '/../Models/Toy.php';
include __DIR__ . '/../Models/Bed.php';

$dogIcon = '<i class="fa-solid fa-dog"></i>';
$catIcon = '<i class="fa-solid fa-cat"></i>';

$foodList = [
  
  new Food(new Category('Gatto', $catIcon), 'Cibo per gatti', 'https://m.media-amazon.com/images/I/81uGrMEwh4L._AC_SY606_.jpg', 'Miglior Gatto', 25, 15, ['pollo','tacchino'], false),
  
  new Food(new Category('Cane', $dogIcon), 'Cibo per cani', 'https://www.magazzinitotopiccinni.it/media/catalog/product/cache/1/thumbnail/600x/17f82f742ffe127f42dca9de82fb58b1/r/o/royal-canin-15kg-cani.jpg', 'Royal Canin', 45, 15, ['manzo', 'verdure'], false ),

  new Food(new Category('Gatto', $catIcon), 'Cibo per gatti', 'https://m.media-amazon.com/images/I/71gvlL6mi4L._AC_SX679_PIbundle-12,TopRight,0,0_SH20_.jpg', 'Purina One', 5, 0.3, ['manzo', 'verdure', 'carote'], true)

];

$toysList = [

  new Toy(new Category('Cane', $dogIcon), 'Giocattolo per cani', 'https://www.zampashop.com/9709-large_default/palla-portasnack-attivazi.jpg', 'Trixie', 6, 'Pallina rimbalzante da mordicchiare', 'azzurro'),

  new Toy(new Category('Gatto', $catIcon), 'Giocattolo per gatti', 'https://i.ebayimg.com/images/g/6W8AAOSwpy9hKPRv/s-l500.jpg', 'Hianjoo', 3, 'Bacchetta per gatti multi accessoriata', 'verde'),

  new Toy(new Category('Gatto', $catIcon), 'Giocattolo per gatti', 'https://www.climaconvenienza.it/pimages/EASYCOMFORT-Tunnel-Tiragraffi-per-Gatti-Adulti-e-Gattini-Cuccia--extra-big-172842-224.jpg', 'Easycomfort', 50, 'Tunnel tiragraffi per gatti', 'beige'),

  new Toy(new Category('Cane', $dogIcon), 'Giocattolo per cani', 'https://www.macchiascura.it/wp-content/uploads/2019/01/disc-dog-frisbee-cane.jpg', 'Trixie', 9, 'Frisbee per cani', 'arancione')

];

$bedsList = [

  new Bed(new Category('Gatto', $catIcon), 'Cuccia per gatti da interno', 'https://images.eprice.it/nobrand/0/lightbox/319/213513319/03DA3D94-7201-495B-A386-4714ADF61245.jpg', 'Pawhut', 25, 'lino', 60, 'grigio'),

  new Bed(new Category('Cane', $dogIcon), 'Cuccia per cani da esterno', 'https://i.ebayimg.com/images/g/EOcAAOSwwoliLzWA/s-l500.jpg', 'Zoomalia', 80, 'legno', 100, 'marrone')
]

?>
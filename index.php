<?php

include __DIR__  . '/Database/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />

  <style>
    .thumbnail{
      width: 150px;
      height: 150px;
      object-fit: cover;
      object-position: center;
      overflow-y: hidden;
      margin: auto;
      margin-top: 20px;
    }
    
    img{
      max-width: 100%;
    }

    .description{
      font-size: .9rem;
      color: grey;
    }
  </style>

  <title>Pet Shop</title>
</head>
<body>
  <div class="container">

    <!-- cibo -->
    <div class="row mb-3 justify-content-center">
      <h1 class="text-center text-uppercase m-3">cibo</h1>
     <?php foreach($foodList as $food): ?>
      <div class="col-3 me-4">
        <div class="card" style="width: 18rem;">
          <div class="thumbnail">
           <img src="<?php echo $food->getImage() ?>" class="card-img-top" alt="<?php echo $food->name ?>">
          </div>  

          <div class="card-body">
            <h5 class="text-center text-uppercase m-3"><?php echo $food->category->name ?> <?php echo $food->category->icon ?></h5>
            <span class="fw-bold"><?php echo $food->name ?></span>
            <p><em><?php echo $food->brand ?></em></p>

            <span><?php echo $food->getIsWet() ?></span>
            
            <p class="fw-bold"><?php echo $food->price?> &euro; | <?php echo $food->weight ?> kg</p>
            <span>Ingredienti:</span>
            <ul>
             <?php foreach ($food->ingredients as $ingredient) : ?>
              <li><?php echo $ingredient ?></li>
             <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>

      <?php endforeach; ?>
    </div>

    <!-- giochi -->
    <div class="row mb-3 justify-content-center">
      <h1 class="text-center text-uppercase m-3">giocattoli</h1>
     <?php foreach($toysList as $toy): ?>
      <div class="col-3 me-4">
        <div class="card mb-3" style="width: 18rem;">
          <div class="thumbnail">
           <img src="<?php echo $toy->getImage() ?>" class="card-img-top" alt="<?php echo $toy->name ?>">
          </div>  

          <div class="card-body">
            <h5 class="text-center text-uppercase"><?php echo $toy->category->name ?> <?php echo $toy->category->icon ?></h5>
            <span class="fw-bold"><?php echo $toy->name ?></span>
            <p><em><?php echo $toy->brand ?></em></p>
            <p class="fw-bold"><?php echo $toy->price?> &euro;</p>
            <span class="description">Descrizione prodotto:</span>
            <p><?php echo $toy->feature ?></p>
            <p>Colore: <?php echo $toy->color ?></p>
          </div>
        </div>
      </div>

      <?php endforeach; ?>
    </div>

    <!-- cucce -->
    <div class="row mb-3 justify-content-center">
      <h1 class="text-center text-uppercase m-3">cucce</h1>
     <?php foreach($bedsList as $bed): ?>
      <div class="col-3 me-4">
        <div class="card" style="width: 18rem;">
          <div class="thumbnail">
           <img src="<?php echo $bed->getImage() ?>" class="card-img-top" alt="<?php echo $bed->name ?>">
          </div>  

          <div class="card-body">
            <h5 class="text-center text-uppercase m-3"><?php echo $bed->category->name ?> <?php echo $bed->category->icon ?></h5>
            <span class="fw-bold"><?php echo $bed->name ?></span>
            <p><em><?php echo $bed->brand ?></em></p>
            
            <p class="fw-bold"><?php echo $bed->price?> &euro;</p>
            <span>Materiale: <?php echo $bed->material ?></span><br>
            <span>Grandezza: <?php echo $bed->size ?> cm</span><br>
            <span>Colore: <?php echo $bed->color ?></span>

          </div>
        </div>
      </div>

      <?php endforeach; ?>
    </div>
  </div>
  
</body>
</html>
<?php
$resultados ='';
$i = 0;

foreach ($items as $item) {
   $actives = '';

   if( $i == 0){
      $actives = 'active';
   }
   $i++;
   $resultados .= '<div class="carousel-item '.$actives.'">
                     
                       <img style="width:350px;height:300px" class="d-block w-100" src="'.$item->foto.'" alt="First slide">
                  
                     </div>
 ';
}


?>
<main>

<h2 class="mt-3">Galeria de Imagens</h2>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width:350px;height:350px">
  <div class="carousel-inner">
   <?=$resultados ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</main>
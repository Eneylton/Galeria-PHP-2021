<?php

$mensagem = '';
if(isset($_GET['status'])){
   switch ($_GET['status']) {
       case 'success':
            $mensagem = '<div class="alert alert-success"> Ação excutada com Sucesso !!! </div>';
           break;
       
       case 'error':
        $mensagem = '<div class="alert alert-success"> Ação não excutada !!! </div>';
           break;
   }
}

$resultados ='';

foreach ($produtos as $item ) {

      $resultados .= '<tr>
                      <td><img style="width:80px; heigth:70px" src="'.$item->foto.'" class="img-thumbnail"></td>
                      <td>'.$item->id.'</td>
                      <td>'.$item->nome.'</td>
                      <td>'.$item->qtd.'</td>
                      <td>'.$item->valor.'</td>
                      <td style="text-align:center;">

                      <a href="galeria-list.php?id='.$item->id.'">
                      <button type="button" class="btn btn-success"> Vizualizar</button>
                      </a>
                       
                      <a href="produto-galeria.php?id='.$item->id.'">
                         <button type="button" class="btn btn-warning"> Galeria</button>
                      </a>
                      
                       <a href="produto-edit.php?id='.$item->id.'">
                         <button type="button" class="btn btn-primary"> Editar</button>
                       </a>

                       <a href="produto-delete.php?id='.$item->id.'">
                       <button type="button" class="btn btn-danger"> Excluir</button>
                       </a>


                      </td>
                      </tr>

                      ';
    
}

$resultados = strlen($resultados) ? $resultados : '<tr>
                                                     <td colspan="6" class="text-center" > Nenhuma Vaga Encontrada !!!!! </td>
                                                     </tr>';


unset($_GET['pagina']);
$gets = http_build_query($_GET);

//PAGINAÇÂO

$paginacao = '';
$paginas = $pagination->getPages();

foreach ($paginas as $key => $pagina) {
   $class = $pagina['atual'] ? 'btn-primary' : 'btn-light';
   $paginacao .= '<a href="?pagina='.$pagina['pagina']. '&'.$gets.'">
                  </section>
                  <button type="button" class="btn '.$class.'">'.$pagina['pagina']. '</button>
                  </a>';
}

?>
<main>

<?=$mensagem?> 

<section>

 <a href="produto-insert.php">

 <button class="btn btn-success"> Novo Produto  <i class="fas fa-chevron-right"></i></button>

 </a>

</section>

<section>
   <form method="get">
          <div class="row my-4">
              <div class="col">

              <label >Buscar por Produto</label>
                  <input type="text" class="form-control" name="buscar" value="<?=$buscar?>">
              </div>

              

              <div class="col d-flex align-items-end" >
                <button type="submit" class="btn btn-primary" name="" > <i class="fas fa-search"></i> Pesquisar</button>
              </div>

             
             
          </div>

   </form>
</section>

<section>

<table class="table bg-light mt-4">
  <thead>
  <tr>
     <th> IMAGEM </th>
     <th> CÓDIGO </th>
     <th> NOME </th>
     <th> QTD </th>
     <th> VALOR </th>
     <th style="text-align:center;"> AÇÕES </th>
  </tr>
  </thead>

   <tbody>
   
   <?=$resultados?>

   </tbody>
</table>

</section>

<section>
<?=$paginacao?>
</section>
</main>
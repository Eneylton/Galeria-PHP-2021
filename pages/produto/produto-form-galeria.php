<main>

<section>

 <a href="produto-list.php">

 <button class="btn btn-success"> Voltar </button>

 </a>

</section>

<h2 class="mt-3"><?=TITLE?></h2>

<form method="post" enctype="multipart/form-data">
   
   <div class="form-group">
        <label >Imagens</label>
        <input type="file" name="arquivo[]" class="form-control" multiple>
          
   </div>


   <div class="form-group"> 

   <button type="submit" class="btn btn-danger">Enviar</button>
   
   </div>

</form>
</main>
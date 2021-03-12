<main>

<section>

 <a href="produto-list.php">

 <button class="btn btn-success"> Voltar </button>

 </a>

</section>

<h2 class="mt-3"><?=TITLE?></h2>

<form method="post">
   
   <div class="form-group">
        <label >Nome</label>
        <input type="text" class="form-control" name="nome" value="<?=$produtos->nome?>">
   </div>

   <div class="form-group">
        <label >Qtd</label>
        <input type="text" class="form-control" name="qtd" value="<?=$produtos->qtd?>">
       
   </div>

   <div class="form-group">
        <label >Valor</label>
        <input type="text" class="form-control" name="valor" value="<?=$produtos->valor?>">
       
   </div>

   <div class="form-group">
        <label >Foto</label>
        <input type="text" class="form-control" name="foto" value="<?=$produtos->foto?>">
       
   </div>

   <div class="form-group"> 

   <button type="submit" class="btn btn-danger">Editar</button>
   
   </div>

</form>
</main>
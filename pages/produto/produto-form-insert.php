<main>

<section>

 <a href="produto-list.php">

 <button class="btn btn-success"> Voltar </button>

 </a>

</section>

<h2 class="mt-3"><?=TITLE?></h2>

<form method="post" enctype="multipart/form-data">
   
   <div class="form-group">
        <label >Nome</label>
        <input type="file" name="arquivo" class="form-control">
          
   </div>


   <div class="form-group">
        <label >Nome</label>
        <input type="text" class="form-control" name="nome" required >
   </div>

   <div class="form-group">
        <label >Qtd</label>
        <input type="text" class="form-control" name="qtd" required >
   </div>

   <div class="form-group">
        <label >Valor</label>
        <input type="text" placeholder="Valor" id="password" class="form-control" name="valor" required>
   </div>



   <div class="form-group"> 

   <button type="submit" class="btn btn-danger">Enviar</button>
   
   </div>

</form>
</main>
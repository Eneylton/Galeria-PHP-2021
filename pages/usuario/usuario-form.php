<main>

<section>

 <a href="index.php">

 <button class="btn btn-success"> Voltar </button>

 </a>

</section>

<h2 class="mt-3"><?=TITLE?></h2>

<form method="post">
   
   <div class="form-group">
        <label >Nome</label>
        <input type="text" class="form-control" name="nome" required >
   </div>

   <div class="form-group">
        <label >Email</label>
        <input type="text" class="form-control" name="email" required >
   </div>

   <div class="form-group">
        <label >Senha</label>
        <input type="password" placeholder="Senha" id="password" class="form-control" name="senha" required>
   </div>

   <div class="form-group">
        <label >Confirma Senha</label>
        <input type="password" placeholder="Confirme Senha" id="confirm_password" class="form-control" required>
   </div>


   <div class="form-group"> 

   <button type="submit" class="btn btn-danger">Enviar</button>
   
   </div>

</form>
</main>
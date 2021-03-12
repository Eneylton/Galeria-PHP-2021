<?php 

function printr($data) {
    echo "<pre>";
       print_r($data);
    echo "</pre>";
 }



require __DIR__.'/vendor/autoload.php';

define('TITLE','Novo Produto');

use  \App\Entidy\Produto;
use   \App\Session\Login;
use    \App\File\Upload;

$usuariologado = Login:: getUsuarioLogado();

$usuario = $usuariologado['id'];

$usuario_id = $usuario;

Login::requireLogin();

if(isset($_FILES['arquivo'])){

    $obUpload = new Upload ($_FILES['arquivo']);
    $sucesso = $obUpload->upload(__DIR__.'/imgs',false);

    //$obUpload->setName('./imgs/img_user');

    $obUpload->gerarNovoNome();
     
    if($sucesso){

        echo 'Arquivo Enviado ' .$obUpload->getBasename(). "com Sucesso" ;

        if(isset($_POST['nome'], $_POST['qtd'], $_POST['valor'])){
            $item = new Produto;
            $item->nome = $_POST['nome'];
            $item->qtd = $_POST['qtd'];
            $item->valor = $_POST['valor'];
            $item->foto = $obUpload->getBasename();
            $item->usuario_id = $usuario_id;
            $item-> cadastar();
        
            header('location: produto-list.php?status=success');
        
            
        }

        
    }

    die('problemas');

}





include __DIR__.'/includes/header.php';
include __DIR__.'/pages/produto/produto-form-insert.php';
include __DIR__.'/includes/footer.php';
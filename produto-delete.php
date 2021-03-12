<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Entidy\Produto;
use   \App\Session\Login;


Login::requireLogin();



if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
 
    header('location: index.php?status=error');

    exit;
}

$produtos = Produto::getProdutoID($_GET['id']);

if(!$produtos instanceof Produto){
    header('location: index.php?status=error');

    exit;
}



if(isset($_POST['excluir'])){
    
 
    $produtos->excluir();

    header('location: produto-list.php?status=success');

    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/pages/produto/produto-form-delete.php';
include __DIR__.'/includes/footer.php';
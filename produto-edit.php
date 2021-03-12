<?php 

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Produtos');

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



if(isset($_POST['nome'], $_POST['qtd'])){
    
    $produtos->nome    = $_POST['nome'];
    $produtos->qtd     = $_POST['qtd'];
    $produtos->valor   = $_POST['valor'];
    $produtos->foto    = $_POST['foto'];
    $produtos-> atualizar();

    header('location: produto-list.php?status=success');

    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/pages/produto/produto-form-edit.php';
include __DIR__.'/includes/footer.php';
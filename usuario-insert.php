<?php 

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Usuário');

use \App\Entidy\Usuario;
use   \App\Session\Login;

$usuariologado = Login:: getUsuarioLogado();

$usuario = $usuariologado['nome'];

Login::requireLogin();

if(isset($_POST['nome'], $_POST['email'], $_POST['senha'])){
    $item = new Usuario;
    $item->nome = $_POST['nome'];
    $item->email = $_POST['email'];
    $item->senha = $_POST['senha'];
    $item-> cadastar();

    header('location: index.php?status=success');

    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/pages/usuario/usuario-form.php';
include __DIR__.'/includes/footer.php';
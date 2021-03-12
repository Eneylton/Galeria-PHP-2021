<?php 

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Produtos');

use   \App\Session\Login;
use    \App\Entidy\Produto;
use    \App\Entidy\Galeria;

Login::requireLogin();

$id = $_GET['id'];

$items = Galeria:: getBuscarID($id);

include __DIR__.'/includes/header.php';
include __DIR__.'/pages/galeria/galeria-form-list.php';
include __DIR__.'/includes/footer.php';
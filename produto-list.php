<?php 

require_once __DIR__ . '/vendor/autoload.php';

use \App\Entidy\Produto;
use  \App\Db\Pagination;
use   \App\Session\Login;

Login::requireLogin();

$buscar = filter_input(INPUT_GET, 'buscar', FILTER_SANITIZE_STRING);

$condicoes = [
    strlen($buscar) ? 'nome LIKE "%'.str_replace(' ','%',$buscar).'%"' : null
];

$condicoes = array_filter($condicoes);

$where = implode(' AND ', $condicoes);

$qtd = Produto:: getQtdProdutos($where);

$pagination = new Pagination($qtd, $_GET['pagina'] ?? 1, 5);

$produtos = Produto::getProdutos($where, null,$pagination->getLimit());


include __DIR__.'/includes/header.php';
include __DIR__.'/pages/produto/produto-form-lista.php';
include __DIR__.'/includes/footer.php';
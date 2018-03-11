<?php

//teste do uso da Classe sem o Construct
require '../app/models/Categoria.php';
require '../app/models/CategoriaCrud.php';
error_reporting(0);

$c1 = new Categoria();
$c1 ->setId(1);
$c1->setNome('Teste');
$c1->setDescricao('objeto teste 1');
var_dump($c1);

//Criando com o construct
$c2 = new Categoria(2, 'Eletrônicos', 'Produtos eletrônicos');
echo "<br>";
var_dump($c2);

//testando com o CategoriaCrud
$crud = new CategoriaCrud();
$categoria = $crud->getCategoria(1);
echo "<br>";
var_dump($categoria);

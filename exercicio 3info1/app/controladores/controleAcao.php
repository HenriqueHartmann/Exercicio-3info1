<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 13/03/18
 * Time: 16:44
 */

require_once '../models/CategoriaCrud.php';

    if (isset($_GET['acao'])){
        $acao = $_GET['acao'];
    }else{
        $acao = 'index';
    }


    if($acao == 'index'){
        $crud = new CategoriaCrud();

        $categorias = $crud->getCategorias();

        include '../views/listaCategorias.php';

    }elseif ($acao == 'lista1'){
        $crud = new CrudCategoria();
        $categoria = $crud->getCategoria($_GET['id']);


    }
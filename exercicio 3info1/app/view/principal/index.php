<?php
require_once '../../models/CategoriaCrud.php';
require_once '../../models/ProdutoCrud.php';
$crud = new CategoriaCrud();
$categorias = $crud->getCategorias();

$crud = new ProdutoCrud();
$produtos = $crud->getProdutos();
?>
<html>

    <head>

        <title></title>
        <link rel="stylesheet" href="../../../assets/css/abas.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    </head>
        <style>
            #abas{
                border-bottom: 2px dashed #25E8F8;
            }
        </style>
        <script>
            $(document).ready(function () {

                alert("jquery Funcionou");
                // $(".conteudo").hide();

                // $("#aba1").click(function () {
                //     $("#aba1").toggleClass("selecionado");
                //     // $("#aba2").removeClass("selecionado");
                //     // $("#aba3").removeClass("selecionado");
                //
                //     // $(".conteudo").hide();
                //     var meuId = $(this).attr("id");
                //     $("."+meuId).toggle();
                //
                // });
                //
                // $("#aba2").click(function () {
                //     $("#aba2").toggleClass("selecionado");
                //     // $("#aba1").removeClass("selecionado");
                //     // $("#aba3").removeClass("selecionado");
                //
                //     // $(".conteudo").hide();
                //     var meuId = $(this).attr("id");
                //     $("."+meuId).toggle();
                //
                // });
                //
                // $("#aba3").click(function () {
                //     $("#aba3").toggleClass("selecionado");
                //     // $("#aba2").removeClass("selecionado");
                //     // $("#aba1").removeClass("selecionado");
                //
                //     // $(".conteudo").hide();
                //     var meuId = $(this).attr("id");
                //     $("."+meuId).toggle();
                //
                // });

                $("#abas ul li").click(function () {
                   $(this).toggleClass("selecionado");
                   var meuId = $(this).attr("id");
                   $("."+meuId).toggle();
                });

            });
        </script>
    <body>

    <div id="abas">
        <br>
        <ul>
<!--            <li id="aba1" class="selecionado">aba 1</li>-->
<!--            <li id="aba2" class="selecionado">aba 2</li>-->
<!--            <li id="aba3" class="selecionado">aba 3</li>-->
            <?php foreach ($categorias as $categoria): ?>
                <li id="aba<?= $categoria->getId(); ?>" class="selecionado">
                    <?=$categoria->getNome()?>
                </li>
            <?php endforeach ?>
        </ul>

    </div>
    <br>
    <div id="conteudos">

<!--        <div class="conteudo aba1">-->
<!--            conteudo da aba 1-->
<!--        </div>-->
<!---->
<!--        <div class="conteudo aba2">-->
<!--            conteudo da aba 2-->
<!--        </div>-->
<!---->
<!--        <div class="conteudo aba3">-->
<!--            conteudo da aba 3-->
<!--        </div>-->

        <?php foreach ($produtos as $produto): ?>
            <div class="conteudo aba<?= $produto->getIdCategoria(); ?>">
                <table>
                <tr>
                    <td><?=$produto->getNome();?></td>
                    <td><?=$produto->getDescricao();?></td>
                    <td><?=$produto->getPreco(); ?></td>
                </tr>
                </table>
            </div>
        <?php endforeach ?>

    </div>

    </body>


</html>
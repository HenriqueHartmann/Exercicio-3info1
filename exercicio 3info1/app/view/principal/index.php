<thml>

    <head>

        <title></title>
        <link rel="stylesheet" href="../../../assets/css/abas.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    </head>
        <script>
            $(document).ready(function () {

                alert("jquery Funcionou");

                $(".conteudo").hide();

                $("#aba1").click(function () {
                    $("#aba1").toggleClass("selecionado");
                    $("#aba2").removeClass("selecionado");
                    $("#aba3").removeClass("selecionado");

                    $(".conteudo").hide();
                    var meuId = $(this).attr("id");
                    $("."+meuId).show();

                });

                $("#aba2").click(function () {
                    $("#aba2").toggleClass("selecionado");
                    $("#aba1").removeClass("selecionado");
                    $("#aba3").removeClass("selecionado");

                    $(".conteudo").hide();
                    var meuId = $(this).attr("id");
                    $("."+meuId).show();

                });

                $("#aba3").click(function () {
                    $("#aba3").toggleClass("selecionado");
                    $("#aba2").removeClass("selecionado");
                    $("#aba1").removeClass("selecionado");

                    $(".conteudo").hide();
                    var meuId = $(this).attr("id");
                    $("."+meuId).show();
                });

            });
        </script>
    <body>

    <div id="abas">
        <br>
        <ul>
            <li id="aba1" class="">aba 1</li>
            <li id="aba2" class="">aba 2</li>
            <li id="aba3" class="">aba 3</li>
        </ul>

    </div>
    <br>
    <div id="conteudos">

        <div class="conteudo aba1">
            cpnteudo da aba 1
        </div>

        <div class="conteudo aba2">
            cpnteudo da aba 2
        </div>

        <div class="conteudo aba3">
            cpnteudo da aba 3
        </div>


    </div>

    </body>


</thml>
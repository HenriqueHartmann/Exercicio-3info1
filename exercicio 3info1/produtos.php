<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Produtos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial scale=1">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/exe.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/js/bootstrap.min.js">
</head>
<body>	
	<div class="container-fluid">
		<div id="cont" class="navbar-header">	
			<ul class="nav nav-tabs">
				<li class="col-md-1"><img alt="Brand" src="assets/images/logo3.png" width="65"></li>
                <?php
                if (isset($_SESSION['user'])) {
                    require_once "include/adminM.php";
                }
                ?>
				<a class="col-md-1 link" id="spot" href="index.php"><li>Home</li></a>
				<?php
					if (isset($_SESSION['user'])) {
						require_once "include/perfilM.php";
					}
				?>
				<a class="col-md-1 link" id="spot" href="produtos.php?acao=Móveis"><li>Móveis</li></a>
				<a class="col-md-1 link" id="spot" href="produtos.php?acao=Eletro"><li>Eletro</li></a>
				<a class="col-md-1 link" id="spot" href="produtos.php?acao=Roupas"><li>Roupas</li></a>
				<a class="col-md-1 link" id="spot" href="produtos.php?acao=Outros"><li>Outros</li></a>
				<li class="col-md-4">
					<form id="spot" method="post" action="produtos.php">
						<input class="danger" type="search" name="busca">
						<input class="btn-danger" type="submit" name="butao" value="Buscar">
					</form>
				</li>
			</ul>
		</div>			
<br>
<br>
<?php	
	$escolhido = 0;
	$busca = 0;

	if (isset($_GET['acao']) and $escolhido = $_GET['acao']) {
		echo "<h1 id='mess'>$escolhido</h1>";
	}elseif (isset($_POST['busca']) and $buscar = $_POST['busca']) {
		echo "<h1 id='mess'>O termo $buscar não foi encontrado</h1>";
	}

	if (!isset($_SESSION['user'])) {
		require_once "include/login.php";

	}elseif (isset($_SESSION['user'])) {
			$user = $_SESSION['user'];
			echo "olá $user";
			require_once "include/logout.php";

	}
?>
	</div>
</body>
</html>

	
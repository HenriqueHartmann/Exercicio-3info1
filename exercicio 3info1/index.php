<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title>Página Inicial</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial scale=1">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/exe.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/js/bootstrap.min.js">
</head>
<body>	
	<div class="container-fluid">
		<div class="row menu">	
			<ul class="nav nav-tabs container-fluid">
				<li class="col-md-2 col-lg-2"><img alt="Brand" src="assets/images/logo3.png" width="65"></li>

                <?php
                    if (isset($_SESSION['user'])) {
                        require_once "include/adminM.php";
                    }else{
                        require_once "include/brancoM.php";
                }

                ?>
				<?php
					if (isset($_SESSION['user'])) {
						require_once "include/perfilM.php";
					}else{
					    require_once "include/brancoM.php";
                    }
				?>

				<a class="col-md-1 col-lg-1 link" id="spot" href="produtos.php?acao=Móveis"><li>Móveis</li></a>
				<a class="col-md-1 col-lg-1 link" id="spot" href="produtos.php?acao=Eletro"><li>Eletro</li></a>
				<a class="col-md-1 col-lg-1 link" id="spot" href="produtos.php?acao=Roupas"><li>Roupas</li></a>
				<a class="col-md-1 col-lg-1 link" id="spot" href="produtos.php?acao=Outros"><li>Outros</li></a>
				<li class="col-md-4 col-lg-4">
					<form id="spot" method="post" action="produtos.php">
						<input class="danger" type="search" name="busca">
						<input class="btn-danger" type="submit" name="butao" value="Buscar">
					</form>
				</li>
			</ul>
		</div>		
<br>
<br>
<!--PHP	 //////////////////////////////////////	-->
		<?php
		if (!isset($_SESSION['user'])) {
			require_once "include/login.php";

		}elseif (isset($_SESSION['user'])) {
			$user = $_SESSION['user'];
			echo "<h1>Olá $user ";
			require_once "include/logout.php";

			}
		?>
<!--PHP	 //////////////////////////////////////	-->		
	</div>	
</body>
</html>
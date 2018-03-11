<?php


	$login = $_POST['nome'];
	$senha = $_POST['senha'];


	if ($login == 'admin' and $senha == '12345') {
		session_start();
		$_SESSION['user'] = 'admin';
		$_SESSION['senha'] = '12345';
		
		
		header('location:../index.php');
	}else{
		header('location:../index.php');
	}

<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: login.php');
	exit();
}

//$_SESSION é um array que armazena as informações da sessão. session_start() permite o acesso ao seu conteúdo
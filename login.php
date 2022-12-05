<?php
session_start();
//include na conexão para pegar a instancia que foi criada em conexao.php
include('conexao.php');
//verificação se algo foi digitado e se não volta para index.php
if(empty($_POST['usuario'])||(empty($_POST['senha']))){
    header('Location: login.php');
    exit();
}
//criação de 2 variaveis e utilização de uma função e passa por paramento a conexao e os campos que serao recebidos pelo usuarios
$usuario= mysqli_escape_string($conexao, $_POST['usuario']);
$senha= mysqli_escape_string($conexao,$_POST['senha']);
// realiza o select na tabela e verifica se oque foi digitado no login corresponde ao que foi digitado na tabela
$query = "SELECT usuario_id, usuario FROM usuario WHERE usuario = '{$usuario}' and senha = md5 ('{$senha}')";
//execuçao da query
$result = mysqli_query($conexao, $query);
//quantidade de linhas que a query retornou
$row= mysqli_nun_rows($result);

if($row==1){
    $_SESSION['usuario'] = $usuario;
    header('location: painel.php');
    exit();
}else{
    header('location: login.php');
    exit();
}

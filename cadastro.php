<?php

$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysqli_connect('127.0.0.1','root','jujubalinha','usuario',3308);
$query = "SELECT usuario_id, usuario FROM usuario WHERE usuario = '{$usuario}' and senha = md5 ('{$senha}')";
$select = mysqli_query($query_select,$connect);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    TelaCadastro.html';</script>";

    }else{
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        TelaCadastro.html';</script>";
        die();

      }else{
        $query_select = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $insert = mysqli_query($query_selec,$connect);

        if($insert){
            echo"<script language='javascript' type='text/javascript'>
            alert('Usuário cadastrado com sucesso!');window.location.
            href='login.html'</script>";
          }else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Não foi possível cadastrar esse usuário');window.location
            .href='TelaCadastro.html'</script>";
          }
        }
      }
  ?>
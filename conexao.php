<?php
define('host', '127.0.0.1');
define('usuario', 'root');
define('senha', 'jujubalinha');
define('db', 'TabelaUsuarios');

$conexao= mysqli_connect('127.0.0.1','root','jujubalinha','usuarios') or die ('não foi possivel conectar');
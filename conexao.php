<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "empresa";

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
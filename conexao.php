<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "empresa";

// A partir do PHP 8.1 o mysqli lança exceções (mysqli_sql_exception) por padrão.
// Desativando esse modo, mysqli_connect retorna false em caso de falha e o
// $conexao pode ser tratado normalmente pelo if abaixo (sem erro fatal).
mysqli_report(MYSQLI_REPORT_OFF);

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Garante o charset correto (acentuação) na comunicação com o banco.
mysqli_set_charset($conexao, "utf8mb4");

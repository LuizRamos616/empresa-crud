<?php

$servidor="localhost";
$usuario="root";
$senha="";
$bd="empresa";

$result-mysqli_connect($servidor,$usuario,$senha,$bd);

if ($result) {
    echo "conexão realizada com sucesso";
} else {
    echo mysqli_error($result);
}
?>
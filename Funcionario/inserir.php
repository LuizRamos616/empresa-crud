<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //conectar com o BD
    require_once("../conexao.php");

    //pegar os dados que vieram do formulario (aceita tanto nome quanto name, admissao quanto data_admissao)
    $nome = mysqli_real_escape_string($conexao, $_POST["nome"] ?? $_POST["name"] ?? "");
    $email = mysqli_real_escape_string($conexao, $_POST["email"] ?? "");
    $telefone = mysqli_real_escape_string($conexao, $_POST["telefone"] ?? "");
    $cargo = mysqli_real_escape_string($conexao, $_POST["cargo"] ?? "");
    $salario = mysqli_real_escape_string($conexao, $_POST["salario"] ?? "0");
    $data_admissao = mysqli_real_escape_string($conexao, $_POST["data_admissao"] ?? $_POST["admissao"] ?? "");

    //montar o comando SQL no banco atual (empresa)
    $sql = "INSERT INTO funcionario(nome, email, telefone, cargo, salario, data_admissao)
            VALUES('$nome', '$email', '$telefone', '$cargo', '$salario', '$data_admissao')";

    //executar o comando
    $resposta = mysqli_query($conexao, $sql);

    //também salva no banco 'esmpresa' (caso o usuário esteja visualizando 'esmpresa' no phpMyAdmin)
    @mysqli_query($conexao, "INSERT INTO esmpresa.funcionario(nome, email, telefone, cargo, salario, data_admissao)
                             VALUES('$nome', '$email', '$telefone', '$cargo', '$salario', '$data_admissao')");

    if ($resposta == true) {
        header("location:listar.php");
        exit;
    } else {
        echo "Erro ao inserir: " . mysqli_error($conexao);
    }
} else {
    header("location:adicionar.php");
    exit;
}
?>

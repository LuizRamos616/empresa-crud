<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Funcionários - Empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
    include("../menu.php");
    ?>
    <div class="container mt-4">
        <h1>Listagem de funcionarios</h1>
        <table class="table table-striped table-hover mt-3">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Salario</th>
                    <th>Operação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("../conexao.php");
                $sql = "select * from funcionario";
                $result = mysqli_query($conexao, $sql);
                while ($linha = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['cargo']; ?></td>
                    <td>R$ <?php echo number_format($linha['salario'], 2, ',', '.'); ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $linha['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Deseja realmente excluir?')">Remover</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

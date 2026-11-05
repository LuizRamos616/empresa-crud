<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionário - Empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
           include_once("../menu.php");
           //obter o ID
          $id = $_GET['id']; //pega o dado vindo da URL
           //executar o SELECT
          $sql = "Select * from funcionario where id=$id";
          require_once("../conexao.php"); // carrega a conexao
          $result = mysqli_query($conexao,$sql); // executa o SQL
          $funcionario = mysqli_fetch_assoc($result); //associa o resultado a variavel
           //Jogar os dados em variaveis
           
     ?>
    <div class="container mt-4">
        <h1>Edição de Funcionário</h1>
        <hr>
        <form action="atualizar.php" method="POST">
            <div class="mb-3">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required value = "<?php echo  $funcionario['nome']?>">
            </div>
            <div class="mb-3">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required value = "<?php echo  $funcionario['email']?>">
            </div>
            <div class="mb-3">
                <label for="cargo">Cargo:</label>
                <input type="text" class="form-control" id="cargo" name="cargo" required value = "<?php echo  $funcionario['cargo']?>">
            </div>
            <div class="mb-3">
                <label for="salario">Salário (R$):</label>
                <input type="number" class="form-control" id="salario" name="salario" step="0.01" required value = "<?php echo  $funcionario['salario']?>">
            </div>
            <div class="mb-3">
                <label for="data_admissao">Data de Admissão:</label>
                <input type="date" class="form-control" id="data_admissao" name="data_admissao" required value = "<?php echo  $funcionario['data_admissao']?>">
            </div>
            <p>
                <label for="ativo">Ativo:</label>
                <input type="checkbox" name="ativo" <?php if ($funcionario['ativo']==1){echo "checked";} ?>>
            </p>
            <p>
                <input type="hidden" name="id" value<?php echo $id ?>> 
            </p>
            <p>
                <input type="submit" class="btn btn-primary" value="Atualizar">
                <a href="listar.php" class="btn btn-outline-dark">Ver Lista</a>
            </p>
            
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionário - Empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php include_once("../menu.php"); ?>
    <div class="container mt-4">
        <h1>Cadastro de Funcionário</h1>
        <hr>
        <form action="inserir.php" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo:</label>
                <input type="text" class="form-control" id="cargo" name="cargo" required>
            </div>
            <div class="mb-3">
                <label for="salario" class="form-label">Salário (R$):</label>
                <input type="number" class="form-control" id="salario" name="salario" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="data_admissao" class="form-label">Data de Admissão:</label>
                <input type="date" class="form-control" id="data_admissao" name="data_admissao" required>
            </div>
            <p>
                <input type="submit" class="btn btn-primary" value="Cadastrar">
                <input type="reset" class="btn btn-secondary" value="Limpar">
                <a href="listar.php" class="btn btn-outline-dark">Ver Lista</a>
            </p>
        </form>
    </div>
</body>
</html>

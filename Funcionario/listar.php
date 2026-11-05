<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Funcionários - Empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php include("../menu.php"); ?>

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Lista de Funcionários</h2>
            <a href="adicionar.php" class="btn btn-success">+ Adicionar Novo</a>
        </div>
        <hr>

        <?php
        require_once("../conexao.php");
        $sql = "SELECT * FROM funcionario ORDER BY id DESC";
        $resultado = mysqli_query($conexao, $sql);
        ?>

        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Cargo</th>
                        <th>Salário</th>
                        <th>Data Admissão</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($resultado && mysqli_num_rows($resultado) > 0): ?>
                        <?php while ($linha = mysqli_fetch_assoc($resultado)): ?>
                            <tr>
                                <td><?= htmlspecialchars($linha['id']) ?></td>
                                <td><?= htmlspecialchars($linha['nome']) ?></td>
                                <td><?= htmlspecialchars($linha['email']) ?></td>
                                <td><?= htmlspecialchars($linha['telefone'] ?? '-') ?></td>
                                <td><?= htmlspecialchars($linha['cargo']) ?></td>
                                <td>R$ <?= number_format($linha['salario'], 2, ',', '.') ?></td>
                                <td><?= date('d/m/Y', strtotime($linha['data_admissao'])) ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center">Nenhum funcionário cadastrado.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>


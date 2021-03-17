<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap5/css/bootstrap.min.css">

    <title>Alteração de Cadastro</title>
</head>

<body>

    <?php
    include "conexao.php";

    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

    $dados = mysqli_query($coon, $sql);
    $linha = mysqli_fetch_assoc($dados);

    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Editar Cadastro</h1>
                <form action="edit_script.php" method="POST">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" placeholder="Digite seu Nome" required value="<?= $linha['nome'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" name="endereco" placeholder="Digite seu Endereço" value="<?= $linha['endereco'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="telefone" placeholder="Digite seu Telefone" value="<?= $linha['telefone'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Digite seu Email" value="<?= $linha['email'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento" placeholder="Digite seu Endereço" value="<?= $linha['data_nascimento'] ?>">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success" value="Salvar Alterações">
                        <input type="hidden" name="id" value="<?= $linha['cod_pessoa']?>">
                    </div>
                </form>
                <a href="pesquisa.php" class="btn btn-dark">Voltar</a>
            </div>
        </div>
    </div>

</body>
<foot>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="/bootstrap5/js/bootstrap.min.js">

    </script>
</foot>

</html>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap5/css/bootstrap.min.css">
    <title>Alteração de Cadastro</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            include "conexao.php";

            $id = $_POST['id'];
            $nome = $_POST["nome"];

            $sql = "DELETE FROM pessoas WHERE cod_pessoa = $id";

            if (mysqli_query($coon, $sql)) {
                mensagem("$nome excluído com sucesso!", 'success');
            } else {
                mensagem("$nome NÃO excluído!", 'danger');
            }
            ?>
            <a href="pesquisa.php" class="btn btn-primary ">Voltar</a>
        </div>
    </div>

</body>
<foot>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="/bootstrap5/js/bootstrap.min.js">

    </script>
</foot>
</html>
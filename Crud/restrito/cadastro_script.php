<!doctype html>
<html lang="pt-BR">

<style>
    .mostra_foto {
        width: 70px;
    }
</style>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap5/css/bootstrap.min.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            include "conexao.php";

            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $telefone = $_POST["telefone"];
            $email = $_POST["email"];
            $data_nasc = $_POST["data_nascimento"];

            $foto = $_FILES['foto'];
            $nome_foto = mover_foto($foto);

            $sql = "INSERT INTO pessoas (nome, endereco, telefone, email, data_nascimento, foto) VALUES ('$nome', '$endereco', '$telefone', '$email', '$data_nasc', '$nome_foto')";

            if (mysqli_query($coon, $sql)) {
                if ($nome_foto != null) {
                    echo "<img src='img/$nome_foto' title='$nome_foto' class='mostra_foto'>";
                }
                mensagem("$nome cadastrado com sucesso!", 'success');
            } else {
                mensagem("$nome NÃO cadastrado!", 'danger');
            }
            ?>
            <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>

</body>
<foot>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="/bootstrap5/js/bootstrap.min.js">

    </script>
</foot>

</html>
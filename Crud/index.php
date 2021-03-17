<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap5/css/bootstrap.min.css">

    <title>Empresa</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="jumbotron">
                    <h1 class="display-4">Tela Login</h1>
                    <form action="index.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" class="form-control" name="login" aria-describedby="emailHelp">
                            <div class="form-text">Entre com seus dados de acesso.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="senha">
                        </div>
                        <button type="submit" class="btn btn-primary">Acessar</button>
                    </form>
                    <?php
                    if (isset($_POST['login'])) {
                        $login = $_POST['login'];
                        $senha = md5($_POST['senha']);

                        include "restrito/conexao.php";
                        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";

                        if ($result = mysqli_query($coon, $sql)) {
                            if ($num_registro = mysqli_num_rows($result)) {
                                $linha = mysqli_fetch_assoc($result);
                                if (($login == $linha['login']) && ($senha == $linha['senha'])) {
                                    session_start();
                                    $_SESSION['login'] = "Andre";
                                    header('location: restrito');
                                } else {
                                    echo "Login Inválido!";
                                }
                            } else {
                                echo "Login ou senha não encontrados ou inválido.";
                            }
                        } else {
                            echo "Nenhum resultado do Banco";
                        }
                    }

                    ?>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>



</body>
<foot>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="/bootstrap5/js/bootstrap.min.js">

    </script>
</foot>

</html>
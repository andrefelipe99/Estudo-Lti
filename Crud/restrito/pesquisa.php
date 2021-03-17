<?php include "../validar.php" ?>
<!doctype html>
<html lang="pt-BR">

<style>
    .lista_foto {
        width: 70px;
        border-radius: 70px;
    }
</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap5/css/bootstrap.min.css">

    <title>Pesquisar</title>
</head>

<body>
    <?php
    if (isset($_POST['busca'])) {
        $pesquisa = $_POST['busca'];
    } else {
        $pesquisa = '';
    }

    include "conexao.php";

    $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

    $dados = mysqli_query($coon, $sql);
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pesquisar</h1>
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <form class="d-flex" action="pesquisa.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Pesquise aqui" aria-label="Search" name="busca" autofocus>
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Foto</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">Funções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (mysqli_fetch_all($dados, MYSQLI_ASSOC) as $value) : ?>
                            <tr>
                                <?php 
                                    $foto = $value['foto'];
                                    if(!$foto == null){
                                        $print_foto = "<img src='img/$foto' class='lista_foto'";
                                    } else{
                                        $print_foto = '';
                                    }
                                ?>

                                <th><?=$print_foto?></th>
                                <th scope="row"><?= $value['nome'] ?> </th>
                                <td><?= $value['endereco'] ?></td>
                                <td><?= $value['telefone'] ?></td>
                                <td><?= $value['email'] ?></td>
                                <?php
                                $cod_pessoa = $value['cod_pessoa'];
                                $data = DateTime::createFromFormat('Y-m-d', $value['data_nascimento']);
                                ?>
                                <td><?= $data->format('d-m-Y') ?></td>
                                <td width=150px>
                                    <a href="cadastro_edit.php?id=<?= $cod_pessoa ?>" class='btn btn-info btn-sm'>Editar</a>
                                    <a href="#" class='btn btn-danger btn-sm' data-bs-toggle="modal" data-bs-target="#modal_confirm" onclick="get_data(<?= $cod_pessoa ?>, '<?= $value['nome'] ?>' )">Excluir</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <a href="index.php" class="btn btn-dark">Voltar para o início</a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal_confirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmação de Exclusão</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="excluir_script.php" method="POST">
                        <p>Deseja realmente excluir <b id="nome_pessoa">Nome da pessoa</b>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <input type="hidden" name="nome" id="nome_pessoa_1" value="">
                    <input type="hidden" name="id" id="cod_pessoa" value="">
                    <input type="submit" class="btn btn-danger" value="Excluir">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function get_data(id, nome) {
            document.getElementById('nome_pessoa').innerHTML = nome;
            document.getElementById('nome_pessoa_1').value = nome;
            document.getElementById('cod_pessoa').value = id;
        }
    </script>
</body>
<foot>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="/bootstrap5/js/bootstrap.min.js">

    </script>
</foot>

</html>
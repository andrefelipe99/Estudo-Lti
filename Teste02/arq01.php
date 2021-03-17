<!DOCTYPE html>
<?php session_start(); ?>
<html lang="pt-BR">

<head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="arq01.css">
    <link rel="stylesheet" href="/bootstrap5/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
</head>

<body>
    <h1>Gerenciador de Tarefas</h1>
    <form>
        <fieldset>
            <legend>Nova Tarefa </legend>
            <label>
                Tarefa:
                <input type="text" name="nome" />
            </label>
            <input type="submit" value="Cadastrar">
        </fieldset> <br>
    </form>

    <?php

    if (isset($_GET['nome'])) {
        $_SESSION['lista_tarefas'][] = $_GET['nome'];
    }

    $lista_tarefas = array();

    if (isset($_SESSION['lista_tarefas'])) {
        $lista_tarefas = $_SESSION['lista_tarefas'];
    }

    ?>

    <table>
        <tr>
            <th>Tarefas</th>
        </tr>

        <?php foreach ($lista_tarefas as $tarefas) : ?>
            <tr>
                <td><?php echo $tarefas; ?> </td>
            </tr>
        <?php endforeach; ?>
        <button type="button" class="btn btn-success">Success</button>
    </table>
</body>
<foot>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="/bootstrap5/js/bootstrap.min.js">

    </script>
</foot>

</html>
<!DOCTYPE html>
<?php session_start();?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
</head>
<body>
    <h1>Cadastro de Pessoas</h1>
    <form action="">
        <fieldset>
            <legend>Nova Pessoa</legend>
            <label>
                Nome:
                <input type="text" name="nome"/><br><br>
            </label>
            <label>
                Telefone:
                <input type="text" name="telefone"/><br><br>
            </label>
            <label>
                Email:
                <input type="text" name="email"/><br><br>
            </label>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>

    <?php 
        
        
        if(isset($_GET['nome']) && $_GET['nome'] != ''){
            $individuo = array();

            $individuo['nome'] = $_GET['nome'];

            if(isset($_GET['telefone'])){
                $individuo['telefone'] = $_GET['telefone'];
            } else{
                $individuo['telefone'] = '';
            }

            if(isset($_GET['email'])){
                $individuo['email'] = $_GET['email'];
            } else{
                $individuo['email'] = '';
            }

            $_SESSION['lista_individuos'][] = $individuo;
        }

        
        
     ?>

    <table>
        <tr>
            <th>Pessoa</th>
            <th>Telefone</th>
            <th>Email</th>
        </tr>

        <?php foreach ($_SESSION['lista_individuos'] as $individuo): ?>
            <tr>
               <td><?php echo $individuo['nome']; ?> </td>
               <td><?php echo $individuo['telefone']; ?> </td>
               <td><?php echo $individuo['email']; ?> </td>
            </tr>
            <?php endforeach;?>
    </table>

</body>
</html>
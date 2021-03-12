<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulario Ex01</title>
</head>
<body>
    <?php
        $nome = $snome = $sexo = $email = $telefone = $cidade = $estado = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = test_input($_POST["nome"]);
            $snome = test_input($_POST["snome"]);
            $sexo = test_input($_POST["sexo"]);
            $email = test_input($_POST["email"]);
            $telefone = test_input($_POST["telefone"]);
            $cidade = test_input($_POST["cidade"]);
            $estado = test_input($_POST["estado"]);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        echo "<h2> Your Input: </h2>";
        echo "$nome <br>";
        echo "$snome <br>";
        echo "$sexo <br>";
        echo "$email <br>";
        echo "$telefone <br>";
        echo "$cidade <br>";
        echo "$estado <br>";

    ?>
</body>
</html>
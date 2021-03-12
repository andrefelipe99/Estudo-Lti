<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
    <title> Curso em Video</title>
</head>
<body>
<div>
    <?php
        $nome = $_GET["nome"];
        $sexo = $_GET["sexo"];
        $ano = $_GET["ano"];
        $idade = date("Y") - $ano;
        echo "$nome é $sexo tem $idade anos.";
    ?>
    <a href="CursoemVideo.php"> Voltar</a>
</div>
</body>
</html>
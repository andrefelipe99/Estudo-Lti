<!DOCTYPE HTML>
<html>
<head>
    <?php
        $txt = isset($_GET["t"])?$_GET["t"]:"Texto Generico";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <meta charset="UTF-8"/>
    <title> Exercicio Cores</title>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
<div>
    <?php
        echo "<span class= 'texto'>$txt</span>";
    ?>
    <a href="CursoemVideo.php"> Voltar</a>
</div>
</body>
</html>
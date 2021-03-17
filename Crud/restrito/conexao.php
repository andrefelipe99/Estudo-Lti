<?php
$server = "localhost";
$user = "debian-sys-maint";
$password = "mzLeWaBSpDDxUZ0M";
$dbname = "empresa";

$coon = mysqli_connect($server, $user, $password, $dbname);
if ($coon) {
    //echo "Conectado";
} else {
    die("Connection failed: " . mysqli_connect_error());
}

function mensagem($texto, $tipo)
{
    echo "<div class= 'alert alert-$tipo' role='alert'>
        $texto
        </div>";
}

function mover_foto($vetor_foto)
{
    $vtipo = explode("/", $vetor_foto['type']);
    $tipo = $vtipo[0] ?? '';
    $extensao = "." .$vtipo[1] ?? '';
    if ((!$vetor_foto['error']) && ($tipo == "image")) {
        $nome_arquivo = date('Ymdhms') . $extensao;
        move_uploaded_file($vetor_foto['tmp_name'], "img/" . $nome_arquivo);
        return $nome_arquivo;
    } else {
        return null;
    }
}

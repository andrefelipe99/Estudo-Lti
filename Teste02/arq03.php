<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe caneta</title>
</head>
<body>
    <pre>
    <?php
        require_once 'ContaBanco.php';

        $pessoa1 = new ContaBanco();
        $pessoa2 = new ContaBanco();

        $pessoa1->abrirConta("CC");
        $pessoa1->setDono("Jubileu");
        $pessoa1->setNumConta(1111);
        $pessoa2->abrirConta("CP");
        $pessoa2->setDono("Maria");
        $pessoa2->setNumConta(2222);

        $pessoa1->depositar(400);
        $pessoa2->depositar(250);
        $pessoa2->sacar(100);
        $pessoa1->sacar(450);

        $pessoa1->fecharConta();
        print_r($pessoa1);
        print_r($pessoa2);
    ?>
    </pre>
</body>
</html>
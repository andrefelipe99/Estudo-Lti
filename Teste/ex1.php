<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="ex01.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste HTML</title>
</head>
<body>
    <h1>Formulário Teste </h1>
    <form action="ex01.php" method="post">
        <fieldset>
            <fieldset class="grupo">
                <div class="campo">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" style="width: 20em" value="">
            </div>
                <div class="campo">
                <label for="snome">Sobrenome</label>
                <input type="text" name="snome" id="snome" style="width: 20em" value=""> 
            </div>
        </fieldset>
        <div class="campo">
            <label>Sexo</label>
            <label class="checkbox">
                <input type="radio" name="sexo" value="masculino"> Masculino
            </label>
            <label class="checkbox">
                <input type="radio" name="sexo" value="feminino"> Feminino
            </label>
        </div>
        <div class="campo">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" style="width: 20em" value="">
        </div>
        <div class="campo">
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" style="width: 10em" value="">
        </div>
        <fieldset class="grupo">
            <div class="campo">
                <label for="cidade">Cidade</label>
                <input type="text" id="cidade" name="cidade" style="width: 10em" value="">
            </div>
            <div class="campo">
                <label for="estado">Estado</label>
                <select name="estado" id="estado">
                    <option value="">--</option>
                    <option value="PE">PE</option>
                </select>
            </div>
        </fieldset>
        <div class="campo">
            <label for="mensagem">Mensagem</label>
            <textarea rows="6" style="width: 20em" id="mensagem" name="mensagem"></textarea>
        </div>
        <div class="campo">
            <label>Newsletter</label>
            <label>
                <input type="checkbox" name="newsletter" value="1"> Gostaria de receber a Newsletter da empresa
            </label>
        </div>
        
        <button class="botao submit" type="submit" name="submit">Enviar</button>
        </fieldset>
    </form>
</body>
</html>
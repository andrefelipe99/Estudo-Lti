<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
    <title> Curso em Video</title>
</head>
<body>
<div>
    <form method="get" action="01valor.php">
        Nome: <input type="text" name="nome"/><br>
        Ano de Nascimento: <input type="number" name="ano"><br/>
        <fieldset><legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" value="homem"/>
            <label for="masc"> Masculino </label><br/>
            <input type="radio" name="sexo" id="fem" value="mulher"/>
            <label for="fem">Feminino</label>
        </fieldset><br>
        <input type="submit" value="Enviar"/>
    </form>
</div>
</body>
</html>
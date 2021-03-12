<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8"/>
    <style>
        form{
            font: 12pt Arial;
            color: #e70808;
            font-weight: bold;
        }
    </style>
</head>
<body>

<form action="Teste.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    Website: <input type="text" name="website"><br>
    Comment: <textarea type="comment" rows="5" clos="40"></textarea><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <input type="submit"><br><br>

</form>

    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>
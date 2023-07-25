<?php

if(isset($_POST["submit"])){
    $name = ["David", "Marek", "Jana"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    echo "Ahoj " . $username;
    echo "<br>";
    echo "Tvé heslo je: " . $password;
    echo "<br>";

    if(in_array($username,$name)){
        echo "Jsi úspěšně přihlášený/á";
    } else {
        echo "Zadejte správné jméno";
    };
};


?>



<!DOCTYPE html>
<html lang="cs">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="styly.css">
    </head>

    <body>
        
        <form action="formular.php" method="post">
            <input type="text" name="username" placeholder="Uživatelské jméno"><br>
            <input type="password" name="password" placeholder="Heslo"><br>
            <input type="submit" name="submit" value="Odeslat"><br>
        </form>

    </body>
</html>
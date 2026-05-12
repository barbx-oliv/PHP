<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula10</title>
</head>
<body>
    <?php 
        session_start();

        $_SESSION["usuario"] = "Jorge";

        echo "Usuário armazenado na sessão <br><pre>";

        var_dump($_SESSION); // Descarrega a variável

        echo "</pre>";
    ?>
</body>
</html>
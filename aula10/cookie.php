<!DOCTYPE html>
<html lang="pr-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        setcookie("empresa", "Cookies para o chrome", time() + 3600);
        echo "Cookie criado<br>";

        var_dump($_COOKIE);
    ?>
</body>
</html>
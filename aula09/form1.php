<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 1</title>
</head>
<body>
    <form method="GET">
        <label name="nome">Nome: </label>
        <input type="text" name="nome" placeholder="Digite seu nome aqui">
        <input type="submit" value="Enviar">
    </form>
    
    <?php 
        $nome = $_GET["nome"]; // tem um _ pq é uma super global
        echo "<br> Nome informado: $nome <br>";
        var_dump($_GET);
    ?>
</body>
</html>
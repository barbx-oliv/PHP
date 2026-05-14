<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
</head>
<body>
    <form method="POST">
        <labe>Salário R$: </label>
        <input type="number" name="sal" id="sal" placeholder="Ex: 1680">

        <input type="submit" value="Analisar">
    </form>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
        }
    ?>
</body>
</html>
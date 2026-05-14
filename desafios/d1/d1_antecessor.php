<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número antecessor e sucessor</title>
    
    <style>
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

        }
    </style>
</head>
<body>
    <h2>Veja o número sucessor e antecessor!</h2>
    <p>Olá! Digite um número para ver o sucessor e o antecessor.</p>
    <!-- Formulário para o usuário digitar um número -->
    <div class="container">
        <form method="POST" action="d1_processo.php">
            <label>Digite um número</label> <br>
            <input type="number" name="num" id="num">

            <input type="submit" value="Enviar">
        </form>        
    </div>

</body>
</html>
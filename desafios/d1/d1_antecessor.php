<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número antecessor e sucessorヾ(•ω•`)o</title>
    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-color: #f4f3ee;
            color: #463f3a;
            text-align: center;
            padding-top: 50px;
        }

        .container {
            background-color: #ffffff;
            border: 2px solid #bcb8b1;
            display: inline-block;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #463f3a;
        }

        p {
            color: #8a817c;
        }

        input[type="submit"] {
            background-color: #e0afa0;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #bcb8b1;
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
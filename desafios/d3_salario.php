<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise de Salário (●'◡'●)</title>
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
            border-radius: 20px;
            display: inline-block;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
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
    </style>
</head>
<body>
    <h1>Reajustador de Preços</h1>
    <div class="container">
        <form method="POST">
            <labe>Salário R$: </label>
            <input type="number" name="sal" id="sal" placeholder="Ex: 1680">
            <p>Considerando o valor de salário minimo: 1.621,00</p>

            <input type="submit" value="Analisar">
        </form>

        <div class="resultado">
            <?php 
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $salario = $_POST["sal"];
                $minimo = 1621;
                $dif = $salario - $minimo;
                $cabe = (int)($salario / $minimo);

                echo "<br><p> O seu salário é de: " . $salario . "</p>";
                echo "<p> O seu salário é equivalente a: " . $cabe . "</p>";
                echo "<p> Tem uma diferança de: " . $dif . "</p>";
                } else {
                    echo "<p> Digite o seu salário para realizarmos uma análise!</p>";
                }
            ?>
        </div>
    </div>
</body>
</html>
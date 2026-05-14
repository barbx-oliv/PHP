<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analise de Salário (●'◡'●)</title>
    <style>
        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
    </style>
</head>
<body>

    <div class="container">
        <form method="POST">
            <labe>Salário R$: </label>
            <input type="number" name="sal" id="sal" placeholder="Ex: 1680">
            <p>Considerando o valor de salário minimo: 1.621,00</p>

            <input type="submit" value="Analisar">
        </form>
    </div>

    <div>
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
</body>
</html>
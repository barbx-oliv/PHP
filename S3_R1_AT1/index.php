<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameMode</title>
</head>
<style>
    body {
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
        background-color: #1b263b;
    }
</style>
<body>
    <?php 
        $empresa = "GameMode";
        $ano = 2023;
        $funcionario = 65;
        $vendas = 56748;
        $empresaFuncionando = true;
        $faturamento = 1250000.50;

        echo "<h1> Bem vindo a empresa $empresa</h1>";
        echo "<p> A empresa foi fundada em $ano, possuindo $vendas vendas e permance " . ($empresaFuncionando ? "ativa!" : "inativa!") . "</p>";
        echo "<p> Por enquanto, a $empresa conta com $funcionario funcionários.</p>";
        echo "<p> Graças a nossos incriveis funcionarios, temos o faturamento de $faturamento!</p>";

    ?>
</body>
</html>
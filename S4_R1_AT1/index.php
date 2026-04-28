<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S4_R1</title>
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
        $funcionarios = 65;
        $anoInicio = 2023;
        $anoAtual = 2026;
        $mediaEmpresa = $funcionarios >= 50;
        $primeiroFaturamento = 6789.90;
        $segundoFaturamento = 12345.67;
        $primeiraVenda = 508;
        $segundaVenda = 56748;

        echo "<h1> $empresa </h1>";

        // Vendo se a empresa é de médio ou pequeno porte
        echo "<p> A empresa $empresa, como dito anteriormente, só permanece em funcionamento graças ao seus funcionários! Temos $funcionarios funcionários, sendo uma empresa de " . ($mediaEmpresa ? "Médio porte." : "Pequeno porte.") . "</p>";

        // Diferença de faturamento da empresa (primeiro - segundo) Subtração
        echo "<p> Antigamente, nosso faturamento era de $primeiroFaturamento, mas agora tivemos um aumento para $segundoFaturamento, sendo uma diferença de " . ($segundoFaturamento - $primeiroFaturamento) . " reais! </p>";
        
        // Diferença de anos de funcionamento da empresa (inicio - atualmente) Subtração
        echo "<p> Iniciamos nossa empresa em $anoInicio, e agora continuamos em $anoAtual, sendo " . ($anoAtual - $anoInicio) . " anos de funcionamento. </p>";

        // Soma de vendas (primeira + segunda)
        echo "<p> Nossas vendas totais são de " . ($primeiraVenda + $segundaVenda) . " unidades. </p>";
    ?>
</body>
</html>
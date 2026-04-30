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
    h2 {
        color: #415a77;
    }
</style>
<body>
    <?php 
        $empresa = "GameMode";
        $comprasPostivas = 56748;
        $comprasNegativas = 48;
        $produtoBom = $comprasPostivas > $comprasNegativas;
        $produtoReclamacao = $comprasNegativas > $comprasPostivas;
        $atendimento = "Excelente";

        echo "<h1>Game Mode</h1>";
        
        // Se o produto for bem avaliado,  irá imprimir a mensagem de "Nossos produtos são bem avaliados!", seguida da quantidade de compras positivas e negativas
        if ($produtoBom > $produtoReclamacao) {
            echo "<h2> Nossos produtos são bem avaliados!</h2>";
            echo "<p> Com $comprasPostivas compras positivas e apenas $comprasNegativas negativas, os produtos agradam os clientes. </p>";
        }
        // Se o produto tiver mais reclamações irá imprimir "O produto tem avaliações mistas", seguida da quantidade de compras positivas e negativas
        else {
            echo "<h2> O produto tem avaliações mistas</h2>";
            echo "<p> Com $comprasPostivas compras positivas e $comprasNegativas negativas, o produto tem opiniões divididas. </p>";
        }

        // Se o atendimento tiver o valor de "Excelente, irá imprimir a mensagem "O atendimento é excelente, garantindo ajuda e satisfação aos clientes"
        switch ($atendimento) {
            case "Excelente":
                echo "<p> O atendimento é excelente, garantindo ajuda e satisfação aos clientes </p>";
                break;
            
            // Se o atendimento tiver o valor de "Bom", irá imprimir a mensagem "O atendimento é bom. Clientes recebem suporte adequado, mas ainda é necessário algumas melhorias."
            case "Bom":
                echo "<p> O atendimento é bom. Clientes recebem suporte adequado, mas ainda é necessário algumas melhorias.</p>";
                break;
            // Agora, se o atendimento tiver o valor de "Péssimo", irá imprimir a mensagem "O atendimento é regular, com atendentes que conseguem ajudar, mas a experiência pode ser inconsistente."
            case "Péssimo":
                echo "<p> O atendimento é péssimo, os atendentes não conseguem auxiliar adequadamente nas dúvidas, além da demora para ser atendido.</p>";
                break;
        }

        
    ?>
</body>
</html>
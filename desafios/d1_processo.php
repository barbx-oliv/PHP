<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <div class="numRecebido">
        <?php 

            // Calculo do número antecessor, pega o número enviado e faz - 1
            function ant($num){
                return $num - 1;
            }

            // Calculo do número sucessor, pega o número enviado e faz + 1 
            function suc($num){
                return $num + 1;
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Dando o valor das variáveis
                $escolhido = $_POST["num"];
                $antecessor = ant($escolhido);
                $sucessor = suc($escolhido);

                // Respostas aparecendo na tela 
                echo "<br> O número escolhido foi: " . $escolhido . "<br>";
                echo "O número antecessor é: " . $antecessor . "<br>";
                echo "O número sucessor é: " . $sucessor . "<br>";
            }
        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado q(≧▽≦q)</title>
    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-color: #f4f3ee;
            color: #463f3a;
            text-align: center;
            padding-top: 50px;
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

        .numRecebido {
            background-color: #ffffff;
            border: 2px solid #bcb8b1;
            display: inline-block;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 15px;
            font-size: 20px;
            color: #463f3a;
        }
    </style>
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
                echo "<br><p> O número escolhido foi: <strong>" . $escolhido . "</strong></p><br>";
                echo "<p>O número antecessor é: <strong>" . $antecessor . "</strong></p><br>";
                echo "<p>O número sucessor é: <strong>" . $sucessor . "</strong></p><br>";
            }
        ?>
    </div>
</body>
</html>
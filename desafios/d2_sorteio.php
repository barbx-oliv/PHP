<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>𐙚Sorteio ( •̀ ω •́ )✧</title>
<style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-color: #f4f3ee; 
            color: #463f3a;          
            text-align: center;
            padding-top: 50px;
        }

        .card {
            background-color: #ffffff;
            border: 2px solid #bcb8b1; 
            border-radius: 20px;
            display: inline-block;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
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

        input[type="submit"]:hover {
            background-color: #bcb8b1;
        }

        .resultado-numeros {
            margin-top: 15px;
            font-size: 10px;
            color: #463f3a;
        }
    </style>
</head>
<body>
    <h1> ݁ ˖Ი𐑼⋆ Sorteio!! ╰(*°▽°*)╯</h1>
    <p>Bem vindo ao sorteador!</p>
    <div class="card">
        <!-- Botão para o usuário cliar para começar a sortear um número -->
        <form method="POST">
            <input type="submit" value="Sortear">
        </form>
        <?php 

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                echo "<h3>Números sorteados:</h3>";

                // Vai sortear do 0 ao 100 
                $r = (mt_rand(0,100));
                $r2 = (mt_rand(0,100));
                $r3 = (mt_rand(0,100));
                $r4 = (mt_rand(0,100));
                $r5 = (mt_rand(0,100));
                $r6 = (mt_rand(0,100));

                echo "Os números sairam foram: <br><strong>". $r . " | " . $r2 . " | " . $r3 . " | " . $r4 . " | " . $r5 . " | " . $r6 ."</strong>";

            } 
            else {
                echo "<p>Clique no botão para sortear um número</p>";
            }
        ?>
    </div>
</body>
</html>
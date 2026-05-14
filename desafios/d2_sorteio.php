<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio ( •̀ ω •́ )✧</title>
</head>
<body>
    <h1>Sorteio!!</h1>
    <p>Bem vindo ao sorteador! Clique para sortear um número.</p>
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
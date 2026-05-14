<?php
session_start();

// Se o formulário foi enviado, pega o modo escolhido
if (isset($_POST['modo'])) {
    $temaEscolhido = $_POST['modo'];
    
    setcookie("tema_usuario", $temaEscolhido, time() + 3600);

    // Atualiza a variável imediata para não precisar recarregar duas vezes
    $_COOKIE['tema_usuario'] = $temaEscolhido;
}

// Definição das cores baseada no cookie
$tema = $_COOKIE['tema_usuario'] ?? 'modoDark'; // Tema padrão

if ($tema == 'modoWhite') {
    $cor_bg = "#f0f2f5";      
    $cor_texto = "#1c1e21";   
    $cor_form = "#ffffff";    
} else {
    $cor_bg = "#243350";      
    $cor_texto = "white";     
    $cor_form = "#3b5385";   
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Mode - Preferencias jogos</title>

    <style>
        body {
            background-color: <?php echo $cor_bg; ?>;
            color: <?php echo $cor_texto; ?>;
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 50px;
            text-align: center;
            transition: 0.3s; 
        }

        .forms {
            background-color: <?php echo $cor_form; ?>;
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #5475c2;
            border-radius: 8px;
        }

        .dados {
            background-color: rgba(0,0,0,0.1);
            margin-top: 20px;
            padding: 20px;
            text-align: left;
            border-radius: 8px;
        }

        form { text-align: left; }
        label { display: block; margin-top: 15px; font-weight: bold; font-size: 14px; }
        
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #243350;
            color: white;
            border: none;
            margin-top: 20px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
     
    <?php include "header.php"; ?>

    <!-- Campos para o usuário preencher -->
    <div class="forms">
        <form method="POST">
            <label>Nome: </label>
            <input type="text" name="nome" id="nome">

            <label>E-mail: </label>
            <input type="text" name="email" id="email">

            <label>Nome do jogo: </label>
            <input type="text" name="jogo" id="jogo">

            <label>Estilo do jogo:</label>
            <input type="text" name="estilo" id="estilo" placeholder="Ex: aventura">

            <label>Roda em qual console? </label>
            <input type="text" name="console" id="console" placeholder="Ex: PS4, Xbox 360, Nintendo...">
            
            <label>Escolha o tema da página:</label>
            <select name="modo" id="modo">
                <option value="modoDark" <?php echo ($tema == 'modoDark') ? 'selected' : ''; ?>>Modo Escuro</option>
                <option value="modoWhite" <?php echo ($tema == 'modoWhite') ? 'selected' : ''; ?>>Modo Claro</option>
            </select>
                
            <input type="submit" value="Salvar Preferências">
        </form>

        <div class="dados">
            <?php 
                // função para exibir as informações
                function exibirCampo($label, $valor) {
                    echo "$label : " . htmlspecialchars($valor) . " <br>";
                }

                // Salvando na sessão e exibindo
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $_SESSION["usuario"] = $_POST["nome"] ?? "";
                    $_SESSION["email"] = $_POST["email"] ?? "";
                    $_SESSION["jogo"] = $_POST["jogo"] ?? "";
                    $_SESSION["estilo"] = $_POST["estilo"] ?? "";
                    $_SESSION["console"] = $_POST["console"] ?? "";
                }

                // Exibindo as informações dos campos  
                exibirCampo("<strong> Nome do usuario </strong>", $_SESSION["usuario"] ?? " ");
                exibirCampo("<strong> E-mail </strong>", $_SESSION["email"] ?? " ");
                exibirCampo("<strong> Jogo </strong>", $_SESSION["jogo"] ?? " ");
                exibirCampo("<strong> Estilo </strong>", $_SESSION["estilo"] ?? " ");
                exibirCampo("<strong> Tema Atual </strong>", ($tema == 'modoDark' ? 'Escuro' : 'Claro'));
            ?>
        </div>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>
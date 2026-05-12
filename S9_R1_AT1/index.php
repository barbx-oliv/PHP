<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolinha Cãopanheira</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: #333;
            margin: 0;
            padding: 50px;
            text-align: center;
        }

        .container {
            background-color: white;
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        h1 {
            font-size: 24px;
            color: #555;
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; 
        }

        input[type="submit"] {
            background-color: #6c757d;
            color: white;
            border: none;
            margin-top: 20px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #495057;
        }

        input[type="reset"] {
            background-color: #e9ecef;
            color: #333;
            border: 1px solid #ccc;
            margin-top: 10px;
            cursor: pointer;
        }

        /* Estilo para a parte dos dados recebidos */
        .dados-recebidos {
            text-align: left;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Escolinha Cãopanheira</h1>
        <p>Registre seu pet para ele entrar na escola!</p>

        <!-- Dados que o usuário irá digitar -->
        <form method="POST">
            <label>Nome do Dono</label>
            <input type="text" name="dono" id="dono">

            <label>E-mail</label>
            <input type="email" name="email" id="email">

            <label>Nome do Pet</label>
            <input type="text" name="pet" id="pet">

            <label>Idade do Pet</label>
            <input type="text" name="idade" id="idade">
            
            <label>Raça do Pet</label>
            <input type="text" name="raca" id="raca">

            <input type="submit" value="Salvar Registro">
        </form>

        <div class="dados-recebidos">
            <h2>Dados do pet:</h2>
            <hr>

            <?php 
            // Função para fazer a exibição dos dados. Vai arrumar com a label e o valor logo do lado 
                 function exibirCampo($label, $valor) {
                    echo "$label : $valor <br>"; 
                }

                // Exibição dos valores na frente da label
                exibirCampo("<strong> Nome do Dono </strong>", $_POST["dono"] ?? " ");
                exibirCampo("<strong> E-mail </strong>", $_POST["email"] ?? " ");
                exibirCampo("<strong> Nome do Pet </strong>", $_POST["pet"] ?? " ");
                exibirCampo("<strong> Idade do Pet </strong>", $_POST["idade"] ?? " ");
                exibirCampo("<strong> Raça do Pet </strong>", $_POST["raca"] ?? " ");
            ?>
        </div>
    </div>

</body>
</html>
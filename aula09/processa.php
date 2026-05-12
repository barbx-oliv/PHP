   <?php 
        function exibirCampo($label, $valor) {
            echo "$label : $valor <br>"; 
        }

        // if (isset($_POST["nome"], $_POST["email"])) {
        //     exibirCampo("Nome ", $_POST["nome"]);
        //     exibirCampo("Email ", $_POST["email"]);
        // }

        exibirCampo("Nome ", $_POST["nome"] ?? " ");
        exibirCampo("E-mail ", $_POST["email"] ?? " ");

    ?>
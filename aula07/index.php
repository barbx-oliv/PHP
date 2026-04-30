<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargos_Funcionários</title>
    <style>
        body {
            background-color: gray;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nome: </th>
            <th>Cargo: </th>
        </tr>
    </table>
    <?php 
    $funcionarios = [
        ["nome" => "Ana", "cargo" => "Analista"],
        ["nome" => "Carlos", "cargo" => "Desenvolvedor"],
        ["nome" => "Mariana", "cargo" => "Gerente"]
    ];

    echo "<strong>Funcionário: </strong>" . $funcionarios[2]["nome"] . 
    "<strong><br> Cargo: </strong>" . $funcionarios[2]["cargo"] . "<br>";

    foreach ($funcionarios as $f) {
        echo $f["nome"] . " - " . $f["cargo"] . "<br>";
    }
?>
</body>
</html>
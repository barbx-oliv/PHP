<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargos_Funcionários</title>
    <style>
        body {
            background-color: #ffcad4;
            text-align: center;
        }
        table {
        margin: 0 auto;
        border-collapse: collapse;
        background-color: #f4acb7;
    }
    </style>
</head>
<body>
    <table border="5">
        <tr>
            <th> Nome: </th>
            <th> Cargo: </th>
            <th> Salário: </th>
        </tr>
        <?php 
            $funcionarios = [
                ["nome" => "Ana", "cargo" => "Analista", "salario" => 10000],
                ["nome" => "Carlos", "cargo" => "Desenvolvedor", "salario" => 17000],
                ["nome" => "Mariana", "cargo" => "Gerente", "salario" => 20000]
            ];

        // echo "<strong>Funcionário: </strong>" . $funcionarios[2]["nome"] . 
        // "<strong><br> Cargo: </strong>" . $funcionarios[2]["cargo"] . "<br>";

            foreach ($funcionarios as $f) {
                echo "<tr> <td>" . $f["nome"] . "</td><td>" . $f["cargo"] . "</td><td>" . $f["salario"] . "</td>";
            }
        ?>
    </table>
</body>
</html>
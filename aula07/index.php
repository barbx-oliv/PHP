<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargos_Funcionários</title>
    <style>
        body {
            background-color: #b47686;
            text-align: center;
        }
        table {
        margin: 50px auto;
        border-collapse: collapse;
        background-color: #f1a6b1;
        width: 60%;
        color: white;
        }
        th, td {
            padding: 15px;
            border: 1px solid;
            text-align: left;
        }
        th {
            background-color: #e6b0c0;
            color: white;
            text-align: center;
        }
        td {
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th> Nome </th>
            <th> Cargo </th>
            <th> Salário </th>
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
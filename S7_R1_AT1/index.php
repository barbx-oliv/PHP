<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diario_de_Classe</title>

    <style>
        body {
            background-color: #656d4a;
            text-align: center;
        }
        table {
            margin: 50px auto;
            border-collapse: collapse;
            background-color: #a4ac86;
            width: 60%;
            color: white;
        }
        th, td {
            padding: 15px;
            border: 1px solid;
            text-align: left;
        }
        th {
            background-color: #c2c5aa;
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
            <th> Idade </th>
            <th> Nota </th>
        </tr>

        <?php 
            $alunos = [
                ["nome" => "Bárbara", "idade" => 18, "nota" => 8 ],
                ["nome" => "Lola", "idade" => 8, "nota" => 10 ],
                ["nome" => "Megára", "idade" => 5, "nota" => 4 ],
                ["nome" => "Chalotte", "idade" => 6, "nota" => 7 ],
                ["nome" => "Felícia", "idade" => 6, "nota" => 9 ]
            ];

            "<h1> Bem vindo(a) ao seu Diario de Classe, professor(a)!</h1>";
            "<p> Aqui nos temos os registros de notas dos seguintes alunos: </p>";
    
            foreach ($alunos as $f) {
                echo "<tr> 
                        <td>" . $f["nome"] . "</td>
                        <td>" . $f["idade"] . "</td> 
                        <td>" . $f["nota"] . "</td> 
                    </tr>";
            }
        ?>
    </table>
</body>
</html>
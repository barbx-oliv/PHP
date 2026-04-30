<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<style>
    body {
        text-align: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color: #4b688a;
    }
    h1 {
        color: #8ba6c9;
    }
    table {
        margin: 0 auto;
        border-collapse: collapse;
        background-color: #f2e9e4;
    }
    td {
        padding: 8px;
        border: 1px solid #ccc;
        color: #22223b;
    }
</style>
<body>
    <table border="1", align="center">
        <tbody>
            <?php
            echo "<h1>Tabuada do 5</h1>";
            $numero = 5;
            for ($i = 0; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>";
                echo "$numero x $i = " . ($numero * $i) . "<br></td></tr>";
            }

            ?>
        </tbody>
    </table>
</body>
</html>
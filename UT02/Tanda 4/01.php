<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 || Tanda 4</title>
    <style>
        table,td{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
        th,td{
            padding-left: 10px;
            padding-right: 10px;
        }
        tr:hover{
            background-color: #EEB2EF;
        }
        th{
            background-color: grey;
        }
    </style>
</head>
<body>
    <?php //mostrar errores
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ?>
    <?php
    $numero = array(20);
    $cuadrado = array(20);
    $cubo = array(20);
    echo "<table>";
    echo "<tr>
            <th></th>
            <th>Número</th>
            <th>Cuadrado</th>
            <th>Cubo</th>
        </tr>";
    for($i=0; $i<20; $i++)
    {
        $numero[$i] = rand(0,100);
        $cuadrado[$i] = $numero[$i]* $numero[$i];
        $cubo[$i] = $numero[$i]* $numero[$i] * $numero[$i];
        echo "<tr><th>".($i+1)."</th><td>$numero[$i]</td><td>$cuadrado[$i]</td><td>$cubo[$i]</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
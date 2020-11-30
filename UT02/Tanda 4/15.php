<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15 || Tanda 4</title>
    <style>
        td,
        table {
            border: 1px solid blue;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php                           //mostrar errores
    ini_set('display_errors', 1);   //mostrar errores
    ini_set('display_startup_errors', 1); //mostrar errores
    error_reporting(E_ALL);         //mostrar errores
    ?>

    <?php

    $array = [];

    $n = 0;
    for ($i = 0; $i < 12; $i++) {
        for ($j = 0; $j < 12; $j++) {
            $array[$i][$j] = $n;
            $n++;
        }
    }


    //pintar original y rellenar girado
    echo "<p> Original </p>";
    echo "<table>";
    for ($i = 0; $i < 12; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 12; $j++) {

            echo "<td>" . $array[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";


    //Intentar rotar la línea de arriba

    for ($k = 0; $k < 6; $k++) {
        //linea de arriba
        $temp1 = $array[$k][11 - $k];

        for ($j = 11 - $k; $j >= 1 + $k; $j--) {
            $array[$k][$j] = $array[$k][$j - 1];
        }
        $temp2 =  $array[11-$k][11-$k];

        //columna derecha
        for ($i = 11 - $k; $i >= 1+ $k; $i--) {
            $array[$i][11-$k] = $array[$i-1][11-$k];
        }
        $array[$k+1][11-$k] = $temp1;

        //linea abajo
        $temp3 = $array[11-$k][$k];
        for($j=$k;$j<11-$k; $j++)
        {
            $array[11-$k][$j] = $array[11-$k][$j+1];
        }
        $array[11-$k][10-$k] = $temp2;

        //columna izquierda
        for($i=$k;$i<11-$k;$i++)
        {
            $array[$i][$k] = $array[$i+1][$k];
        }
        $array[10-$k][$k] = $temp3;

    }

    //pintar original y rellenar girado
    echo "<p> despues </p>";
    echo "<table>";
    for ($i = 0; $i < 12; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 12; $j++) {

            echo "<td>" . $array[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";






    ?>






</body>

</html>
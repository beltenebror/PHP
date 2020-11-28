<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14 || Tanda 4</title>
</head>

<body>

    <?php                           //mostrar errores
    ini_set('display_errors', 1);   //mostrar errores
    ini_set('display_startup_errors', 1); //mostrar errores
    error_reporting(E_ALL);         //mostrar errores
    ?>

    <?php

    $array = array(
        array(),
        array(),
        array(),
        array(),
        array(),
        array(),
        array(),
        array(),
        array(),
        array(),
        array(),
        array()
    );

    for ($i = 0; $i < 12; $i++) {
        for ($j = 0; $j < 12; $j++) {
            $array[$i][$j] = $j;
        }
    }

    $arrayGirado =  array(
        array(),
        array(),
        array(),
        array(),
        array(),
        array(),
        array(),
        array(),
        array(),
        array(),
        array(),
        array()
    );



    //pintar original y rellenar girado
    echo "<p> Original </p>";
    echo "<div>";
    for ($i = 0; $i < 12; $i++) {
        for ($j = 0; $j < 12; $j++) {

            echo " " . $array[$i][$j] . " ";
            $arrayGirado[$j][$i]=$array[$i][$j];
        }
        echo "<br>";
    }
    echo "</div>";

    //pintar girado
    echo "<p> Girado </p>";
    echo "<div>";
    for ($i = 0; $i < 12; $i++) {
        for ($j = 0; $j < 12; $j++) {

            echo " " . $arrayGirado[$i][$j] . " ";
        }
        echo "<br>";
    }
    echo "</div>";
    

    

    ?>




</body>

</html>
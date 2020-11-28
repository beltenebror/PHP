<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 || Tanda 4</title>
</head>

<body>
    <?php                           //mostrar errores
    ini_set('display_errors', 1);   //mostrar errores
    ini_set('display_startup_errors', 1); //mostrar errores
    error_reporting(E_ALL);         //mostrar errores
    ?>

    <?php
    //genero el array
    $array = array(20);
    for($i=0; $i<20; $i++)
    {
        $array[$i] = rand(0,100);
    }
    //lo pinto
    echo "<p>Array inicial: </p>";
    echo "<p>";
    for($i=0; $i<20; $i++)
    {
        echo " " . $array[$i] . " ";
    }
    echo "</p>";

    $arrayPares = array();
    $arrayImpares = array();

    for($i=0; $i<20; $i++)
    {
        if($array[$i]%2==0)
        {
            array_push($arrayPares,$array[$i]);
        }
        else{
            array_push($arrayImpares,$array[$i]);
        }
    }

    echo "<p>Array pares: </p>";
    echo "<p>";
    for($i=0; $i<count($arrayPares); $i++)
    {
        echo " " . $arrayPares[$i] . " ";
    }
    echo "</p>";

    echo "<p>Array impares: </p>";
    echo "<p>";
    for($i=0; $i<count($arrayImpares); $i++)
    {
        echo " " . $arrayImpares[$i] . " ";
    }
    echo "</p>";


    ?>
</body>

</html>
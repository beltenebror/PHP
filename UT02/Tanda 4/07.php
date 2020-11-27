<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ercicio 7 || Tanda 4</title>
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
        if($array[$i])
        {
            
        }
        else{

        }
    }
    echo "</p>";


    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca 3</title>
</head>

<body>
    <?php
    //Pruebas
    $array = generaArrayBiInt(5, 5, 1, 10);
    echo "<p>1.-</p>";
    echo "<pre>";
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            echo " " . $array[$i][$j] . " ";
        }
        echo "<br>";
    }
    echo "</pre>";

    echo "<p>2.-</p>";
    echo "<p>";
    print_r(filaDeArrayBiInt(0, $array));
    echo "</p>";

    echo "<p>3.-</p>";
    echo "<p>";
    print_r(ColumnaDeArrayBiInt(0, $array));
    echo "</p>";

    echo "<p>4.- Coordenadas del primer 3</p>";
    echo "<p>";
    print_r(coordenadasEnArrayBiInt($array, 3));
    echo "</p>";

    echo "<p>6.- Coordenadas del primer 3</p>";
    echo "<p>";
    print_r(diagonal($array,"neso"));
    echo "</p>";




    ?>

    <?php
    //Funciones

    //6
    function diagonal($array,$dirreccion)
    {
        $diagonal = [];
        if($dirreccion=="nose")
        {
            for($i=0; $i<count($array); $i++)
            {
                array_push($diagonal,$array[$i][$i]);
            }

        }
        else
        {
            $j=count($array)-1;
            for($i=0; $i<count($array); $i++)
            {
                array_push($diagonal,$array[$j][$i]);
                $j--;
            }
            
        }
        return $diagonal;
    }



    //5
    function esPuntoDeSilla($array, $punto)
    {
        $minFila = $punto;
        $minColumna = $punto;
        $devolver = true;
        $coordenadas = coordenadasEnArrayBiInt($array, $punto);
        if ($coordenadas[0] == -1) {
            $coordenadas = false;
        }
        if ($devolver) {   //fila
            for ($i = 0; $i < count($array); $i++) {
                if ($array[$coordenadas[0]][$i] < $punto) {
                    $devolver = false;
                    break;
                }
            }
        }
        if ($devolver) {   //columna
            for ($i = 0; $i < count($array); $i++) {
                if ($array[$i][$coordenadas[1]] < $punto) {
                    $devolver = false;
                    break;
                }
            }
        }


        return $devolver;
    }



    //4
    function coordenadasEnArrayBiInt($array, $numero)
    {
        $coordenadas = array(-1, -1);
        for ($i = 0; $i < count($array); $i++) {
            for ($j = 0; $j < count($array[$i]); $j++) {
                if ($array[$i][$j] == $numero) {
                    $coordenadas[0] = $i;
                    $coordenadas[1] = $j;
                    $i = count($array);
                    break;
                }
            }
        }
        return $coordenadas;
    }





    //3
    function ColumnaDeArrayBiInt($n, $array)
    {
        $fila = [];
        for ($i = 0; $i < count($array); $i++) {
            array_push($fila, $array[$i][$n]);
        }
        return $fila;
    }

    //2
    function filaDeArrayBiInt($n, $array)
    {
        $fila = [];
        for ($i = 0; $i < count($array[$n]); $i++) {
            array_push($fila, $array[$n][$i]);
        }
        return $fila;
    }



    //1
    function generaArrayBiInt($ancho, $alto, $min, $max)
    {
        $array = [];

        for ($i = 0; $i < $alto; $i++) {
            for ($j = 0; $j < $ancho; $j++) {
                $array[$i][$j] = rand($min, $max);
            }
        }

        return $array;
    }

    ?>
</body>

</html>
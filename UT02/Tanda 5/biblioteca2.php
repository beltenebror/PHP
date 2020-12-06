<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca 2</title>
</head>
<!--Ejercicios del 20 al 28-->
<body>

    <?php
    //Prubas
    $array =generaArrayInt(10,0,20);
    echo "<p>1.- ";
    print_r($array);
    echo "</p>";

    echo "<p>2.- el mínimo es ". minimoArrayInt($array) . "</p>";
    echo "<p>3.- el máximo es ". maximoArrayInt($array) . "</p>";
    echo "<p>4.- la media es ". mediaArrayInt($array) . "</p>";
    echo "<p>5-6.- esta 5 en el array? --> ". estaEnArrayInt(5,$array) . " y está en la posición ". posicionEnArrayInt(5,$array)."</p>";
    echo "<p>7.- El array rotado --> " ;
    print_r(volteaArrayInt($array));
    echo "</p>";
    echo "<p>8.- El array girado 3 veces D --> " ;
    print_r(rotaDerechaArrayInt($array,3));
    echo "</p>";
    echo "<p>8.- El array girado 3 veces I --> " ;
    print_r(rotaIzquierdaArrayInt($array,3));
    echo "</p>";




    ?>


    <?php
    //Funciones

    //9
    function rotaIzquierdaArrayInt($array,$n)
    {  
        $arrayGirado = [];
        for($i=0; $i<count($array); $i++)
        {
            array_push($arrayGirado,$array[$i]);
        }
        for($i=0; $i<$n; $i++)
        {
            rotaIzquierdaUno($arrayGirado);
        }
        return $arrayGirado;
    }

    function rotaIzquierdaUno(&$array)
    {
        $temporal = $array[0];
        for($i=0;$i<count($array)-1;$i++)
        {
            $array[$i] = $array[$i+1];
        }
        $array[count($array)-1]=$temporal;
    }


    //8
    function rotaDerechaArrayInt($array,$n)
    {  
        $arrayGirado = [];
        for($i=0; $i<count($array); $i++)
        {
            array_push($arrayGirado,$array[$i]);
        }
        for($i=0; $i<$n; $i++)
        {
            rotaDerechaUno($arrayGirado);
        }
        return $arrayGirado;
    }

    function rotaDerechaUno(&$array)
    {
        $temporal = $array[count($array)-1];
        for($i=count($array)-1;$i>0;$i--)
        {
            $array[$i] = $array[$i-1];
        }
        $array[0]=$temporal;
    }



    //7
    function volteaArrayInt($array)
    {
        $arrayVolteado = [];
        for($i=count($array)-1;$i>-1;$i--)
        {
            array_push($arrayVolteado,$array[$i]);
        }
        return $arrayVolteado;
    }



    //6
    function posicionEnArrayInt($num,$array)
    {
        $posicion = -1;
        for($i=0;$i<count($array);$i++)
        {
            if($num == $array[$i])
            {
                $posicion=$i;
            }
        }
        return $posicion;
    }



    //5
    function estaEnArrayInt($nun,$array)
    {
        $esta = false;
        foreach ($array as $valor)
        {
            if($nun== $valor)
            {
                $esta = true;
            break;
            }
        }
        return $esta;
    }



    //4
    function mediaArrayInt($array)
    {
        $suma="0";
        foreach($array as $valor)
        {
            $suma += $valor;
        }
        return $suma/count($array);
    }



    //3
    function maximoArrayInt($array)
    {
        $maximo = $array[0];
        foreach($array as $valor)
        {
            if($valor>$maximo)
            {
                $maximo=$valor;
            }
        }
        return $maximo;
    }



    //2
    function minimoArrayInt($array)
    {
        $minimo = $array[0];
        foreach($array as $valor)
        {
            if($valor<$minimo)
            {
                $minimo=$valor;
            }
        }
        return $minimo;
    }



    //1
    function generaArrayInt($tamaño,$min,$max)
    {
        $array = [];
        for($i=0; $i<$tamaño; $i++)
        {
            array_push($array,rand($min,$max));
        }
        return $array;
    }
    ?>

</body>
</html>
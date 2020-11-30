<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13 || Tanda 4</title>
    <style>
        div {
            margin-left: 10%;
            margin-top: 10%;
            width: 30%;
            border: 10px black solid;
            text-align: center;
            padding: 2em;

        }
        .azul{
            color: blue;
        }
        .verde{
            color: green;
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
  
    /////////////// Creamos y asignamos el array bidimentional, además localizamos el mínimo
    $array = [];
    $k = 0;
    $min = 960;
    $minI;
    $minJ;
    for ($i = 0; $i < 9; $i++) {
        for ($j = 0; $j < 6; $j++) {
            $n = rand(100, 999);
            if(!in_array($n,$array))
            {
                $array[$i][$j]=$n;
                if ($n < $min) {
                    $min = $n;
                    $minI = $i;
                    $minJ = $j;
                }
            }
            else{
                $j--;
            }
           
        }
    }

    /////////// Trabajamos con span para los colores en el múnimo y las diagonales

    $array[$minI][$minJ] = '<span class="azul">'.$array[$minI][$minJ] . '</span>'; //mínimo

    $derecha = $minJ+1;
    $izquierda = $minJ-1;
        //para abajo
    for($i=$minI+1; $i<9; $i++)
    {

        if($derecha<6)
         {
            $array[$i][$derecha] = '<span class="verde">'.$array[$i][$derecha] . '</span>';
            $derecha++;
         }
        
        
         if($izquierda>-1)
         {
            $array[$i][$izquierda] = '<span class="verde">'.$array[$i][$izquierda] . '</span>';
            $izquierda--;
         }

    }
    $derecha = $minJ+1;
    $izquierda = $minJ-1;
        //para arriba
    for($i=$minI-1;$i>-1; $i--)
    {

        if($derecha<6)
         {
            $array[$i][$derecha] = '<span class="verde">'.$array[$i][$derecha] . '</span>';
            $derecha++;
         }
        
        
         if($izquierda>-1)
         {
            $array[$i][$izquierda] = '<span class="verde">'.$array[$i][$izquierda] . '</span>';
            $izquierda--;
         }

    }



    // ///////////// Pintar el cuadrado final//////////
    echo "<div>";
    for ($i = 0; $i < 9; $i++) {
        for ($j = 0; $j < 6; $j++) {
            
            echo " " . $array[$i][$j] . " ";
        }
        echo "<br>";
    }
    echo "</div>";


    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 || Tanda 4</title>
    <style>
        span{
            color:purple;
        }
    </style>
</head>

<body>
    <?php                           //mostrar errores
    ini_set('display_errors', 1);   //mostrar errores
    ini_set('display_startup_errors', 1); //mostrar errores
    error_reporting(E_ALL);         //mostrar errores
    ?>

    <p>Grafico de las temperaturas del año. De 0 <sub>(vivimos en españa no en el polo norte)</sub> a 40<sub>(tampoco en un volcan)</sub> </p>

    <?php if (isset($_POST['temperatura'])) : ?>

        <?php
        $mes = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
        $contador = $_POST['contador'];
        $temperatura = $_POST['temperatura'];
        $array = explode(",", $_POST['array']);
        $array[$contador - 1] = $temperatura;

        ?>

    <?php else : ?>
        <?php
        $contador = 0;
        $array = array(12);
        $mes = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');
        ?>

    <?php endif; ?>

    <?php if ($contador == 12) : ?>

        <?php
        echo "<pre>";
        echo " TEMPERATURA -- 00  02  04  06  08  10  12  14  16  18  20  22  24  26  28  30  32  34  36  38  40";
        for ($i = 0; $i < 12; $i++) {
            echo "<p> " . añadeEspacios($mes[$i],11) . "--> " . "<span>" . dibuja($array[$i]) . "</span>" . "</p>";

        }
        echo "</pre>";
        ?>

    <?php else : ?>
        <?php $contador++ ?>
        <p>Introduzca los balores enteros por meses:</p>
        <form action="05.php" method="post">
            <label>
                Temperatura del mes <?php echo $mes[$contador - 1] ?>:
                <input type="number" name="temperatura" required autofocus min="0" max="40">
                <input type="hidden" name="contador" value="<?php echo $contador ?>">
                <input type="hidden" name="array" value="<?php echo implode(",", $array) ?>">
            </label>
        </form>

    <?php endif; ?>

    <?php //funciones

        function añadeEspacios($str, $tamaño)
        {
            $nuevaCadena = $str;
            for($i=0; $i<$tamaño; $i++)
            {
                if(empty($nuevaCadena[$i]))
                {
                    $nuevaCadena = $nuevaCadena . " ";
                }
            }
            return $nuevaCadena;
        }

        function dibuja($numero)
        {
            $cadena="/";
            for($i=0; $i<$numero; $i++)
            {
                $cadena = $cadena . "//";
            }
            return $cadena;
        }

    ?>

</body>

</html>
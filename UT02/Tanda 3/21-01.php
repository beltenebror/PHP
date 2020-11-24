<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21</title>
</head>

<body>
    <?php

    if (!isset($_POST['num'])) {
        $n = 0;
        $sumaImpares = 0;
        $mayorPar = 0;
        $contadorImpares = 0;
        $contadorNumeros = 0;
    } else {
        $n = $_POST['num'];
        $sumaImpares = $_POST['sumaImpares'];
        $mayorPar = $_POST['mayorPar'];
        $contadorImpares = $_POST['contadorImpares'];
        $contadorNumeros = $_POST['contadorNumeros'];
        if ($n >= 0) {
            $contadorNumeros++;
            if ($n % 2 == 0) {
                if ($n > $mayorPar) {
                    $mayorPar = $n;
                }
            } else {
                $sumaImpares = $sumaImpares + $n;
                $contadorImpares++;
            }
        }
    }
    if ($n >= 0) {
    ?>
        <p>Introduzca números, se devolverá la cantidad de números introducida, la media de los impares,
            y el mayor número par. (Se parará cuando se introduzca un número negativo)</p>
        <form action="21-01.php" method="post">
            <label>Número:
                <input type="number" name="num" autofocus>
            </label>
            <input type="hidden" name="sumaImpares" value="<?php echo $sumaImpares ?>">
            <input type="hidden" name="mayorPar" value="<?php echo $mayorPar ?>">
            <input type="hidden" name="contadorImpares" value="<?php echo $contadorImpares ?>">
            <input type="hidden" name="contadorNumeros" value="<?php echo $contadorNumeros ?>">
            <input type="submit" value="Ver">
        </form>


    <?php
    } else {
        echo "<p> La cantidad de números que se han introducido es: " . $contadorNumeros . "</p>";
        echo "<p> La media de los impares introducidos es: " . $sumaImpares / $contadorImpares . "</p>";
        echo "<p> El mayor número par introducidos es: " . $mayorPar . "</p>";
    }
    ?>
</body>

</html>
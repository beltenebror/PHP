<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca 1</title>
</head>
 <!--Ejercicios del 1 al 14-->
<body>
    <?php
    ///////////////Funciones/////////////

    function digitoN($n, $pos)
    {
        return (int)(((string)$n)[$pos]);
    }

    function posicionDeDigito($n, $dig)
    {
        $pos = strpos((string)$n, (string)$dig);
        if ($pos) {
            return $pos;
        } else {
            return -1;
        }
    }

    function quitaPorDetras($numero, $dig)
    {
        $n = (string)$numero;
        return (int)(substr($n, 0, strlen($n) - $dig));
    }

    function quitaPorDelante($n, $dig)
    {
        $n = (string)$n;
        return (int)(substr($n, $dig, strlen($n)));
    }

    function pegaPorDetras($n, $dig)
    {
        return (int)($n . $dig);
    }

    function pegaPorDelante($n, $dig)
    {
        return (int)($dig . $n);
    }

    function trozoDeNumero($n, $ini, $fin)
    {
        return (int)(substr((string)$n, $ini, $fin));
    }

    function juntaNumeros($n1, $n2)
    {
        return (int)($n1 . $n2);
    }

    function voltea($numero)
    {
        $volteado = 0;
        $n = abs($numero);
        while ($n > 0) {
            $volteado = ($volteado * 10) + ($n % 10);
            $n = floor($n / 10);
        }
        $devolver = strval($volteado);
        if ($numero < 0) {
            $devolver = $devolver . "-";
        }

        return $devolver;
    }


    function digitos($numero)
    {
        $n = $numero;
        $cifras = 0;
        do {
            $n = floor($n / 10);
            $cifras = $cifras + 1;
        } while ($n > 0);
        return $cifras;
    }


    function potencia($base, $exponente)
    {
        $total = $base;
        for ($i = 1; $i < $exponente; $i++) {
            $total = $total * $base;
        }
        return $total;
    }


    function siguientePrimo($numero)
    {
        $n = $numero + 1;
        while (esPrimo(($n))) {
            $n++;
        }
        return $n;
    }


    function esPrimo($numero)
    {
        $n = $numero;
        $result = true;
        for ($i = 2; $i <= $n / 2; $i++) {
            if ($n % $i == 0) {
                $result = false;
                break;
            }
        }
        return $result;
    }


    function esCapicua($numero)
    {
        $n = strval($numero);
        $capicua = true;
        $len = strlen($n)-1;
        for ($i = 0; $i < strlen($n) / 2; $i++) {
            if ($n[$i] != $n[$len]) {
                $capicua = false;
            break;
            }
            $len--;
        }
        return $capicua;
    }


    ?>
</body>

</html>
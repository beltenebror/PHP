<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19 || Tanda 5</title>
</head>

<body>
    <h1>Conversor de bases</h1>
    <form action="Ejercicio19.php" method="post">
        <label>
            Número:
            <input type="text" name="numero">
        </label>
        <select name="base0">
            <option value="2">Binario</option>
            <option value="8">Octal</option>
            <option value="10">Decimal</option>
            <option value="16">Hexadecimal</option>
        </select>
        <br>
        <label>
            Convertido a base:
            <select name="base1">
                <option value="2">Binario</option>
                <option value="8">Octal</option>
                <option value="10">Decimal</option>
                <option value="16">Hexadecimal</option>
            </select>
        </label>
        <br>
        <input type="submit" value="Convertir">
    </form>

    <?php if (isset($_POST['numero'])) : ?>

        <?php
        $numero0 = $_POST['numero'];
        $base0 = $_POST['base0'];
        $base1 = $_POST['base1'];

        switch ($base0) {
            case 2:
                $numeroDecimal = bindec($numero0);
                break;
            case 8:
                $numeroDecimal = octdec($numero0);
                break;
            case 10:
                $numeroDecimal = $numero0;
                break;
            case 16:
                $numeroDecimal = hexdec($numero0);
                break;
        }

        switch($base1)
        {
            case 2:
                $numero2 = decbin($numeroDecimal);
                break;
            case 8:
                $numero2 = decoct($numeroDecimal);
                break;
            case 10:
                $numero2 = $numeroDecimal;
                break;
            case 16:
                $numero2 = dechex($numeroDecimal);
                break;
        }
        echo "<p>$numero0<sub>$base0</sub> es igual a $numero2<sub>$base1</sub>  </p>"
        ?>

    <?php endif; ?>

</body>

</html>
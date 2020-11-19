<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>

<body>
    <p>Media de números positivos (se parará cuando introduzca un número negativo)</p>
    <?php
    if (!isset($_POST['n'])) {
        $n = 0;
        $total = 0;
        $cuentaNumeros = 0;
    } else {
        $n = $_POST['n'];
        $total = $_POST['total'];
        $cuentaNumeros = $_POST['cuentaNumeros'];
    }
    if ($n >= 0) {
        $total += $n;
        $cuentaNumeros++;
    ?>
        <form action="10-01.php" method="post">
            <input type="number" name="n" autofocus>
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
            <input type="submit" value="Aceptar">
        </form>
    <?php
    } else {
    ?>
        <br><br>La media de los números introducidos es <?php echo $total / ($cuentaNumeros - 1); ?>
        <br><br>
    <?php
    echo $_cuentaNumeros;
    }
    ?>
</body>

</html>
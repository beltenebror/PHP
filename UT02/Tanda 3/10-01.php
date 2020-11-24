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
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        $contador = $_POST['contador'];
        $total = $_POST['total'];
    } else {
        $numero = 0;
        $contador = 0;
        $total = 0;
    }

    if ($numero >= 0) {
        $total = $total + $numero;
        $contador = $contador + 1;
    ?>

        <form action="10-01.php" method="post">
            <label>
                Introduce número:
                <input type="number" name="numero" autofocus>
            </label>
            <input type="hidden" name="contador" value="<?php echo $contador ?>">
            <input type="hidden" name="total" value="<?php echo $total ?>">
            <input type="submit" value="Enviar">
        </form>

    <?php
    } else {
    ?>
    <p>La media de los números anteriores es <?php echo $total/($contador-1) ?></p>
    <?php
    }
    ?>
</body>

</html>
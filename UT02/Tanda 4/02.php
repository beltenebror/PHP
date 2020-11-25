<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 Tanda 4</title>
</head>

<body>
    <p>Pedir 10 números y luego devolver el máximo y el mínimo</p>

    <?php if (isset($_POST['numero'])) : ?>

        <?php
        $numero = $_POST['numero'];
        $contador = $_POST['contador'];
        $min = $_POST['min'];
        $max = $_POST['max'];

        if($contador == 1)
        {
            $min = $numero;
            $max = $numero;
        }
        else{

            if($numero > $max)
            {
                $max = $numero;
            }
            if($numero < $min)
            {
                $min = $numero;
            }
        }
        ?>

    <?php else : ?>

        <?php
        $contador = 0;
        ?>

    <?php endif; ?>

    <?php if ($contador < 10) : ?>

        <?php $contador++ ?>
        <form action="02.php" method="post">
        <input type="number" name="numero" autofocus>
        <input type="hidden" name="contador" value="<?php echo $contador ?>">
        <input type="hidden" name="min" value="<?php echo $min ?>">
        <input type="hidden" name="max" value="<?php echo $max ?>">
        <br>
        <input type="submit" value="Enviar número">
        </form>

    <?php else : ?>

        <?php
        echo "</p>";
        echo "<p> El número máximo de los 10 es: $max </p>";
        echo "<p> El número mínimo de los 10 es: $min </p>";
        ?>   

    <?php endif; ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 23</title>
</head>

<body>
    <p>Introduce números hasta llegar hasta 10000</p>
    <?php
    if (isset($_POST['valorActual'])) :
        $valorActual = $_POST['valorActual'];
        $cantidad = $_POST['cantidad'] + $valorActual;
        $contador = $_POST['contador'];
    else:
        $cantidad = 0;
        $valorActual = 0;
        $contador = 0;

    endif;
    ?>
    <?php if($cantidad<10000):?>
        <?php $contador = $contador+1; ?>

        <form action="23-01.php" method="post">
            <input type="number" name="valorActual" autofocus>    
            <input type="hidden" name="cantidad" value="<?php echo $cantidad ?>">    
            <input type="hidden" name="contador" value="<?php echo $contador ?>">
            <input type="submit" value="sumar">    
        </form>

    <?php else:
        echo "<p> El total acumulado es: " . $cantidad . "</p>";
        echo "<p> El total de números introducido es es: " . $contador . "</p>";

    endif;


    ?>

</body>

</html>
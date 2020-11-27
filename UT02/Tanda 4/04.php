<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 || Tanda 4</title>
    <style>
        span {
            color: purple;
        }
    </style>
</head>

<body>
    
    <?php //mostrar errores
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ?>

    <?php if (isset($_POST['numeroBuscar'])) : ?>
        <?php
        $array = explode(",", $_POST['array']);
        echo "<p>";
        for ($i = 0; $i < 100; $i++) {
            if ($array[$i] == $_POST['numeroBuscar']) {
                echo " <span>" . $array[$i] . "</span> ";
            } else {
                echo " " . $array[$i] . " ";
            }
        }
        echo "</p>";
        echo "<hr>";
        echo "<p>";

        for ($i = 0; $i < 100; $i++) {

            if ($array[$i] == $_POST['numeroBuscar']) {
                echo " <span>" . $_POST['numeroCambiar'] . "</span> ";
            } else {
                echo " " . $array[$i] . " ";
            }
        }

        echo "</p>";

        ?>
    <?php else : ?>
        <?php
        $array = array(100);
        for ($i = 0; $i < 100; $i++) {
            $array[$i] = rand(0, 20);
        }
        echo "<p>";
        for ($i = 0; $i < 100; $i++) {
            echo " " .
                $array[$i] . " ";
        }
        echo "</p>";
        ?>
        <p>Introduce un número para cambiar por otro</p>
        <form action="04.php" method="post">
            <label>
                Número 1: <input type="number" name="numeroBuscar" min="0" max="20">
            </label>
            <br>
            <label>
                Número 2: <input type="number" name="numeroCambiar">
            </label>
            <br>
            <input type="hidden" name="array" value="<?php echo implode(",", $array) ?>">
            <input type="submit" value="">
        </form>

    <?php endif ?>
</body>

</html>
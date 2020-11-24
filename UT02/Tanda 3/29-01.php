<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 29</title>
    <style>
        span {
            color: purple;
        }

        label {
            color: purple;
        }
    </style>
</head>

<body>
    <?php if (isset($_POST['x'])) : ?>
    
        <?php
        $x = $_POST['x'];
        $y = $_POST['y'];
        echo "<p>Mostrar todos los números menores a <span> $x </span> y que no sean divisibles por <span> $y </span></p>";

        echo "<p> ";
        for($i=1; $i<$x; $i++)
        {
            if(!($i%$y==0))
            {
                echo " ".$i." ";

            }
        }
        echo "</p>";
        ?>
    <?php else : ?>
        <p>Mostrar todos los números menores a <span>X</span> y que no sean divisibles por <span>Y</span></p>
        <form action="29-01.php" method="post">
            <label>X:
                <input type="number" name="x">
            </label>
            <br>
            <label>Y:
                <input type="number" name="y">
            </label>
            <br>
            <input type="submit" value="Ver">
        </form>
    <?php endif; ?>
</body>

</html>
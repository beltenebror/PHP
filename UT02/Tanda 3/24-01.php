<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 24</title>
    <style>
        pre {
            color: purple;
        }
    </style>
</head>

<body>
    <?php if (!isset($_POST['altura'])) : ?>
        <p>Dibujaremos una piramide</p>
        <form action="24-01.php" method="post">
            <input type="number" name="altura" min="0" max="9">
            <input type="submit" value="Dibujar">
        </form>
    <?php else : ?>
        <?php
        echo "<pre>";
        $h = $_POST['altura'];
        //linea
        for ($i = 1; $i <= $h; $i++) {
            //Espacios
            for ($j = $h; $j > $i; $j--) {
                echo " ";
            }
            //Numeritos bien
            for ($j = 1; $j <= $i; $j++) {
                echo $j;
            }
            //Numeritos al reves
            for ($j = ($i - 1); $j >= 1; $j--) {
                echo $j;
            }
            echo "<br>";
        }
        echo "</pre>";
        ?>
    <?php endif; ?>

</body>

</html>
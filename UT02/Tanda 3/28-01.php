<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 28</title>
</head>

<body>
    <?php //mostrar errores
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ?>
    <p>Calcular el factorial de un número</p>
    <?php if (isset($_POST['numero'])) : ?>
        <?php
        $numero = $_POST['numero'];
        $total = 1;
        echo "<p> $numero! = 1 ";
        for($i = 2; $i<= $numero ; $i++)
        {
            $total = $total * $i;
            echo "* $i ";
        }
        echo "= $total</p>";
        ?>
    <?php else : ?>
        <form action="28-01.php" method="post">
            <input type="number" name="numero" min="0">
            <input type="submit" value="Calcular">
        </form>
    <?php endif; ?>
</body>

</html>
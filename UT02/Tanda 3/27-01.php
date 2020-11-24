<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 27</title>
</head>
<body>
    <?php
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
    ?>
    <p>Programa que cuenta y suma los múltiplos de 3 entre 1 y el número introducido por teclado</p>
    <?php if(isset($_POST['numero'])): ?>
        <?php
        $numero = $_POST['numero'];
        $contador = 0;
        echo "<p>";
        for($i = 3; $i < $numero; $i=$i+3)
        {
            $contador = $contador +1;
            echo " " . $i . " ";
        }
        echo "</p>";
        echo "<p> Y hay $contador múltiplos de 3 </p>";
        ?>
    <?php else: ?>
        <form action="27-01.php" method="post">
            <input type="number" name="numero" min="3">
        </form>
    <?php endif?>
</body>
</html>
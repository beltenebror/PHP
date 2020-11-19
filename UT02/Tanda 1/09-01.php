<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <p>Calcular el volumen de un cono</p>
    <form action="09-01.php" method="post">
        <label>Radio:
            <input type="text" name="radio">
        </label> <br>
        <label>Altura:
            <input type="text" name="altura">
        </label> <br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    echo "<p> El volumen del cono de radio ".$_POST[radio]."cm y de altura " 
    .$_POST[altura]."cm es igual a --> ".
    ((pi()*($_POST[radio]*$_POST[radio])*$_POST[altura])  /3);
    ?>
</body>
</html>
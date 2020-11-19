<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="02-01.php" method="post">
    <label>Cantidad de euros <br>
    <input type="text" name="euros" value="0">
    </label> <br>
    <input type="submit" value="A pesetas">
    </form>
    <?php
    echo "<p>".$_POST[euros]." euros son " .$_POST[euros]*166.386 . " pesetas </p>"
    ?>
</body>
</html>
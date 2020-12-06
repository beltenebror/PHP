<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <form action="08-01.php" method="post">
        <label>
            Horas trabajadas: <input type="text" name="horas" value="0">
        </label> <br>
        <input type="submit" value="Calcular">
    </form>
    <?php
        echo "<p> Recibe 12 euros por hora, ha trabajado ".$_POST['horas'].
        " horas así que su remuneración será de : ".($_POST['horas']*12)."€</p>"
    ?>
</body>
</html>
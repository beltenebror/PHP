<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
<form action="04-01.php" method="post">
<label>
Número uno: <input type="text" name="x"> <br>
</label>
<label>
Número dos: <input type="text" name="y"> <br>
</label>
<input type="submit" value="Calcula">
</form>
    <?php
    echo "<p>". $_POST[x] ." + ". $_POST[y] . " = " .($_POST[x]+$_POST[y]) ."</p>";
    echo "<p>". $_POST[x] ." - ". $_POST[y] . " = " .($_POST[x]-$_POST[y]) ."</p>";
    echo "<p>". $_POST[x] ." * ". $_POST[y] . " = " .($_POST[x]*$_POST[y]) ."</p>";
    echo "<p>". $_POST[x] ." / ". $_POST[y] . " = " .($_POST[x]/$_POST[y]) ."</p>";

    ?>
</body>
</html>
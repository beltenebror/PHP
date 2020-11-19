<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
<form action="03-01.php" method="post">
<label>Cantidad de pesetas <br><input type="text" name="pesetas" > <br>
<input type="submit" value="Calcular">
</label>
</form>
<?php
echo "<p>" . $_POST[pesetas] . " pesetas son " . round($_POST[pesetas]/166.386,2) . " euros </p>"
?>
</body>
</html>
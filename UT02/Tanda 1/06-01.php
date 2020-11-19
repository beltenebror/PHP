<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
<p>Calcular el área de un triangulo, meta los datos en centímetros</p>
<form action="06-01.php" method="post">
<label>
Base: <input type="text" name="base"> <br>
</label>
<label>
Altura: <input type="text" name="altura"> <br>
</label>
<input type="submit" value="Calcular">
</form>

<?php

echo "<p> El área del triángulo con " .$_POST[altura] ."cm de altura y "
     .$_POST[base] ."cm de base es igual a --> " .(($_POST[altura]*$_POST[base])/2)."cm²</p>";

?>

    
</body>
</html>
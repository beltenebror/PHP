<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <p>Calcular los segundos hasta media noche</p>
    <form action="11-02.php" method="post">
        <label>
        Hora actual: <input type="number" name="hora" min="0" max="23">
        </label>
        <br>
        <label>
        Minutos actuales: <input type="number" name="minutos" min="0" max="59">
        </label>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
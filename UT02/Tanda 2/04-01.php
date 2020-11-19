<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
<p>Las horas se pagan a 12 euros, y las horas extras a 16</p>
    <form action="04-02.php" method="post">
        <label>
            Horas trabajadas: <input type="number" name="horas" min="0" max="168">
        </label> <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
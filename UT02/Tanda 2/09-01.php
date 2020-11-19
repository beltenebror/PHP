<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <p>Solución de ecuaciones de segundo grado</p>
    <p>ax<sup>2</sup> + bx + c = 0</p>
<pre>
            -b+-sqr(b<sup>2</sup>-4ac)
     x = -----------------------
                  2a
        </pre>
    <form action="09-02.php" method="post">
    <label>
     a = <input type="number" name="a">
    </label>
    <br>
    <label>
     b = <input type="number" name="b"> 
    </label>
    <br>
    <label>
     c = <input type="number" name="c"> 
    </label>
    <br>
    <input type="submit" value="Calcular">

    </form>
</body>
</html>
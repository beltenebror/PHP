<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>

<body>
    <?php
    if (isset($_POST['altura'])) {
        $h = $_POST['altura'];
        $caracter = $_POST['caracter'];
        echo "<pre>";
        for ($i = $h; $i > 0; $i = $i - 1) { //lineas
            for ($j = 0; $j < ($i); $j++) { //espacios
                echo " ";
            }
            for ($j = 0; $j < ($h - $i+1); $j++) //caracter
            {
                echo $caracter . $caracter;
            }
            echo "<br>";
        }
        echo "</pre>";
    } else { ?>
        <p>Dibujar una píramide</p>
        <form action="19-01.php" method="post">
            <label> Caracter empleado:

                <select name="caracter">
                    <option value="*">*</option>
                    <option value="x">x</option>
                    <option value="#">#</option>
                    <option value="$">$</option>
                    <option value="o">o</option>
                </select>

            </label>
            <br>
            <label> Altura:

                <input type="number" name="altura" min="2">

            </label>
            <br>
            <input type="submit" value="Dibujar!">

        </form>
    <?php
    }
    ?>

</body>

</html>
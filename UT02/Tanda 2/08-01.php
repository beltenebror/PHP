<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
<p>Calcular media de tres notas</p>
<form action="08-01.php" method="post">
<label>Primera nota
<input type="number" name="primera" step="any" min="0" max="10">
</label>
<br>
<label>Segunda nota
<input type="number" name="segunda" step="any" min="0" max="10">
</label>
<br>
<label>Tercera nota
<input type="number" name="tercera" step="any" min="0" max="10">
</label>
<br>
<input type="submit" value="Calcular">
</form>
    <?php
    $resultado = ($_POST[primera]+$_POST[segunda]+$_POST[tercera])/3;
    $texto;
    echo "<p> La media de tus notas es --> " . round($resultado,2) . "</p>";
    if($resultado>=9)
    {
        $texto = "Sobresaliente.";
    }
    elseif($resultado>=7)
    {
        $texto = "Notable.";
    }
    elseif($resultado>=6)
    {
        $texto = "Bien.";
    }
    elseif($resultado>=5)
    {
        $texto = "Suficiente.";
    }
    else
    {
        $texto = "Insuficiente.";
    }
    echo "<p> La nota que aparecerá en el boletín será :" . $texto . "</p>";
    
    ?>
</body>
</html>
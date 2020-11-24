<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <?php 
    if(isset($_POST['base']))
    {
        $base = $_POST['base'];
        $exponente = $_POST['exponente'];
        for($i=1;$i<=$exponente;$i++)
        {
            $total = $base;
            for($j=1;$j<$i;$j++)
            {
                $total = $total*$base;
            }
            echo "<p>".$base ."<sup>". $i. "</sup> = " . $total. "</p>";
        }
    }
    else{ ?>
    <p>Calculemos la potencia:</p>
    <form action="15-01.php" method="post">
    <label>
    Base: <input type="number" name="base">
    </label>
    <br>
    <label>
    Exponente: <input type="number" name="exponente" min="0">
    </label>
    <br>
    <input type="submit" value="Calcular">
    </form>
    <?php } ?>
</body>
</html>
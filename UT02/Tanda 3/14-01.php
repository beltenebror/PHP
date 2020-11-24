<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <?php 
    if(isset($_POST['base']))
    {
        $base = $_POST['base'];
        $exponente = $_POST['exponente'];
        $total = $base ** $exponente;
        echo "<p>".$base ."<sup>". $exponente. "</sup> = " . $total. "</p>";
    }
    else{ ?>
    <p>Calculemos la potencia:</p>
    <form action="14-01.php" method="post">
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
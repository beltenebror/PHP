<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
    <?php
    if(isset($_POST['n1']))
    {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        if($n1>$n2)
        {
            $a = $n1;
            $n1 = $n2;
            $n2 = $a;
        }
        echo "<p><strong>".$n1."</strong>";
        for($i=$n1+7;$i<$n2;$i=$i+7)
        {
            echo "/".$i;
        }
        echo "/"."<strong>".$n2."</strong></p>";
        
    }
    else{ ?>

    <p>Numeros comprendidos entre n1 y n2, de 7 en 7</p>
    <form action="18-01.php" method="post">
        <label>
            Número 1: <input type="number" name="n1">
        </label>
        <br>
        <label>
            Número 2: <input type="number" name="n2">
        </label>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    }
    ?>

</body>
</html>
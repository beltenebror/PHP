<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
    <?php 
    if(isset($_POST['number'])){
        $num = $_POST['number'];
        if($num>=0)
        {
            $total = 0;
            for($i=$num;$i<$num+101;$i++)
            {
                $total = $total+$i;
            }
            echo $total;
        }
        else{
            echo "<p> Número negtivo, invalido</p>";
        }
    }
    else{?>
    
    <p>Suma de los 100 números siguientes :</p>
    <form action="17-01.php" method="post">
    <label>
    Número: <input type="number" name="number">
    </label>
    <input type="submit" value="calcular">
    </form>
    
    <?php
    }
    ?>
    
</body>
</html>
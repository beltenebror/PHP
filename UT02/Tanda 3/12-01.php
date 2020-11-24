<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <?php
    if(isset($_POST['numeros']))
    {
        $a = array($_POST['numeros']);
        $a[0]=0;
        echo $a[0];
        $a[1]=1;
        echo ",".$a[1];
        for($i = 2;$i<$_POST['numeros'];$i++)
        {
            $a[$i]=$a[$i-1]+$a[$i-2];
            echo ",".$a[$i];
        }
    }
    else{
      ?>
      <form action="12-01.php" method="post">
    <label>
    Cantidad de números que quieres:
    <input type="number" name="numeros">
    </label>
    <input type="submit" value="">
    </form>
    <?php
    
    }
    ?>
    
    

</body>
</html>
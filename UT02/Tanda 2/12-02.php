<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 12</title>
</head>
<body>
    <?php
    echo "<p> Esta es tu nota del 1 al 5 </p>";
    $nota = 0;
     for($i = 0; $i<6; $i++)
     {
         if($_POST[$i]=="v")
         {
             $nota++;
         }
     }
     echo "</p>". $nota . "</p>";

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 4</title>
</head>
<body>
    <?php
    $dinero;
    if(($_POST[horas])<=40)
     {
         $dinero = $_POST[horas]*12;
     }
     else{
         $dinero = (40*12)+(($_POST[horas]-40)*16);
     }
     echo $dinero;
    ?>
</body>
</html>
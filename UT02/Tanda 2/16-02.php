<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 16</title>
</head>
<body>
    <?php
    echo "La última cifra de " . $_POST['numero'] . " es: " . $_POST['numero']%10;
    ?>
</body>
</html>
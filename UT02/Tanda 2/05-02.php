<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 5</title>
</head>
<body>
    <?php
    $a = $_POST[a];
    $b = $_POST[b];
    echo "<p>" . $a ."x + " .$b ." = 0" . "</p>";
    echo "<p>" . $a ."x " ." = " . -$b . "</p>";
    echo "<p>" ."x " ." = " . -$b ."/" . $a . "</p>";
    echo "<p>x = " .  (-$b)/$a . "</p>"
    ?>
</body>
</html>
<!DOCTYPE html>
<html>

<body>
    <?php
    $y = 15;

    for ($x = 0; $x <= 12; $x += 2) {
        echo "$x ";
    }

    echo "<br>";

    while ($y >= 0) {
        echo "$y ";
        $y--;
    }

    echo "<br>";

    $x = 12;
    $y = 15;

    do {
        echo "$x, ";
        $x++;
    } while ($x <= $y);
    ?>
</body>

</html>
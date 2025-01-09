<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    for ($i = 0; $i <= 20; $i++) {
        $x = rand(0, 10);
        if ($x >= 0 && $x <= 4) {
            echo "Nota $i: $x ⮕ La nota es Suspenso. <br>";
        } else if ($x >= 5 && $x <= 6) {
            echo "Nota $i: $x ⮕ La nota es Aprobado. <br>";
        } else if ($x >= 7 && $x <= 8) {
            echo "Nota $i: $x ⮕ La nota es Notable. <br>";
        } else if ($x >= 9 && $x <= 10) {
            echo "Nota $i: $x ⮕ La nota es Sobresaliente. <br>";
        }
    }
    ?>
</body>

</html>
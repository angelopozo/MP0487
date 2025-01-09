<!DOCTYPE html>
<html>

<body>
    <?php
    $x = 4;

    switch ($x) {
        case 1:
            echo "Today is Monday.";
            break;
        case 2:
            echo "Today is Tuesday";
            break;
        case 3:
            echo "Today is Wednesday";
            break;
        case 4:
            echo "Today is Thursday";
            break;
        case 5:
            echo "Today is Friday";
            break;
        case 6:
            echo "Today is Saturday";
            break;
        case 7:
            echo "Today is Sunday";
            break;
        default:
            echo "The value does not corresponding with any day.";
            break;
    }
    ?>
</body>

</html>
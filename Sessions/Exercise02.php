<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Sessions 02</title>
</head>

<body>
    <h1>Modify array saved in session</h1>
    <form method="POST">
        <label for="index">Position to modify:</label>
        <select name='index' id='index'>
            <option value='0'>0</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
        </select> <br><br>
        <label for="value">New value:</label>
        <input type="number" id="value" name="value" required> <br><br>
        <button type="submit" name="modify">Modify</button>
        <button type="reset" name="reset">Reset</button>
    </form>
    <form method="post">
        <button type="submit" name="calculate_average">Average</button>
    </form>

    <?php

    if (!isset($_SESSION['numbers'])) {
        $_SESSION['numbers'] = [10, 20, 30];
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['index']) && isset($_POST['value'])) {
            $index = $_POST['index'];
            $value = $_POST['value'];

            $_SESSION['numbers'][$index] = $value;
        }

        if (isset($_POST['calculate_average'])) {
            $average = array_sum($_SESSION['numbers']) / count($_SESSION['numbers']);
        } else if (isset($_POST['modify'])) {
            showCurrentArray();
        }
    }

    if (isset($average)) {
        showCurrentArray();
        echo "<br>Average: $average";
    }

    function showCurrentArray()
    {
        echo "<br>Current array: ";
        for ($i = 0; $i < count($_SESSION['numbers']); $i++) {
            if ($i == count($_SESSION['numbers']) - 1) {
                echo $_SESSION['numbers'][$i] . "<br>";
            } else {
                echo $_SESSION['numbers'][$i] . ", ";
            }
        }
    }
    ?>
</body>

</html>
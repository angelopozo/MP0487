<?php
session_start();

if (!isset($_SESSION['amount1'])) {
    $_SESSION['amount1'] = 0; // Milks amount
}
if (!isset($_SESSION['amount2'])) {
    $_SESSION['amount2'] = 0; // Soft Drink's amount
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Sessions 01</title>
</head>

<body>
    <h1>Supermarket management</h1>

    <form method="post">
        <label for="name">Worker name: </label>
        <input type="text" id="name" name="name">

        <h2>Choose product:</h2>
        <label for='products'>Products: </label>
        <select name='product' id='products'>
            <option value='Soft Drink'>Soft Drink</option>
            <option value='Milk'>Milk</option>
        </select> <br>

        <h2>Product quantity:</h2>
        <input type="number" id="quantity" name="quantity" min="1"><br><br>

        <button type='submit' name='add'>Add</button>
        <button type='submit' name='remove'>Remove</button>
        <button type='reset' name='reset'>Reset</button>
        <button type='submit' name='logout'>Logout</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['add'])) {
            addValuePost();
            if ($_SESSION['product'] == 'Milk') {
                $_SESSION['amount1'] += $_SESSION['quantity'];
            } else {
                $_SESSION['amount2'] += $_SESSION['quantity'];
            }
            inventory();
        } elseif (isset($_POST['remove'])) {
            addValuePost();
            if ($_SESSION['product'] == 'Milk') {
                if ($_SESSION['amount1'] < $_SESSION['quantity']) {
                    echo "<p>There are not enough units of Milk</p>";
                } else {
                    $_SESSION['amount1'] -= $_SESSION['quantity'];
                }
            } else {
                if ($_SESSION['amount2'] < $_SESSION['quantity']) {
                    echo "<p>There are not enough units of Soft Drink</p>";
                } else {
                    $_SESSION['amount2'] -= $_SESSION['quantity'];
                }
            }
            inventory();
        } elseif (isset($_POST['reset'])) {
            $_SESSION['amount1'] = 0;
            $_SESSION['amount2'] = 0;
            inventory();
        } elseif (isset($_POST['logout'])) {
            logout();
        }
    }
    function addValuePost()
    {
        if (isset($_POST['name'])) {
            $_SESSION['name'] = htmlspecialchars($_POST['name']);
        }

        if (isset($_POST['product'])) {
            $_SESSION['product'] = htmlspecialchars($_POST['product']);
        }

        if (isset($_POST['quantity']) && is_numeric($_POST['quantity']) && $_POST['quantity'] > 0) {
            $_SESSION['quantity'] = intval($_POST['quantity']);
        } else {
            $_SESSION['quantity'] = 0;
            echo "<p>Error: The amount must be a number greater than 0.</p>";
        }
    }
    function inventory()
    {
        echo "<h2>Inventory:</h2>";
        echo "<p>worker: {$_SESSION['name']}</p>";
        echo "<p>units milk: {$_SESSION['amount1']}</p>";
        echo "<p>units soft drink: {$_SESSION['amount2']}</p>";
    }

    function logout()
    {
        session_unset();
        session_destroy();
    }

    ?>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Shopping list</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
        }

        input[type=submit] {
            margin-top: 10px;
        }
    </style>
</head>

<?php
session_start();

$_SESSION['list'] = isset($_SESSION['list']) ? $_SESSION['list'] : [];
$name = isset($_POST['name']) ? $_POST['name'] : '';
$quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';
$index = isset($_POST['index']) ? $_POST['index'] : '';
$error = '';
$message = '';
$totalValue = 0;


if (isset($_POST['add'])) {
    if ($name && $quantity && $price != '') {
        $_SESSION['list'][] = ['name' => $name, 'quantity' => $quantity, 'price' => $price];
        $message = "Item added properly.";
    } else {
        $error = "Please fill in all fields.";
    }
}

if (isset($_POST['update'])) {
    if ($name && $quantity && $price && $index != '') {
        $_SESSION['list'][$index] = ['name' => $name, 'quantity' => $quantity, 'price' => $price];
        $message = "Item updated properly.";
    } else {
        $error = "Please fill in all fields.";
    }
}

if (isset($_POST['edit'])) {
    $message = "Item selected properly.";
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $index = $_POST['index'];
}

if (isset($_POST['delete'])) {
    unset($_SESSION['list'][$_POST['index']]);
    $message = "Item deleted properly.";
    $name = '';
    $quantity = '';
    $price = '';
    $index = '';
}

if (isset($_POST['total'])) {
    $message = "Calculating the total cost.";
    foreach ($_SESSION['list'] as $item) {
        $totalValue += $item['quantity'] * $item['price'];
    }
}

?>

<body>
    <h1>Shopping list</h1>
    <form method="post">
        <label for="name">name:</label>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>">
        <br>
        <label for="quantity">quantity:</label>
        <input type="number" name="quantity" id="quantity" value="<?php echo $quantity; ?>" min="1">
        <br>
        <label for="price">price:</label>
        <input type="number" name="price" id="price" value="<?php echo $price; ?>" min="0.01" step="0.01">
        <br>
        <input type="hidden" name="index" value="<?php echo $index; ?>">
        <input type="submit" name="add" value="Add">
        <input type="submit" name="update" value="Update">
        <input type="reset" name="reset" value="Reset">
    </form>
    <p style="color:red;"><?php echo $error; ?></p>
    <p style="color:green;"><?php echo $message; ?></p>
    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>quantity</th>
                <th>price</th>
                <th>cost</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION['list'] as $index => $item) { ?>
                <tr>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td><?php echo $item['price']; ?></td>
                    <td><?php echo $item['quantity'] * $item['price']; ?></td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="name" value="<?php echo $item['name']; ?>">
                            <input type="hidden" name="quantity" value="<?php echo $item['quantity']; ?>">
                            <input type="hidden" name="price" value="<?php echo $item['price']; ?>">
                            <input type="hidden" name="index" value="<?php echo $index; ?>">
                            <input type="submit" name="edit" value="Edit">
                            <input type="submit" name="delete" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="3" align="right"><strong>Total:</strong></td>
                <td><?php echo $totalValue; ?></td>
                <td>
                    <form method="post">
                        <input type="submit" name="total" value="Calculate total">
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</body>
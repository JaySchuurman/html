<?php
session_start();
include 'conn.php';

$stmt = $connection->prepare("SELECT * FROM producten WHERE id=:id");
$stmt->execute(['id' => $_GET['id']]);
$product = $stmt->fetch();
header ('Location: product_update.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
    <from action='product_update_logic.php' name='product_update_logic' method="POST">
        <label>Id van Product: </label>
        <input type="text" name="id_product" value="<?php echo $product['id']; ?>" required>
        <label>Naam van Product: </label>
        <input type="text" name="name" value="<?php echo $product['name']; ?>" required>
        <label>Prijs van Product: </label>
        <input type="text" name="price" value="<?php echo $product['price']; ?>" required>
        <input type="submit" value= "update product">
    </form>
</body>
</html>
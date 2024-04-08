<?php
    include 'conn.php';                                     
    $data = [
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'id' => $_POST['id_product']
    ];
    $sql = "UPDATE producten SET name=:name, price=:price WHERE id=:id";
    $stmt= $connection->prepare($sql);
    $stmt->execute($data);

    header('Location: fooddrinks.php');
?>
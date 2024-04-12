<?php
session_start();
include 'conn.php';

$stmt = $connection->prepare("DELETE FROM producten WHERE id=:id");
$stmt->execute(['id' => $_GET['id']]);
$product = $stmt->fetch();
header ('Location: fooddrinks.php');
?>
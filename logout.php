<?php
session_start();
session_destroy();
header('Location: index.php');
exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGGED OUT</title>
</head>
<body>
    
</body>
</html>
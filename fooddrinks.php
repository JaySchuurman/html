<?php
include "conn.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD AND DRINKS</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" >    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">
    <div class="container3">
        <div class="food-drinks-header-text">
            FOOD AND DRINKS        
        </div>
        <a class="home-button2" href= index.php>
            HOME
        </a>
    </div>
</div> 

<div class="landing-page-2">
    <div class="food-and-drinks-container">
        <div class="row2">
            <div class="food">
                FOOD    
            </div>
            <div class="and">
                AND
            </div>
            <div class="drinks">
                DRINKS
            </div>
        </div>
    </div>

<div class="div">
</div>
    <div class="eten-en-drinken">
    <?php
    $stmt = $connection->query("SELECT * FROM producten WHERE id = 1");
    $user = $stmt->fetch();
    
    // echo $user['name'];
    echo "<br>";

    $stmt = $connection->query("SELECT * FROM producten");

    while ($row = $stmt->fetch()){
        echo '<div class="products-text">';
        echo '<div class="items-container">';
        echo $row['name']."<br>";
        echo $row['description']."<br>";
        echo $row['price']."<br>";
        echo '</div>';        
        echo '</div>';
    }
    ?>
</div>
<div class="allergies-text">
        <p>ANY ALLERGIES WE NEED TO KNOW ABOUT?</p>
        <p>LET US KNOW WHILE MAKING A RESERVATION.</p>
        <p>OR INFORM ONE OF OUR BARISTA'S WHILE ORDERING!</p>
    </div>

<div class="update-delete-products">
    <?php
    $stmt = $connection->prepare("SELECT * FROM producten");
    $stmt->execute();
    $data = $stmt->fetchAll();

    foreach ($data as $row) {
        echo $row['name'];
        echo "<a href='product_update.php?id=".$row['id']."'>Update</a>";
        echo "<a href='product_delete.php?id=".$row['id']."'>Delete</a>";
    }
?>
</div>

<div class="footer2" style="background-image: url(img/coffeebeans.png)"></div>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="index.php">
    <link rel="stylesheet" href="img">
    <link rel="stylesheet" >    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">
        <div class="container6">
            <div class="review-header-text">
                REVIEW PAGE
            </div>
            <a class="home-button4" href="index.php">HOME</a>
        </div>
</div>

<div class="landing-page-5">
    <div class="tip-top-container">
        <div class="tip-top-text">
            <p> Got any TIPS and/or TOPS?</p>
            <p> Feel free to leave a review below!</p>
        </div>
    </div>

    <div class="review-container">
    <form class="form" action="review_succesfull.php" name='review_succesfull' method="POST"> 
    <label>E-mail:</label>
        <input type="text" name='email' placeholder="Enter email" required>
    <label>Name:</label>
        <input type="text" name='username' placeholder="Enter name" required>
    <Label>Review</Label>
        <input type="text" name='review' placeholder="Type your review here" required>
        <input type="submit" value="Submit">
    </form>
    </div>
<div class="footer3" style="background-image: url(img/coffeebeans.png)"></div>
</div>
</body>
</html>
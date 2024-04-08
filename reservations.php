<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESERVATIONS</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="index.php">
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
        <div class="container4">
            <div class="reservations-header-text">
                RESERVATIONS
            </div>
            <a class="home-button3" href="index.php">HOME</a>
        </div>
    </div>

<div class="landing-page-3">
    <div class="reservations-container">
            <div class="information-text-box">
                <h>We are open from 7:00 till 20:00</h>
                <p1>Open on Monday till Friday</p1> 
                <p1>Closed on the weekends and holidays</p1>
            </div>
            <div class="making-reservation-box">
                <div class="reservation-input">
            <form class="form" action="reservation_succesfull.php" name='reservation_succesfull' method="POST">
    <label>E-mail:</label>
        <input type="text" name='email' placeholder="Enter email" required>
    <label>Full Name:</label>
        <input type="text" name='username' placeholder="Enter name" required>
    <label> Date:</label>
        <input type="date" name='date' placeholder="Enter date" required>
    <Label> Time:</label>
        <input type="time" name='time' placeholder="Enter Time" required>
    <label>Party of:</label>
        <input type="number"     name='amount' placeholder="Enter amount of people" required>
    <input type="submit" value="Login">
        </form>
            </div>
                </div>
            <div class="foto-box" style="background-image: url(img/Steaming-.png)"></div>
        
    </div>
<div class="footer2" style="background-image: url(img/coffeebeans.png)"></div>
</div>
</body>
</html>

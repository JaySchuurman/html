<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div class="container2">

        <div class="login-header-text">
            <p>LOGIN</p>
        </div>
        <a class="home-button1" href= index.php>
            HOME
        </a>
    </div>
</div>
<div class="input-container1" style="background-image: url(img/Steaming-.png)">
    <div class="login-input-box">
<form class="form" action="login_logic.php" name='login_logic' method="POST">
    <label>Email:</label>
        <input type="text" name='email' placeholder="Email" required>
    <label>Username:</label>
        <input type="text" name='username' placeholder="Username" required>
    <label>Password:</label>
        <input type="password" name='password' placeholder="Password" required>
    <input type="submit" value="Login">
        </form>
        </div>
</div>
<div class="footer2" style="background-image: url(img/coffeebeans.png)">
    </body>
</html>
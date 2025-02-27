<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require_once '../Controllers/registerController.php';
    $controller = new RegisterController();
    $controller->register();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto - Invisalign</title>
    <link rel="stylesheet" href="../Views/wwwroot/css/style.css">
</head>
<body>
    <header>
    <h2 class="logo">Logo</h2>
        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="../Views/Home/services.php">Services</a>
            <a href="../Views/Home/aboutus.php">About Us</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>
    <main>
        <div class="wrapper">
            <span class="icon-close">
                <ion-icon name="close-outline"></ion-icon>
            </span>
            <div class="form-box login">
                <h2>Login</h2>
                <form action="" method="POST">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" value="test" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox" name="checkboxLogin">Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn_login">Login</button>
                    <div class="login-register">
                        <p>Don't have an account? 
                            <a href="#" class="register-link">Register</a>
                        </p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <h2>Registration</h2>
                <form action="index.php" method="POST">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="text" name="username" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label>
                            <input type="checkbox" name="checkbox" required>I agree to the terms & condicions
                        </label>
                    </div>
                    <button type="submit" name="submit" class="btn_register">Register</button>
                    <div class="login-register">
                        <p>Already have an account? 
                            <a href="#" class="login-link">Login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="../Views/wwwroot/js/site.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
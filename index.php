<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/index.css">
        <title>Login</title>
    </head>

    <body>
        <h1 class="main-title-logo">A Simple Social Network.</h1>

        <div class="form-main-login-container">
            <h2 class="title-login-register">Login</h2>

            <form action="assets/scripts/php/login.php" method="post" class="form-main-login">
                <label for="username" class="lbl-login-register">Username</label>
                <input type="text" name="username" id="username" class="input-login-register-form">

                <label for="username" class="lbl-login-register">Password</label>
                <input type="password" name="password" id="password" class="input-login-register-form">

                <input type="submit" value="Confirm" class="btn-confirm-login-register">
            </form>

            <a type="button" class="change-login-for-register">You don't have an account? Register here.</a>
        </div>

        <div class="form-main-register-container">
            <h2 class="title-login-register">Register</h2>

            <form action="assets/scripts/php/register.php" method="post" class="form-main-login">
                <label for="username" class="lbl-login-register">Username</label>
                <input type="text" name="username" id="username" class="input-login-register-form">

                <label for="username" class="lbl-login-register">Password</label>
                <input type="password" name="password" id="password" class="input-login-register-form">

                <input type="submit" value="Confirm" class="btn-confirm-login-register">
            </form>

            <a type="button" class="change-register-for-login">You have an account? Login here.</a>
        </div>

        <script
        src="https://code.jquery.com/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
        crossorigin="anonymous"></script>

        <script src="assets/scripts/js/index.js"></script>
    </body>
</html>
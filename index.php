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
    <div class="form-main-login-container">
        <h2 class="title-login-register">Login</h2>

        <form action="assets/scripts/php/login.php" method="post" class="form-main-login">
            <label for="username" class="lbl-login-register">Username</label>
            <input type="text" name="username" id="username" class="input-login-register-form">

            <label for="username" class="lbl-login-register">Password</label>
            <input type="password" name="password" id="password" class="input-login-register-form">

            <input type="submit" value="Login" class="btn-confirm-login-register">
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login.Admin.GalleryCafe</title>
    <link rel="stylesheet" href="../style/admin.css?v=<?php echo time() ?>">
</head>

<body>

    <div class="logo">
        <h1>Gallery Cafe<span>Admin</span></h1>
    </div>
    <div class="loginf">
        <h1>Login</h1>
        <form action="actions/verify-login.php" method="post" enctype="multipart/form-data">
            <input type="text" name="username" placeholder="Username or Email" required><br>
            <input type="password" name="password" Placeholder="Password" class="password">
            <input type="submit" name="submit-login" value="Login">

        </form>
        <a href="#">Forgot Password?</a>
    </div>
    <div class="back"></div>
    <div class="footer">
        <p>Copyright © 2024 Gallery Cafe. All Rights Reserved!</p>
    </div>
</body>

</html>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="hero">
        <div class="header">
            <h2>Register</h2>
        </div>

        <form method="post" action="register.php">
            <?php include('error.php'); ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1">
            </div>
            <div class="input-group">
                <label>Confirm password</label>
                <input type="password" name="password_2">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="reg_user">Register</button>
            </div>
            <p>
                Already a member?
            </p>
            <button type="submit" class="btn sign-in" name="reg_user"> <a href="login.php">Sign in</a></button>
        </form>
    </div>

</body>

</html>
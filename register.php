<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <form method="post" action="register.php">
			<?php include('errors.php'); ?>

            <div class="input-box">
            <input type="text" placeholder="Username" id="username" name="username" required value="<?php echo $username; ?>">
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
            <input type="email" placeholder="Email" id="email" name="email" required value="<?php echo $email; ?>">
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="input-box">
                <input type="password" name="password_1" class="input" placeholder="Password">
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="input-box">
            <input type="password" name="password_2" class="input" placeholder="Confirm Password">
                <i class='bx bxs-lock-alt'></i>
            </div>

            <button type="submit" class="btn" name="reg_user">Register</button>

            <div class="register-link">
                <p>Already have an account? <a href="index.php"><u>Sign in</u></a></p>
            </div>
        </form>
    </div>
</body>
</html>
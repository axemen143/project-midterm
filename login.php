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

        <form method="post" action="login.php">
			<?php include('errors.php'); ?>


            <div class="input-box">
                <input type="text" placeholder="Username" id="username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
            <input type="password" name="password" class="input" placeholder="Password">
                <i class='bx bxs-lock-alt'></i>
            </div>

            <button type="submit" class="btn" name="login_user">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="register.php"><u>Register</u></a></p>
            </div>
        </form>
    </div>
</body>
</html>
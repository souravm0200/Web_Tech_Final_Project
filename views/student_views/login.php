<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title> Portal </title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../javascript/login-validation.js" defer></script>
</head>

<body>
    <div class="login-container">
        <form class="login-form" id="login" action="../controllers/LoginCheck.php" method="post">
            <div class="heading-container">
                <h2>SCHOOL PORTAL</h2>
                <p>Sign in with your organizational username</p>
                <?php
                if (isset($_GET['msg']) && $_GET['msg'] == 'error') {
                    echo '<p class="error-user">Wrong username or password</p>';
                }
                ?>
            </div>
            <div class="group login-input">
                <input type="username" name="username" placeholder="User name">
                <span class="error" id="username-error">The User Name field is required.</span>
            </div>
            <div class="group login-input">
                <input type="password" name="password" placeholder="Password">
                <span class="error" id="password-error">The password field is required.</span>
            </div>
            <button class="loginBtn" type="submit" name="submit">Log in</button>
            <div class="group form-link">
                <a href="#">Can't access your account? </a>
            </div>
            <div class="group form-link">
                <a href="r_student.php">Apply </a>
            </div>
        </form>
    </div>
</body>

</html>
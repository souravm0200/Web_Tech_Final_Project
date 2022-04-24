<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../javascript/registration-validation.js" defer></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="reg-container">
        <form class="reg-form" id="registration-form"  method="post" action="../controllers/student_RegCheck.php">
            <div class="heading-container">
                <h2>Admin Registration</h2>
                <p>Please Enter All The Necessary Information</p>
                <?php
                if (isset($_GET['msg']) && $_GET['msg'] == 'error') {
                    echo '<p class="error">ERR</p>';
                }
                ?>
            </div>
            <div class="group">
                <input type="f_name" name="f_name" placeholder="First Name">
                <span class="error" id="f_name-error">The field is required.</span>
            </div>
            <div class="group">
                <input type="l_name" name="l_name" placeholder="Last Name">
                <span class="error" id="l_name-error">The field is required.</span>
            </div>
            <div class="Rgroup">
                <input type="radio" name="gender" value="Male">
                <label>MALE</label>
                <input type="radio" name="gender" value="Female">
                <label>Female</label>
                <input type="radio" name="gender" value="Other">
                <label>Other</label>
            </div>
            <div class="group">
                <input type="username" name="username" placeholder="Username">
                <span class="error" id="username-error">The field is required.</span>
            </div>
            <div class="group ">
                <input type="password" name="password" placeholder="Password">
                <span class="error" id="password-error">The field is required.</span>
            </div>
            <div class="group ">
                <input type="password" id="re_password"  name="re_password" placeholder="Re-Password">
                <span class="error" id="re_password_null-error">The field is required.</span>
                <span class="error" id="re_password-error">Password Missmatch</span>
            </div>
            <div class="group">
                <input type="email" name="email" placeholder="Email">
                <span class="error" id="email-error">The field is required.</span>
            </div>
            <div class="group">
                <input type="phone" name="phone" placeholder="Phone">
                <span class="error" id="phone-error">The field is required.</span>
            </div>
            <div class="group">
                <input type="address" name="address" placeholder="Address">
                <span class="error" id="address-error">The field is required.</span>
            </div>
            <div class="group">
                <input type="file" name="profile_picture">
                <span class="error" id="file_err">Invalid file formate</span> <!-- not implemented yet -->
            </div>
            <button class="RegBtn" type="submit" name="submit">REGISTATION</button>
        </form>
    </div>
</body>

</html>
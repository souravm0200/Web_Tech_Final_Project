<?php
require_once('../controllers/pageAccess.php');
require_once('../controllers/checkJS.php');
if ($_GET['userType'] == 'admin')
    $title = 'Admin Registration';
else if ($_GET['userType'] == 'stuff')
    $title = 'Stuff Registration';
else if ($_GET['userType'] == 'faculty')
    $title = 'Faculty Registration';
else if ($_GET['userType'] == 'student')
    $title = 'Student Registration';
else {
    echo "<center><h2 style='color: red'> Error Invalid User type </h2></center>";
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../javascript/form-validation.js" defer></script>
</head>

<body>
    <div class="reg-container">
        <form class="reg-form" id="form" method="post" action="" enctype='multipart/form-data'>
            <div class="heading-container">
                <h2><?= $title ?></h2>
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
                <span class="error" id="f_name-error_notAlpha">Invalid Name. Only en Alphabets are allowd</span>
            </div>
            <div class="group">
                <input type="l_name" name="l_name" placeholder="Last Name">
                <span class="error" id="l_name-error">The field is required.</span>
                <span class="error" id="l_name-error_notAlpha">Invalid Name. Only en Alphabets are allowd</span>
            </div>
            <div class="Rgroup reg">
                <input type="radio" name="gender" value="Male">
                <label>Male</label>
                <input type="radio" name="gender" value="Female">
                <label>Female</label>
                <input type="radio" name="gender" value="Other">
                <label>Other</label>
                <!-- optional -->
            </div>
            <div class="group">
                <input type="date" name="dob">
                <!-- optional -->
            </div>
            <div class="group">
                <input type="username" name="username" placeholder="Username">
                <span class="error" id="username-error">The field is required.</span>
                <span class="error" id="username-error_notAvailable">Username Not Available</span>
                <span class="error" id="username-error_notAlphaNum">Invalid username. Only alphanumeric Allowd</span>
            </div>
            <div class="group ">
                <input type="password" name="password" placeholder="Password">
                <span class="error" id="password-error">The field is required.</span>
            </div>
            <div class="group ">
                <input type="password" id="re_password" name="re_password" placeholder="Re-Password">
                <span class="error" id="re_password_null-error">The field is required.</span>
                <span class="error" id="re_password-error">Password Missmatch</span>
            </div>
            <div class="group">
                <input type="email" name="email" placeholder="Email">
                <span class="error" id="email-error">The field is required.</span>
                <span class="error" id="email-error_invalid">Invalid E-Mail</span>
            </div>
            <div class="group">
                <input type="phone" name="phone" placeholder="Phone">
                <span class="error" id="phone-error">The field is required.</span>
                <span class="error" id="phone-error_invalid">Invalid phone number</span>
            </div>
            <div class="group">
                <input type="address" name="address" placeholder="Address">
                <span class="error" id="address-error">The field is required.</span>
            </div>
            <div class="group">
                <!-- <input type="file" name="profile_picture">  -->
                <!-- Dont have enough time fix upload by AJAX -->
                <span class="error" id="file_err">Invalid file formate</span> <!-- not implemented yet -->
            </div>
            <input type="hidden" name="userType" value="<?= $_GET['userType'] ?>">
            <button class="RegBtn" type="submit" id="regBtn" name="submit">REGISTATION</button>
        </form>
    </div>
</body>

</html>
<?php
require_once('../controllers/pageAccess.php');
require_once('../model/usersModel.php');
$user = userinfo($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../javascript/form-validation.js" defer></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>faculty profile</title>
</head>

<body>

    <div id="smallScreen"></div>
    <div class="desktop">
        <div class="container">
            <?php include_once('navbar.php') ?>
        </div>
        <div class="main">
            <?php include_once('sideNavbar.html') ?>
            <div class="main-body">
                <form id="form" action="../controllers/editLoginfo.php" method="post">
                    <div class="fullname"> User ID : <?= $user['id'] ?></div>
                    <div class="prfile-flex">
                        <div class="info-text">
                            <div class="edit-users-profile">
                                <label for="username">Username: </label>
                                <input type="username" name="username" value="<?= $user['username'] ?>"></input>
                            </div>
                            <div>
                                <span class="error" id="username-error">The field is required.</span>
                                <span class="error" id="username-error_notAvailable">Username Not Available</span>
                                <span class="error" id="username-error_notAlphaNum">Invalid Username. Only en Alphabets are allowd</span>
                            </div>
                            <div class="edit-users-profile">
                                <label for="password">New Password: </label>
                                <input type="password" name="new_password"></input>
                            </div>
                            <div>
                                <span class="error" id="password-error">The field is required.</span>
                                <span class="error" id="password-error_notAlpha">Invalid Password. Only en Alphabets are allowd</span>
                            </div>
                            <div class="edit-users-profile">
                                <label for="password">Re-Password: </label>
                                <input type="password" name="re_password" id="re_password"></input>
                            </div>
                            <div>
                                <span class="error" id="re_password_null-error">The field is required.</span>
                                <span class="error" id="re_password-error">Password Missmatch</span>
                            </div>
                            <div class="group">
                                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                <button type="submit" name="update" class="editbtn">UPDATE</a></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <script src="../javascript/functionality.js"></script>
</body>

</html>
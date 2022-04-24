<?php
require_once('../controllers/pageAccess.php');
require_once('../model/adminModel.php');
$user = userinfo($_GET['username']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>user profile</title>
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
                <div class="fullname"><?= strtoupper($user['l_name']) ?>, <?= strtoupper($user['f_name']) ?></div>
                <div class="prfile-flex">
                    <div class="info-text">
                        <div class="admin-profile">
                            <label for="id">ID: </label>
                            <?= $user['id'] ?>
                        </div>
                        <div class="admin-profile">
                            <label for="username">Username: </label>
                            <?= $user['username'] ?>
                        </div>
                        <div class="admin-profile">
                            <label for="gender">Gender: </label>
                            <?= $user['gender'] ?>
                        </div>
                        <div class="admin-profile">
                            <label for="email">Email: </label>
                            <?= $user['email'] ?>
                        </div>
                        <div class="admin-profile">
                            <label for="phone">Phone: </label>
                            <?= $user['phone'] ?>
                        </div>
                        <div class="admin-profile">
                            <label for="address">Address: </label>
                            <?= $user['address'] ?>
                        </div>
                    </div>
                    <div class="profile-picture">
                        <img id="profile_picture" src="<?= $user['profile_picture'] ?>" alt="profile picture">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="../javascript/style.js"></script>
</body>

</html>
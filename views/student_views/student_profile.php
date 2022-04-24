<?php
require_once('../model/usersModel.php');
$user = userinfo($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Student Profile</title>
</head>

<body>

    <div id="smallScreen"></div>
    <div class="desktop">
        <div class="container">
            <?php include_once('student_navbar.php') ?>
        </div>
        <div class="main">
            <?php include_once('Student_sideNavbar.html') ?>
            <div class="main-body">
                <div class="fullname"><?= strtoupper($user['l_name']) ?>, <?= strtoupper($user['f_name']) ?></div>
                <div class="prfile-flex">
                    <div class="info-text">
                        <div class="student-profile">
                            <label for="id">ID: </label>
                            <?= $user['id'] ?>
                        </div>
                        <div class="student-profile">
                            <label for="username">Username: </label>
                            <?= $user['username'] ?>
                        </div>
                        <div class="student-profile">
                            <label for="gender">Gender: </label>
                            <?= $user['gender'] ?>
                        </div>
                        <div class="student-profile">
                            <label for="email">Email: </label>
                            <?= $user['email'] ?>
                        </div>
                        <div class="student-profile">
                            <label for="phone">Phone: </label>
                            <?= $user['phone'] ?>
                        </div>
                        <div class="student-profile">
                            <label for="address">Address: </label>
                            <?= $user['address'] ?>
                        </div>
                    </div>
                    <div class="profile-picture">
                        <img src="https://via.placeholder.com/300" alt="profile picture">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="../javascript/functionality.js"></script>
    <script src="../javascript/ajax.js" defer></script>

</body>

</html>
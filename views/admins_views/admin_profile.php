<?php
require_once('../controllers/pageAccess.php');
require_once('../model/usersModel.php');
require_once('../model/salaryModel.php');
$user = userinfo($_GET['username']);
$salary = getSalary($user['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../javascript/functionality.js" defer></script>
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
                        <div class="users-profile">
                            <label for="id">ID: </label>
                            <?= $user['id'] ?>
                        </div>
                        <div class="users-profile">
                            <label for="username">Username: </label>
                            <?= $user['username'] ?>
                        </div>
                        <div class="users-profile">
                            <label for="gender">Gender: </label>
                            <?= $user['gender'] ?>
                        </div>
                        <div class="users-profile">
                            <label for="dob">Date of Birth: </label>
                            <?= $user['dob'] ?>
                        </div>
                        <div class="users-profile">
                            <label for="email">Email: </label>
                            <?= $user['email'] ?>
                        </div>
                        <div class="users-profile">
                            <label for="phone">Phone: </label>
                            <?= $user['phone'] ?>
                        </div>
                        <div class="users-profile">
                            <label for="address">Address: </label>
                            <?= $user['address'] ?>
                        </div>
                        <div class="users-profile <?php if ($user['userType'] == 'student') echo 'hide' ?> ">
                            <label for="salary">Salary: </label>
                            <?= $salary['salary'] ?>
                        </div>
                        <?php
                        if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
                            echo '<div class="success">Profile updated successfully</div>';
                        }
                        if (isset($_GET['msg']) && $_GET['msg'] == 'uploadfail') {
                            echo '<div class="error-up">Profile Picture failed to upload</div>';
                        }
                        ?>
                    </div>
                    <div class="profile-picture">
                        <img id="profile_picture" src="<?= $user['profile_picture'] ?>" alt="profile picture">
                    </div>
                </div>
                <div class="group">
                    <button class="editbtn"><a href="editProfile.php?username=<?= $user['username'] ?>">Edit Profile</a></button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>
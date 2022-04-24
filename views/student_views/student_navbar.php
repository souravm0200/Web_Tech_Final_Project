<?php
$currentUser = userinfo($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <div class="header">
        <div class="topnav">
            <div class="nav-item">
                <a id="logo" href="dashboard.php">PORTAL</a>
                <div class="vl"></div>
                <!-- <a href="#contact">FINANCIANLS</a>
                <a href="#contact">STUFF MANAGEMENTS</a> -->
            </div>
            <div class="nav-item">
                <p id="welcome">WELCOME </p><a id="profile-link" href="profile.php"><?= strtoupper($currentUser['l_name']) ?>, <?= strtoupper($currentUser['f_name']) ?></a>
                <a href="Setting.php">SETTING</a>
                <a href="../controllers/logout.php">LOGOUT</a>
            </div>
        </div>
    </div>
</body>

</html>
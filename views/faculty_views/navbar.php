<?php
require_once('../controllers/pageAccess.php');
require_once('../model/usersModel.php');
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
                <a href="../views/faculty_views/resultList.php">COURSE AND RESULTS</a>
                <a href="f_notice.php">NOTICE</a>
            </div>
            <div class="nav-item">
                <p id="welcome">WELCOME </p><a id="profile-link" href="../views/faculty_views/facultyProfile.php?username=<?=$_SESSION['username']?>"><?=strtoupper($currentUser['l_name'])?>, <?=strtoupper($currentUser['f_name'])?></a>
                <a href="../views/faculty_views/facultySetting.php">SETTING</a>
                <a href="../controllers/logout.php">LOGOUT</a>
            </div>
        </div>
    </div>
</body>

</html>
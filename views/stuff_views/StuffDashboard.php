<?php
require_once('../controllers/pageAccess.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Index</title>
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
                <div class="content-header">
                    <div class="title">
                        <level>Account Information</level>
                    </div>
                    <div class="filter">
                        <select name="filter" id="filter">
                            <option value="faculty">Faculty</option>
                            <option value="student">Student</option>
                        </select>
                    </div>
                </div>
                <div id="userTable"><?php include_once('usersList.php') ?></div>
            </div>
        </div>
    </div>
    </div>
    <script src="../javascript/functionality.js" defer></script>
    <script src="../javascript/ajax.js" defer></script>
</body>

</html>
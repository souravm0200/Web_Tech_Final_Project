<?php
require_once('../controllers/pageAccess.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Registration</title>
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
                <?php
                include_once('../views/faculty_views/addStudent.php')
                ?>
            </div>
        </div>
    </div>
    </div>
   <script src="../javascript/functionality.js" defer></script>
</body>

</html>
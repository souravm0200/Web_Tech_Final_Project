<?php
require_once('../../controllers/pageAccess.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/style.css">
    <title>Manage Test</title>
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
                if (isset($_GET['userType']) && $_GET['userType'] == 'manageTest') {
                    require_once('manageTest.php');
                    if (isset($_GET['msg']) && $_GET['msg'] == 'error') {
                        echo "Reg Error";
                    }
                } else {
                    echo '<center><h2 style="color: red"> PAGE NEED TO BE CONSTRUCT </h2></center>';
                }
                ?>
            </div>
        </div>
    </div>
    </div>
    <script src="../javascript/functionality.js"></script>
</body>

</html>
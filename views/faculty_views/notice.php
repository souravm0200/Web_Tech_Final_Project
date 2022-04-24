<?php
require_once('../controllers/pageAccess.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>faculty Index</title>
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
                        <level>Notice</level>
                    </div>
                    <div class="add-notice-button">
                        <a href="#newNotice"><button>New</button></a>
                    </div>
                </div>
                <div id="notices"><?php include_once('noticeList.php') ?></div>
            </div>
            <div id="newNotice" class="noticeOverlay">
                <div class="popupNot">
                    <h2>Post a new Notice </h2>
                    <div class="content">
                        <div id="n-box">
                            <div><input type="text" name="notice_titel" id="n-title" placeholder="Title"></div>
                            <div><textarea name="notice" id="n-notice" placeholder="Notice"></textarea></div>
                            <div class="Post-btn"><a href="#"><button id="n-post">POST</button></a></div>
                        </div>
                        <a class="close" href="#">&times;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="../javascript/functionality.js" defer></script>
   
</body>

</html>
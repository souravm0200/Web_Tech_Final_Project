<?php
//require_once('../controllers/pageAccess.php');
session_start();
require_once('../model/usersModel.php');
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
            <?php include_once('student_navbar.php') ?>
        </div>
        <div class="main">
            <?php include_once('student_sideNavbar.html') ?>
            <div class="main-body">
                <div class="content-header">
                    <div class="title">
                        <level>Title</level>
                    </div>
                </div>
                
                <div>
                    <?php
                     echo "
                       <table>
                          <tr>
                            <th>Subject</th>
                            <th>Day</th>
                            <th>Date</th>
                            <th>Links</th>
                          </tr>
                         ";
                    require_once('../model/courseModel.php');
                    $meeting = meetings();
                    foreach ($meeting as $meetings) {
                        echo "
                <tr>
                    <td>{$meetings['courseName']}</td>
                    <td>{$meetings['day']}</td>
                    <td>{$meetings['date']}</td>
                    <td><a href='{$meetings['links']}' >{$meetings['links']}</a></td>
                </tr>
                ";
                    } ?>
                
                    


                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="../javascript/functionality.js"></script>
</body>

</html>
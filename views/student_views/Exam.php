<?php
require_once('../controllers/pageAccess.php');
require_once('../model/usersModel.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../javascript/functionality.js" defer></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Exam</title>
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
                        <level>Exam</level>
                    </div>

                </div>

                <div class="admin-table">
                  <?php
                     echo "
                       <table>
                        <tr>
                         <th>Subject</th>
                         <th>Exam Link</th>
                        </tr>
                    ";
                    require_once('../model/courseModel.php');
                    $exams = exam();
                    foreach ($exams as $exam) {
                        echo "
                <tr>
                    <td>{$exam['examName']}</td>
                    <td><a href='{$exam['examLink']}' >{$exam['examLink']}</a></td>
                </tr>
                ";
                    } ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
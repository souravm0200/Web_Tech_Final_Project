<?php
//require_once('../controllers/pageAccess.php');
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
                        <level>Class Schedule</level>
                    </div>

                </div>
                <div class="admin-table">
                    <table>
                        <tr>
                            <th>Subject Name</th>
                            <th>Time</th>
                            <th>Date</th>
                        </tr>
                        <tr>
                            <td>
                                <p style="color:blue;">Math</p>
                            </td>
                            <td>
                                <p style="color:blue;">9:00-9:30</p>
                            </td>
                            <td>
                                <p style="color:blue;">Sunday</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="color:blue;">English</p>
                            </td>
                            <td>
                                <p style="color:blue;">11:00-12:30</p>
                            </td>
                            <td>
                                <p style="color:blue;">Sunday</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="color:blue;">Physics</p>
                            </td>
                            <td>
                                <p style="color:blue;">10:00-11:30</p>
                            </td>
                            <td>
                                <p style="color:blue;">Monday</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="color:blue;">Chemistry</p>
                            </td>
                            <td>
                                <p style="color:blue;">12:00-1:30</p>
                            </td>
                            <td>
                                <p style="color:blue;">Monday</p>
                            </td>
                        </tr>
                    </table>

                </div>

            </div>
        </div>
    </div>
    </div>
    <script src="../javascript/functionality.js"></script>
    
</body>

</html>
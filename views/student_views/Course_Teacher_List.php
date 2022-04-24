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
                <!-- Enter Code here -->
                <div>
                    
                    

                     <?php
                     require_once('../model/courseModel.php');

        
            $student = getRes(userinfo($_SESSION['username'])['id']);
            
        
        echo "<table>
                <tr>
                    <th>Subject Name</th>
                    <th>Result</th>
                </tr>
            ";
        foreach ($student as $course) {
            // code...
        
            echo "
                <tr>
                    <td>{$course['course_name']}</td>
                    <td>{$course['marks']}</td>
                </tr>";
            }
        
        echo "</table>";
        ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="../javascript/functionality.js"></script>
</body>

</html>
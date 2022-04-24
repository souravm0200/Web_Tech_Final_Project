<?php
require_once('../controllers/checkJS.php');
require_once('../controllers/pageAccess.php');
if ($_COOKIE['usertype'] == 'admin')
    require_once('admins_views/admin_profile.php');
else if ($_COOKIE['usertype'] == 'faculty')
    require_once('faculty_views/facultyDashboard.php');
else if ($_COOKIE['usertype'] == 'stuff')
    require_once('stuff_views/stuff_profile.php');
else if ($_COOKIE['usertype'] == 'student')
    require_once('student_views/student_profile.php');
else
    header('location: ../views/login.php');

<?php
require_once('../controllers/checkJS.php');
require_once('../controllers/pageAccess.php');
if ($_COOKIE['usertype'] == 'admin')
    require_once('admins_views/adminSetting.php');
else if ($_COOKIE['usertype'] == 'faculty')
    require_once('faculty_views/facultySetting.php');
else if ($_COOKIE['usertype'] == 'stuff')
    require_once('stuff_views/stuffSetting.php');
else if ($_COOKIE['usertype'] == 'student')
    require_once('student_views/studentSetting.php');
else
    header('location: ../views/login.php');

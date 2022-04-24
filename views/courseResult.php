<?php
require_once('../controllers/pageAccess.php');
require_once('../controllers/checkJS.php');
require_once('../model/usersModel.php');
if ($_COOKIE['usertype'] != 'stuff')
    header('Location: 403.html');
else
    include_once('../views/stuff_views/students_course_result.php');

<?php
require_once('../controllers/pageAccess.php');
require_once('../controllers/checkJS.php');
require_once('../model/usersModel.php');
if ($_COOKIE['usertype'] != 'faculty')
    header('Location: 403.html');
else
    include_once('../views/faculty_views/notice.php');

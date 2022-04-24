<?php
require_once('../controllers/pageAccess.php');
require_once('../controllers/checkJS.php');
require_once('../model/usersModel.php');
if($_COOKIE['usertype'] != 'admin')
    header('Location: 403.html');
else
    include_once('../views/admins_views/Management.php');
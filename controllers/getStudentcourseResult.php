<?php
require_once('pageAccess.php');
require_once('../model/usersmodel.php');
if (isset($_POST['id'])) {
    require_once('../model/courseModel.php');
    $_SESSION['studentsResults'] =  getResInfo($_POST['id']);
    include_once('../views/stuff_views/result_popup.php');
} else {
    echo "err";
}

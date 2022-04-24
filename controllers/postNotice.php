<?php
require_once('../model/noticeModel.php');
require_once('../model/usersModel.php');
if (isset($_POST['title']) && isset($_POST['notice'])) {
    $title = $_POST['title'];
    $notice = $_POST['notice'];
    session_start();
    $id = userinfo($_SESSION['username'])['id'];
    $date = date('Y-m-d');
    if (postAnotice($title, $notice, $id, $date)) {
        include_once('../views/stuff_views/notice_list.php');
    } else {
        echo '<script>alert("Something went wrong")</script>';
    }
}

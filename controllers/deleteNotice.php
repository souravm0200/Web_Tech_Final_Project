<?php
if (isset($_POST['notice_id'])) {
    require_once('../model/noticeModel.php');
    $notice_id = $_POST['notice_id'];
    if (deleteNotice($notice_id)) {
        echo '<script>alert("Notice Deleted")</script>';
    }
}

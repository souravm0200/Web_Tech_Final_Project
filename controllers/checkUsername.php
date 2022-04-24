<?php
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    if ($username != '') {
        require_once '../model/usersModel.php';
        if (userinfo($username)) {
            echo 'false';
        } else {
            echo 'true';
        }
    }
}

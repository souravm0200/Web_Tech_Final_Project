<?php
session_start();
require_once('../model/usersmodel.php');
if ($_POST['username'] != null && $_POST['id'] != null) {
    if($_POST['new_password'] == '')
       $password =  userinfo($_SESSION['username'])['password'];
    else
        $password = $_POST['new_password'];

    require_once('../model/usersModel.php');
    if (updateLoginfo(
        $_POST['username'],
        $password,
        $_POST['id']
    )) {
        $_SESSION['username'] = $_POST['username'];
        $msg = 'success';
    }else{
        $msg = 'fail';
    }
    header("location: ../views/profile.php?username=" . $_POST['username'] . "&&msg={$msg}");
} else {
    echo "null submission";
}

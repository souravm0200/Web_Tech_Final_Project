<?php
require_once('upload.php');
if (
    $_POST['f_name'] != null && $_POST['l_name'] != null &&  $_POST['username'] != null
    && $_POST['email'] != null && $_POST['phone'] != null
) {
    if (!isset($_POST['gender']))
        $_POST['gender'] = 'N/A';
    if (!isset($_POST['dob']))
        $_POST['dob'] = null;
    if ($_POST['address'] == null) {
        $_POST['address'] = 'N/A';
    }
    require_once('../model/usersModel.php');
    require_once('../model/salaryModel.php');
    if (userUpdate(
        $_POST['f_name'],
        $_POST['l_name'],
        $_POST['gender'],
        $_POST['dob'],
        $_POST['username'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['address']
    )) {
        if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['name'] != '') {
            if (upload($_FILES['profile_picture'], '../assets/usersPicture/', userinfo($_POST['username'])['id'])) {
                $upload = true;
                $profile_pic_link = '../assets/usersPicture/' . userinfo($_POST['username'])['id'] . '.jpg';
            } else {
                $upload = false;
                $profile_pic_link = $_POST['pre_profile_picture'];
                //upload fail so use default place holder
            }
        } else {
            $upload = true;
            $profile_pic_link = $_POST['pre_profile_picture'];
        }
        updateProfilePicture(userinfo($_POST['username'])['id'], $profile_pic_link);
        if (userinfo($_POST['username'])['userType'] != 'student') {
            salaryUpdate(userinfo($_POST['username'])['id'], $_POST['salary']);
        }
        if ($upload)
            $msg = 'success';
        else
            $msg = 'uploadfail';
        header("location: ../views/profile.php?username=" . $_POST['username'] . "&&msg={$msg}");
    }
} else {
    echo "null submission";
}

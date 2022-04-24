<?php
require_once('../controllers/pageAccess.php');
require_once('../model/salaryModel.php');
require_once('../model/usersmodel.php');
require_once('upload.php');
if (isset($_POST['userdata'])) {
    $user = JSON_decode($_POST['userdata']);
}
if (
    $user->fname != null && $user->lname != null &&  $user->username != null
    && $user->password != null && $user->email != null && $user->phone != null
) {
    if ($user->gender == '')
        $user->gender = 'N/A';
    if ($user->address == '') {
        $user->address = 'N/A';
    }
    require_once('../model/usersModel.php');
    if (registration(
        $user->usertype,
        $user->fname,
        $user->lname,
        $user->gender,
        $user->dob,
        $user->username,
        $user->password,
        $user->email,
        $user->phone,
        $user->address
    )) {
        if (!isset($_FILES['profile_picture']) || $_FILES['profile_picture']['name'] == '')
            $profile_pic_link = '../assets/default/profile_picture.jpg';
        else {
            if (upload($_FILES['profile_picture'], '../assets/usersPicture/', userinfo($_POST['username'])['id'])) {
                $profile_pic_link = '../assets/usersPicture/' . userinfo($_POST['username'])['id'] . '.jpg';
            } else {
                $profile_pic_link = '../assets/default/profile_picture.jpg';
                //upload fail so use default place holder
            }
        }
        updateProfilePicture(userinfo($user->username)['id'], $profile_pic_link);
        if ($user->usertype != 'student') {
            $sal = mt_rand(300000 * 10, 900000 * 10) / 10;
            salaryInsert(userinfo($user->username)['id'], $sal);
        } {
            //Inster student's initial data.. like -> depertment , subject , balance , etc..
        }
        echo 'true';
        // header('location: ../views/Dashboard.php');
    }
} else {
    echo "null submission";
}

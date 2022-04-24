<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    require_once('../model/usersModel.php');
    if (login($username, $password)) {
        session_start();
        $_SESSION['status'] = true;
        $_SESSION['username'] = $username;
        setcookie('usertype', userinfo($username)['userType'], time () + 60 * 60 * 24 * 365, "/");
        header('location: ../views/Dashboard.php');
    
    } else
        header('location: ../views/login.php?msg=error');
} else
    header('location: ../views/login.php?msg=error');

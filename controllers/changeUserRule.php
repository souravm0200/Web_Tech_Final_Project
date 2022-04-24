<?php
require_once('../model/usersmodel.php');
if (isset($_GET['id']) && isset($_GET['newRule'])) {
    require_once('../model/usersModel.php');
    if (changeUserRule($_GET['id'], $_GET['newRule'])) {
        header("location: ../views/userManagement.php");
    } else {
        echo 'something went worng';
    }
} else {
    header("location: ../views/userManagement.php");
}

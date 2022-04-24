<?php
if (isset($_GET['id']) && isset($_GET['status'])) {
    require_once('../model/payHistoryModel.php');
    if (changeStudentStatus($_GET['id'], $_GET['status'])) {
        header("location: ../views/financials.php");
    } else {
        echo 'something went worng';
    }
} else {
    header("location: ../views/financials.php");
}

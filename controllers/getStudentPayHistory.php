<?php
require_once('pageAccess.php');
require_once('../model/usersmodel.php');
if (isset($_POST['id'])) {
    require_once('../model/payHistoryModel.php');
    $_SESSION['studentFin'] =  getFinInfo($_POST['id']);
    include_once('../views/admins_views/fin_popup.php');
} else {
    echo "err";
}

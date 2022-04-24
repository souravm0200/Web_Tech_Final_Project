<?php
if (isset($_GET['msg']) && $_GET['msg'] == 'noscript') {
    echo "<center><h1 style='color: red'>Please enable javascript ";
    echo "<a href='../portal'>Refresh</a></h1></center>";
    die();
}
require_once('controllers/pageAccess.php');
header('location: views/Dashboard.php');

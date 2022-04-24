<?php
session_start();
unset($_SESSION['status']);
foreach ($_COOKIE as $key => $value)
    setcookie($key, $value, 1, '/');
session_destroy();
header('location: ../views/login.php');

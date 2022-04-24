<?php
session_start();
isset($_SESSION['status']) ?: header('location: login.php');
?>
<?php
$conn = mysqli_connect("localhost" , "root" , "" , "portal");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
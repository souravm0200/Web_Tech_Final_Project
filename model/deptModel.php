<?php
require_once('../controllers/database.php');
function getDept($id)
{
    global $conn;
    $sql = "SELECT * from depertment WHERE id = '{$id}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row)
        return $row;
    else
        return False;
}
function deptInsert($id, $dept)
{
    global  $conn;
    $sql = "INSERT depertment (id,dept)  values ('{$id}','{$dept}')";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}
function deptUpdate($id, $dept)
{
    global  $conn;
    $sql = "UPDATE depertment SET dept = '{$dept}' WHERE id = '{$id}' ";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}

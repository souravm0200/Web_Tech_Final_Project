<?php
require_once('../controllers/database.php');
$date = date("Y-m-d");
function getFinInfo($id)
{
    global $conn;
    $sql = "SELECT * from payment_history WHERE id = '{$id}'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $info[] = $row;
    }
    return $info;
}
function finInfoInsert($id, $amount)
{
    global  $conn, $date;
    $sql = "INSERT payment_history (id,amount,date)  values ('{$id}','{$amount}','{$date}')";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}
function finInfoUpdate($id, $amount)
{
    global  $conn, $date;
    $sql = "UPDATE payment_history SET dept = '{$amount}' , date = '{$date}'WHERE id = '{$id}' ";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}
function changeStudentStatus($id, $status)
{
    global  $conn;
    $sql = "UPDATE payment_history SET status = '{$status}' WHERE id = '{$id}' ";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}


function student_financial($id)
{
    global $conn;
    $sql = "SELECT * FROM student_financial";
    $fin = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($fin)) {
        $info[] = $row;
    }
    return $info;
}
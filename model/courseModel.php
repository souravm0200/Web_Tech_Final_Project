<?php
require_once('../controllers/database.php');
function getResInfo($id)
{
    global $conn;
    $sql = "SELECT * FROM courses WHERE id = {$id}";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $info[] = $row;
    }
    return $info;
}

function getRes($id)
{
    global $conn;
    $sql = "SELECT * FROM courses WHERE id = {$id}";
    $result = mysqli_query($conn, $sql);


    while ($row = mysqli_fetch_assoc($result)) {
        $info[] = $row;
    }
    return $info;
}

function exam()
{
    global $conn;
    $sql = "SELECT * from tests";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $exam[] = $row;
    }
    return $exam;
}

function meetings()
{
    global $conn;
    $sql = "SELECT * from meetings";
    $meeting = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($meeting)) {
        $meetings[] = $row;
    }
    return $meetings;
}
function manageTest($examName, $examLink)
{
    global  $conn;
    $sql = "INSERT INTO tests  (examName,examLink)  values ('{$examName}','{$examLink}')";
    $test = mysqli_query($conn, $sql);
    if ($test) {
        return true;
    } else
        return false;
}

function marks($id, $courseName, $marks)
{
    global  $conn;
    $sql = "INSERT INTO results  (id,courseName,marks)  values ('{$id}','{$courseName}','{$marks}')";
    $test = mysqli_query($conn, $sql);
    if ($test) {
        return true;
    } else
        return false;
}

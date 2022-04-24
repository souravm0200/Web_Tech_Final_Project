<?php
function getSalary($id)
{
    global $conn;
    $sql = "SELECT * from salary WHERE id = '{$id}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row)
        return $row;
    else
        return False;
}
function salaryInsert($id,$salary)
{
    global  $conn;
    $sql = "INSERT salary (id,salary)  values ('{$id}','{$salary}')";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}
function salaryUpdate($id,$salary)
{
    global  $conn;
    $sql = "UPDATE salary SET salary = '{$salary}' WHERE id = '{$id}' ";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}

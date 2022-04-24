<?php
$conn = mysqli_connect("localhost", "root", "", "portal");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
function registration($userType, $f_name, $l_name, $gender, $dob, $username, $password, $email, $phone, $address)
{
    global  $conn;
    $sql = "INSERT INTO usersinfo  (userType,f_name,l_name,gender,dob,username,password,email,phone,address)  values ('{$userType}','{$f_name}', '{$l_name}', '{$gender}','{$dob}','{$username}','{$password}','{$email}','{$phone}','{$address}')";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}
function login($username, $password)
{
    global $conn;
    $sql = "SELECT * FROM usersinfo WHERE username = '{$username}' AND password = '{$password}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        return true;
    } else {
        return false;
    }
}
function userinfo($username)
{
    global $conn;
    $sql = "SELECT * FROM usersinfo WHERE username = '{$username}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row)
        return $row;
    else
        echo false;
}
function userinfobyId($id)
{
    global $conn;
    $sql = "SELECT * FROM usersinfo WHERE id = '{$id}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row)
        return $row;
    else
        return false;
}
function userUpdate($f_name, $l_name, $gender, $dob, $username, $email, $phone, $address)
{
    global  $conn;
    $sql = "UPDATE usersinfo SET f_name = '{$f_name}',l_name = '{$l_name}',gender = '{$gender}',dob = '{$dob}',email = '{$email}',phone = '{$phone}',address = '{$address}' WHERE username = '{$username}' ";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}
function updateLoginfo($username, $password, $id)
{
    global  $conn;
    $sql = "UPDATE usersinfo SET username = '{$username}',password = '{$password}' WHERE id = '{$id}' ";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}
function getAllusers($userType)
{
    global $conn;
    $sql = "SELECT * from usersinfo WHERE userType = '{$userType}'";
    if ($userType == 1)
        $sql = "SELECT * from usersinfo WHERE userType = 'admin' OR userType = 'stuff' OR userType = 'faculty'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
    return $users;
}
function deleteUser($id)
{
    global $conn;
    $sql = "DELETE FROM usersinfo WHERE id = '{$id}'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return true;
    } else
        return false;
}
function changeUserRule($id, $newrule)
{
    global  $conn;
    $sql = "UPDATE usersinfo SET userType = '{$newrule}' WHERE id = '{$id}' ";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}
function updateProfilePicture($id, $profile_picture)
{
    global  $conn;
    $sql = "UPDATE usersinfo SET profile_picture = '{$profile_picture}' WHERE id = '{$id}' ";
    $reg = mysqli_query($conn, $sql);
    if ($reg) {
        return true;
    } else
        return false;
}

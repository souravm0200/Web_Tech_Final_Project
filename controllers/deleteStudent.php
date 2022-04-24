

 <?php
require_once('../model/usersmodel.php');
if (isset($_POST['id']) && isset(userinfobyId($_POST['id'])['username'])) {
    require_once('../model/usersModel.php');
    if (userinfobyId($_POST['id'])['username'])
        $picture = userinfobyId($_POST['id'])['username'];
    $def = userinfobyId($_POST['id'])['profile_picture'];
    if (deleteUser($_POST['id'])) {
        header("location: ../views/faculty_views/studentList.php");
        if ($def != '../assets/default/profile_picture.jpg')
            unlink("../assets/usersPicture/" . $picture  . ".jpg");
    } else {
        echo 'something went worng';
    }
} else {
    header("location: ../views/faculty_views/studentList.php");
}
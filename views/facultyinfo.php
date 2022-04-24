<?php

// if (isset($_POST['addStudent'])) {
//      include_once('faculty_views/registration.php');
// }
if (isset($_GET['deleteStudent'])) {
    include_once('faculty_views/DeleteStudent.php');
}
if (isset($_GET['studentList'])) {
    include_once('faculty_views/studentList.php');
}
if (isset($_GET['studentgroup'])) {
    include_once('faculty_views/studentgroup.php');
}
if (isset($_GET['manageTest'])) {
    include_once('faculty_views/manageTest.php');
}
if (isset($_GET['addMark'])) {
    include_once('faculty_views/addMark.php');
}
if (isset($_GET['checkPaper'])) {
    include_once('faculty_views/checkPaper.php');
}
if (isset($_GET['makeCall'])) {
    include_once('faculty_views/makeCall.php');
}
    if (isset($_GET['chatBox'])) {
    include_once('faculty_views/chatBox.php');
}

<?php
require_once('../model/courseModel.php');
if (
     $_POST['id'] != null &&  $_POST['courseName'] != null && $_POST['marks'] != null)
     {
    
   if(marks(
        $_POST['id'],
        $_POST['courseName'],
        $_POST['marks']
        
    ));
    header("location:../views/faculty_views/facultydashboard.php");
} else {
    echo "null submission";
}

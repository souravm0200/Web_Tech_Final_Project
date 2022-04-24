<?php
require_once('../model/courseModel.php');
if (
     $_POST['examName'] != null &&  $_POST['examLink'] != null)
     {
    
   if(manageTest(
        $_POST['examName'],
        $_POST['examLink']
        
    ));
    header("location:../views/faculty_views/facultydashboard.php");
} else {
    echo "null submission";
}

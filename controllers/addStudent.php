<?php
require_once('../controllers/pageAccess.php');

require_once('../model/usersmodel.php');
require_once('upload.php');
require_once('../model/usersModel.php');

if(isset($_POST['submit'])=="submit"){
    //print_r($_POST);
   
    if (registration(
       
        $_POST['f_name'],
        $_POST['l_name'],
        $_POST['gender'],

        $_POST['username'],
        $_POST['password'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['address']
    )) {
        echo "Succesfull";
    }else {
        echo "null submission";
    }
}
    

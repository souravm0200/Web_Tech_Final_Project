

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Student List</title>
</head>
<body>

<div id="smallScreen"></div>
    <div class="desktop">
        <div class="container">
            <?php include_once('navbar.php') ?>
        </div>
        <tr>
       
        <div class="main">
            <?php include_once('sideNavbar.html') ?>

            <div class="main-body">
                <div class="reg-container">
      <div class="content-header">
                <div class="title">
                    <label >Student List </label>
                </div>
                
            </div>
                 
    <div class="users-table">
        <?php
        if (!isset($_POST['filter'])) {
            require_once('../model/usersModel.php');
            $users = getAllusers('student');
        } else {
            require_once('../model/usersModel.php');
            $users = getAllusers($_POST['filter']);
        }
        echo "
        <table>
        <tr>

            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            
            
        </tr>
        ";
        foreach ($users as $users) {
            echo "
                <tr>
                    <td>{$users['id']}</td>
                    <td><a href='editProfile.php?username={$users['username']}'>{$users['f_name']}  {$users['l_name']}</a></td>
                    <td>{$users['username']}</td>
                    <td>{$users['email']}</td>

                </tr>
                ";
        }
        ?>
    </div>
    <script src="../../javascript/functionality.js" defer></script>
</body>

</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Registration</title>
</head>
<body>
<div id="smallScreen"></div>
    <div class="desktop">
        <div class="container">
            <?php include_once('navbar.php') ?>
        </div>
        <div class="main">
            <?php include_once('sideNavbar.html') ?>
            <div class="main-body">
    
    <div class="users-table">

       <?php
        if (!isset($_POST['filter'])) {
            require_once('../model/courseModel.php');
            $users = getAllusers('student');
        } else {
            require_once('../model/courseModel.php');
            $users = getAllusers($_POST['filter']);
        }
        echo "
        <table>
        <tr>
            <th>ID</th>
            <th>course Name</th>
            <th>Marks</th>
            
        </tr>
        ";
        foreach ($users as $users) {
            echo "
                <tr>
                    <td>{$users['id']}</td>
                    <td>{$users['courseName']}/td>
                    <td>{$users['marks']}</td>

                </tr>
                ";
        }
        ?>
    </div>
    <script src="../../javascript/functionality.js" defer></script>
</body>

</html>

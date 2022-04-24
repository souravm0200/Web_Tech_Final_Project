<?php error_reporting(E_ERROR | E_PARSE); ?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <div class="users-table">
        <?php
        include_once('../model/usersModel.php');
        include_once('../../model/usersModel.php');
        $users = getAllusers(1);
        echo "
        <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Rule</th>
            <th>Email</th>
            <th>Change Rule To</th>
            <th>Action</th>
            
        </tr>
        ";
        session_start();
        foreach ($users as $users) {
            if ($users['username'] == $_SESSION['username'])
                continue;  // skip the current user
            echo "
                <tr id=#" . $users['id'] . ">
                    <td>{$users['id']}</td>
                    <td><a href='profile.php?username={$users['username']}'>{$users['f_name']}  {$users['l_name']}</a></td>
                    <td>{$users['username']}</td>
                    <td>" . strtoupper($users['userType']) . "</td>
                    <td>{$users['email']}</td>
                    <td>
                    <div class='userRule'>
                    " .
                ($users['userType'] == 'admin' ? "" : "<button class='u-cng'><a href='../controllers/changeUserRule.php?id={$users['id']}&newRule=admin'>ADMIN</a></button>")
                . "
                    " .
                ($users['userType'] == 'stuff' ? "" : "<button class='u-cng'><a href='../controllers/changeUserRule.php?id={$users['id']}&newRule=stuff'>STUFF</a></button>")
                . "
                    
                    " .
                ($users['userType'] == 'faculty' ? "" : "<button class='u-cng'><a href='../controllers/changeUserRule.php?id={$users['id']}&newRule=faculty'>FACULTY</a></button>")
                . "
                    </div>
                    </td>
                    <td><div class='userRule del'><a href='#delete'> <button id=" . $users['id'] . " onClick='getIdbyClick(this)'>REMOVE</button> </a></td>
                </tr>
                ";
        }
        ?>
        <div id="delete" class="deleteOverlay">
            <div class="popup">
                <h2>DELTE PERMANENTLY</h2>
                <div class="content">
                    <center>
                        <p>Are you sure you want to delete this user?</p>
                        <div class="del">
                            <a href="#"><input type="submit" id="delAcc" value="Yes"></a>
                        </div>
                    </center>
                    <a class="close" href="#">&times;</a>
                </div>
            </div>
        </div>
    </div>
    <script src="../../javascript/functionality.js"></script>
</body>

</html>
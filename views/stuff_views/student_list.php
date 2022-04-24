<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../../javascript/functionality.js" defer></script>
</head>

<body>
    <div class="users-table">
        <?php
        if ($_SESSION['filter'] == 'allStuffs')
            $users = getAllusers('student');
        else
            $users = getAllusers($_SESSION['filter']);
        echo "
        <table id='student-res'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Depertment</th>
            <th>Status</th>
            <th>Email</th>
        </tr>
        ";
        require_once('../model/usersModel.php');
        require_once('../model/deptModel.php');
        require_once('../model/payHistoryModel.php');
        foreach ($users as $user) {
            $dept = getDept($user['id'])['dept'];
            $status = strtoupper(getFinInfo($user['id'])[0]['status']);
            echo "
                <tr id=#" . $user['id'] . ">
                    <td>{$user['id']}</td>
                    <td><a id='{$user['id']}' href='#results'>{$user['f_name']}  {$user['l_name']}</a></td>
                    <td>{$dept}</td>
                    <td " . (($status == 'ACTIVE') ? 'id=s-status-A' : 'id=s-status-I') . ">" . $status . "</td>" .
                "<td>{$user['email']}</td>
                </tr>
                ";
        }
        echo '</table>';
        ?>
        <div id="results" class="finOverlay">
            <div class="popupFin">
                <h2>Course Results </h2>
                <div class="content">
                    <div id="resTable"></div>
                    <a class="close" href="#">&times;</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
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
        <table id='student-fin'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Depertment</th>
            <th>Status</th>
            <th>Email</th>
            <th>Action</th>
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
                    <td><a id='{$user['id']}' href='#financials'>{$user['f_name']}  {$user['l_name']}</a></td>
                    <td>{$dept}</td>
                    <td " . (($status == 'ACTIVE') ? 'id=s-status-A' : 'id=s-status-I') . ">" . $status . "</td>" .
                "<td>{$user['email']}</td>
                    <td>
                    <div class='userRule'>
                    " .
                ($status == 'ACTIVE' ? "" : "<button class='u-cng'><a href='../controllers/changeStudentStatus.php?id={$user['id']}&status=active'>ACTIVE</a></button>")
                . "
                    " .
                ($status == 'INACTIVE' ? "" : "<button class='u-cng'><a href='../controllers/changeStudentStatus.php?id={$user['id']}&status=inactive'>INACTIVE</a></button>")
                . "
                    </div>
                    </td>
                </tr>
                ";
        }
        echo '</table>';
        ?>
        <div id="financials" class="finOverlay">
            <div class="popupFin">
                <h2>Payment History </h2>
                <div class="content">
                    <div id="paytable"></div>
                    <a class="close" href="#">&times;</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
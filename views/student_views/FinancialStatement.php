<?php
//require_once('../controllers/pageAccess.php');
session_start();
require_once('../model/usersModel.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Index</title>
</head>

<body>
    <div id="smallScreen"></div>
    <div class="desktop">
        <div class="container">
            <?php include_once('student_navbar.php') ?>
        </div>
        <div class="main">
            <?php include_once('student_sideNavbar.html') ?>
            <div class="main-body">
                <div class="content-header">
                    <div class="title">
                        <level>Title</level>
                    </div>
                </div>
                
                <div>
                  <?php
                     

        
            //$financials = getFin(userinfo($_SESSION['username'])['id']);
            
        
        echo "<table>
                <tr>
                    
                    <th>Balance</th>
                    <th>Due</th>
                </tr>
            ";
            require_once('../model/payHistoryModel.php');
            $financials = student_financial();
        foreach ($financials as $student_financial) {
            // code...
        
            echo "
                <tr>
                    <td>{$student_financial['balance']}</td>
                    <td>{$student_financial['due']}</td>
                </tr>";
            }
        
        echo "</table>";
        ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="../javascript/functionality.js"></script>
</body>

</html>
<?php
require_once('../controllers/pageAccess.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Dashboard</title>
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
            <div class="content-header">
                <div class="title">
                    <label>Class Schedule </label>
                </div>
                
            </div>
            <div class="Faculty-table">
                <table>
                    <tr>
                        <th> Course Id </th>
                        <th> Course Name </th>
                        <th> Time </th>
                        <th> Day </th>
                    </tr>
                    <tr>
                        <td>
                            <p>MAT01</p>
                        </td>
                        <td>
                            <p>Mathemstics</p>
                        </td>
                        <td>
                            <p>9:00-9:30 am</p>
                        </td>
                        <td>
                            <p>Sunday</p>
                        </td>
                    </tr>
                        <td>
                            <p>ENG01</p>
                        </td>
                        <td>
                            <p>English</p>
                        </td>
                        <td>
                            <p>10:00-10:30 am</p>
                        </td>
                        <td>
                            <p>Sunday</p>
                        </td>
                    </tr>
                     </tr>
                        <td>
                            <p>PHY02</p>
                        </td>
                        <td>
                            <p>Physics</p>
                        </td>
                        <td>
                            <p>9:00-9:30 am</p>
                        </td>
                        <td>
                            <p>Monday</p>
                        </td>
                    </tr>
                     </tr>
                        <td>
                            <p>CHEM01</p>
                        </td>
                        <td>
                            <p>Chemistry</p>
                        </td>
                        <td>
                            <p>12:00-12:30 am</p>
                        </td>
                        <td>
                            <p>Monday</p>
                        </td>
                    </tr>
                </table>
            </div>








        </div>
    </div>
    </div>
    <script src="../javascript/functionality.js" defer></script>
    <script src="../javascript/ajax.js" defer></script>
</body>

</html>
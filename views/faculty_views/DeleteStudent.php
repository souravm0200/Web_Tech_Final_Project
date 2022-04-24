<?php
require_once('../controllers/pageAccess.php');
require_once('../model/usersModel.php');

$user = userinfo($_GET['username']);

?>
<html>

<head>
    <script src="../javascript/functionality.js" defer></script>
    <script src="../javascript/form-validation.js" defer></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>user profile</title>
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
                <form id="form" action="../controllers/DeleteStudent.php" method="DELETE" enctype="multipart/form-data">
                        <div class="info-text">
                            <div class="Delete-users-profile">
                                <label for="username">UserID: </label>
                                <input type="id" name="id" value="<?= $user['id'] ?>"></input>
                            </div>
                            <div>
                                <span class="error" id="id-error">The field is required.</span>
                                <span class="error" id="id-error_notAlpha">Invalid id are allowd</span>
                            </div>
                            <div>
                                <td><input type="submit" name="submit" value="Delete" /></td>
                            </div>
                             
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>








    
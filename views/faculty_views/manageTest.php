<html>
<head>
<link rel="stylesheet" href="../css/style.css">
    <title>Manage Test</title>
</head>
<body>
     <div class="container">
            <?php include_once('navbar.php') ?>
        </div>
        <div class="main">
            <?php include_once('sideNavbar.html') ?>
            <div class="main-body">
    <div class="reg-container">
        <form class="reg-form" method="post" action="../controllers/testCheck.php">
            <div class="heading-container">
                <h2>Manage Test</h2>
                <p>Please Enter All The Necessary Information</p>
                <?php
                if (isset($_GET['msg']) && $_GET['msg'] == 'error') {
                    echo '<p class="error">ERR</p>';
                }
                ?>
            </div>
            <div class="group">
                <input type="examName" name="examName" placeholder="Subject Name">
                <span class="error" id="examName-error">The field is required.</span>
            </div>
            <div class="group">
                <input type="examLink" name="examLink" placeholder="Course Link">
                <span class="error" id="examLink-error">The field is required.</span>
            </div>
            
            <button class="RegBtn" type="submit" name="submit">Submit</button>
        </form>
    </div>
    <script src="../javascript/functionality.js" defer></script>
</body>

</html>

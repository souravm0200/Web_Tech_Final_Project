<html>
<head>
<link rel="stylesheet" href="../css/style.css">
    <title>Add Mark</title>
</head>
<body>
  <div class="container">
            <?php include_once('navbar.php') ?>
        </div>
        <div class="main">
            <?php include_once('sideNavbar.html') ?>
            <div class="main-body">
    <div class="reg-container">
        <form class="reg-form" method="post" action="../controllers/addMarks.php">
            <div class="heading-container">
                <h2>Add Marks</h2>
                <p>Please Enter All The Necessary Information</p>
                <?php
                if (isset($_GET['msg']) && $_GET['msg'] == 'error') {
                    echo '<p class="error">ERR</p>';
                }
                ?>
            </div>
            <div class="group">
                <input type="id" name="id" placeholder="User id">
                <span class="error" id="id-error">The field is required.</span>
            </div>
            <div class="group">
                <input type="courseName" name="courseName" placeholder="Course Name">
                <span class="error" id="courseName-error">The field is required.</span>
            </div>
            <div class="group">
                <input type="marks" name="marks" placeholder="Course marks">
                <span class="error" id="marks-error">The field is required.</span>
            </div>
            
            <button class="RegBtn" type="submit" name="submit">Submit</button>
        </form>
    </div>
    <script src="../javascript/functionality.js" defer></script>
</body>

</html>

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
                <div class="paypal_button">


                <?php
                  $paypal_url='https://www.paypal.com/us/home';
                  $paypal_id='your_seller_id';
                 ?> 
                  <form action="<?php echo $paypal_url; ?>" method="post" name="frmPayPal1">
                     <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
                     <input type="hidden" name="cmd" value="_xclick">
                     <input type="hidden" name="item_name" value="Sample Product 1">
                     <input type="hidden" name="item_number" value="1">
                     <input type="hidden" name="credits" value="300">
                     <input type="hidden" name="userid" value="1">
                     <input type="hidden" name="amount" value="10">
                     <input type="hidden" name="cpp_header_image" value="http://sample_site.com/images/product1.jpg">
                     <input type="hidden" name="no_shipping" value="1">
                     <input type="hidden" name="currency_code" value="USD">
                     <input type="hidden" name="handling" value="0">
                     <input type="hidden" name="cancel_return" value="http://sample_site.com/cancel.php">
                     <input type="hidden" name="return" value="http://sample_site.com/success.php">
                     <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="1" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="0" height="0">

                   </form>

                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="../javascript/functionality.js"></script>
</body>

</html>
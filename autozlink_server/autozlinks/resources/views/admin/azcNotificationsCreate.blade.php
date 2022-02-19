<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Notifications</title>
        <?php require_once "includes/meta.php"; ?>
        <?php require "components/actions-add-notifications.php"; ?>
    </head>
    <body class="body-bg">
        <?php require_once "includes/header.php"; ?>
        <main class="main">
            <section class="display-none-max-600">
                <?php require_once "includes/sidebar.php"; ?>
            </section> 
            <section class="main-content">
                <div class="display-flex-column">
                    <span class="admin-page-heading">
                        AZCoin/ Notifications
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="users-refund-detail-form fieldset-relative">
                    <span class="admin-page-heading">Create New Coupon</span>
                    <span class="modal-close-r">
                        <a href="azc-coupon-code.php" class="users-refund-modal-close">X</a>
                    </span>
<?php if($message_err != ''){?>
    <div class="alert-danger">
        <strong>Error!</strong> <?php echo $message_err; ?>
    </div>
<?php }?>
                    <div class="display-flex-column azc-input-group">
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="heading" value="<?= $heading ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Caption</span>
                            <span class="force-color-red" ><?= $heading_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <textarea name="message_text" placeholder="Type here"><?= $message_text ?></textarea>
                            <span class="refund-input-legend-two force-color-blue">Message</span>
                            <span class="force-color-red"><?= $message_text_err ?></span>
                        </div>
                    </div>
                    <div class="user-refund-btn">
                        <button type="submit" class="btn force-bg-blue" name="submit_notification_btn" >Create</button>
                    </div>
                </form>
            </section>
        </main>
        
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
            
    </body>
</html>
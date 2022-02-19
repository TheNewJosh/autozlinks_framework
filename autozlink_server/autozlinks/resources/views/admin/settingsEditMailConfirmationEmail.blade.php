<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Settings</title>
        <?php require_once "includes/meta.php"; ?>
        <?php $dt = "1"; require "components/actions-settings-mail-message-edit.php"; ?>
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
                        Edit Email Text
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="display-flex-row-justify-end alert hide">
                    <span><img src="../../assets/img/icons/check-green-bg.svg" /></span>
                    <span class="table-heading-text parallax-slider-message" ><b>Successfully Edited</b></span>
                </div>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="users-refund-detail-form fieldset-relative">
                    <?php require_once "includes/edit-mail-text-menu.php"; ?>
<?php if($message_err != ''){?>
    <div class="alert-danger">
        <strong>Error!</strong> <?php echo $message_err; ?>
    </div>
<?php }?>
                    <div class="display-flex-column azc-input-group">
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="subject" value="<?= $subject ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Subject</span>
                            <span class="force-color-red"><?= $subject_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <textarea type="text" name="body" placeholder="Type here" ><?= $body ?></textarea>
                            <span class="refund-input-legend-two force-color-blue">Body</span>
                            <span class="force-color-red"><?= $body_err ?></span>
                        </div>
                    </div>
                    <div>
                        <p class="table-item-text">Available variables : #username,#useremail,#activationlink,#webadmin</p>
                    </div>
                    <div class="user-refund-btn">
                        <button type="submit" class="btn force-bg-blue" name="submit_mail_message_btn" >Save</button>
                    </div>
                    <div>
                        <p class="table-item-text">You can translate this email by creating the following file ROOT/web_config/locals-email/en_confirmation_email.xml <span class="force-color-blue">Sample Content</span></p>
                    </div>
                </form>
            </section>
        </main>
        
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
        <script>
            var msg = new URL(window.location.href).searchParams.get("msg");
            if(msg === "sucess"){
                $('.alert').addClass("show");
                $('.alert').removeClass("hide");
                $('.alert').addClass("showAlert");
                setTimeout(function(){
                 $('.alert').removeClass("show");
                 $('.alert').addClass("hide");
                },5000);
            }
        </script>
    </body>
</html>
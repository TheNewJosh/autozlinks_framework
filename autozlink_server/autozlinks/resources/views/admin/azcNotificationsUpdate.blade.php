<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Notifications</title>
        @include('admin.layouts.meta')
    </head>
    <body class="body-bg">
        @include('admin.layouts.header')
    <main class="main">
        <section class="display-none-max-600">
            @include('admin.layouts.sidebar')
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
                <div class="display-flex-row-justify-end alert hide" id="alert-save">
                    <span><img src="../../assets/img/icons/check-green-bg.svg" /></span>
                    <span class="table-heading-text parallax-slider-message"><b>Successfully Save</b></span>
                </div>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="users-refund-detail-form fieldset-relative">
                    <input type="hidden" name="dt" value="<?= $dt ?>" />
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
                        <button type="submit" class="btn force-bg-blue" name="submit_notification_btn" >Update</button>
                    </div>
                </form>
            </section>
        </main>
        
        @include('admin.layouts.footer')
        @include('admin.layouts.script')
        <script>
            var msg = new URL(window.location.href).searchParams.get("msg");
            if(msg === "sucess"){
                $('#alert-save').addClass("show");
                $('#alert-save').removeClass("hide");
                $('#alert-save').addClass("showAlert");
                setTimeout(function(){
                 $('#alert-save').removeClass("show");
                 $('#alert-save').addClass("hide");
                },5000);
            }
        </script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Settings</title>
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
                        SMTP Email Settings
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
<?php if($message_err != ''){?>
    <div class="alert-danger">
        <strong>Error!</strong> <?php echo $message_err; ?>
    </div>
<?php }?>
                    <div class="display-flex-column azc-input-group">
                        <div class="input-group-lon fieldset-relative">
                            <select name="stmp_email">
                                <option value="1" <?php if($stmp_email == "1"){ echo "selected"; } ?>>Enable</option>
                                <option value="2" <?php if($stmp_email == "2"){ echo "selected"; } ?>>Disable</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">STMP Email</span>
                            <span class="force-color-red"><?= $stmp_email_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="stmp_host" value="<?= $stmp_host ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">STMP Host</span>
                            <span class="force-color-red"><?= $stmp_host_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="number" name="stmp_port" value="<?= $stmp_port ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">STMP Port</span>
                            <span class="force-color-red"><?= $stmp_port_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="number" name="stmp_timeout" value="<?= $stmp_timeout ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">STMP Timeout</span>
                            <span class="force-color-red"><?= $stmp_timeout_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="stmp_user" value="<?= $stmp_user ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">STMP User</span>
                            <span class="force-color-red"><?= $stmp_user_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="stmp_password" value="<?= $stmp_password ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">STMP Password</span>
                            <span class="force-color-red"><?= $stmp_password_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="charter_set" value="<?= $charter_set ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Charter Set</span>
                            <span class="force-color-red"><?= $charter_set_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="new_line" value="<?= $new_line ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">New Line</span>
                            <span class="force-color-red"><?= $new_line_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="mail_type" value="<?= $mail_type ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Mail Type</span>
                            <span class="force-color-red"><?= $mail_type_err ?></span>
                        </div>
                    </div>
                    <div class="user-refund-btn">
                        <button type="submit" class="btn force-bg-blue" name="submit_setting_smtp_btn">Update</button>
                    </div>
                </form>
            </section>
        </main>
        
        @include('admin.layouts.footer')
        @include('admin.layouts.script')
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
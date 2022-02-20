<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Payment</title>
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
                        Paypal Settings
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
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="users-refund-detail-form fieldset-relative">
<?php if($message_err != ''){?>
    <div class="alert-danger">
        <strong>Error!</strong> <?php echo $message_err; ?>
    </div>
<?php }?>
                    <div class="display-flex-column azc-input-group">
                        <div class="input-group-lon fieldset-relative">
                            <select name="sandbox_mode">
                                <option value="1" <?php if($sandbox_mode == "1"){ echo "selected"; } ?> >Yes</option>
                                <option value="0" <?php if($sandbox_mode == "1"){ echo "selected"; } ?> >No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Sandbox Mode</span>
                            <br/><span class="force-color-red"><?= $sandbox_mode_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="item_name" value="<?= $item_name ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Item Name</span>
                            <br/><span class="force-color-red"><?= $item_name_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="email" name="paypal_email" value="<?= $paypal_email ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Paypal Email</span>
                            <br/><span class="force-color-red"><?= $paypal_email_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="tel" name="phone_number" value="<?= $phone_number ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Phone Number</span>
                            <br/><span class="force-color-red"><?= $phone_number_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <select name="currency">
                                <option value="1" <?php if($currency == "1"){ echo "selected"; } ?>>Nigerian Naira (₦)</option>
                                <option value="2" <?php if($currency == "2"){ echo "selected"; } ?>>US Dollar ($)</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Currency</span>
                            <br/><span class="force-color-red"><?= $currency_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="finish_url" value="<?= $finish_url ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Finish Url</span>
                            <br/><span class="force-color-red"><?= $finish_url_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="cancel_url" value="<?= $cancel_url ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Cancel Url</span>
                            <br/><span class="force-color-red"><?= $cancel_url_err ?></span>
                        </div>
                    </div>
                    <div class="user-refund-btn">
                        <button type="submit" class="btn force-bg-blue" name="submit_payment_paypal_btn">Update</button>
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
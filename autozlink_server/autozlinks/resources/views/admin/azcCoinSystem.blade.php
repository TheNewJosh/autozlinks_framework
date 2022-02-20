<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Coin System</title>
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
                        AZCoin/ Refund
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
                    <span class="table-heading-text parallax-slider-message"><b>Successfully Saved</b></span>
                </div>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="users-refund-detail-form fieldset-relative">
                    <span class="admin-page-heading">Adjust Coin &amp; Naira Value</span>
                    <span class="modal-close-r">
                        <a href="index.php" class="users-refund-modal-close">X</a>
                    </span>
<?php if($message_err != ""){?>
    <div class="alert-danger">
        <strong>Error!</strong> <?php echo $message_err; ?>
    </div>
<?php }?>
                    <div class="display-flex-row">
                        <div class="input-group-two fieldset-relative">
                            <input type="number" name="azc_value" value="<?= $azc_value ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">AZCoin</span>
                            <span class="force-color-red"><?= $azc_value_err ?></span>
                        </div>
                        <div class="azc-arrow-left-right-pointing">
                            <img src="../../assets/img/icons/arrow-left-right-pointing.svg" />
                        </div>
                        <div class="input-group-two fieldset-relative">
                            <input type="number" name="cur_value" value="<?= $cur_value ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Naira</span>
                            <span class="force-color-red"><?= $cur_value_err ?></span>
                        </div>
                    </div>
                    <div class="display-flex-column azc-input-group">
                        <div class="input-group-lon fieldset-relative">
                            <input type="number" name="refferal_amt" value="<?= $refferal_amt ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Set amount of coin for referral link</span>
                            <span class="force-color-red"><?= $refferal_amt_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="number" name="withdrawal_charge" value="<?= $withdrawal_charge ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Withdrawal charges</span>
                            <span class="force-color-red"><?= $withdrawal_charge_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="number" name="escrow_charge" value="<?= $escrow_charge ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Escrow charges</span>
                            <span class="force-color-red"><?= $escrow_charge_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="number" name="kyc_withdrawal_limit" value="<?= $kyc_withdrawal_limit ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">KYC Withdrawal limit</span>
                            <span class="force-color-red"><?= $kyc_withdrawal_limit_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="number" name="gen_withdrawal_limit" value="<?= $gen_withdrawal_limit ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">General Withdrawal limit</span>
                            <span class="force-color-red"><?= $gen_withdrawal_limit_err ?></span>
                        </div>
                    </div>
                    <div class="user-refund-btn">
                        <button type="submit" class="btn force-bg-blue" name="submit_coin_system_btn">Save</button>
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
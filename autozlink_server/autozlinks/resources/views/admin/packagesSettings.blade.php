<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Packages</title>
        <?php require_once "includes/meta.php"; ?>
        <?php require "components/actions-edit-packages.php"; ?>
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
                        Packages Settings
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
<?php } ?>
                    <span class="admin-page-heading">Featured Price Settings</span>
                    <div class="display-flex-column azc-input-group">
                        <div class="input-group-lon fieldset-relative">
                            <select name="fe_enable_feature_pricing">
                                <option value="1" <?php if($fe_enable_feature_pricing == "1"){echo "selected";} ?> >Yes</option>
                                <option value="0" <?php if($fe_enable_feature_pricing == "0"){echo "selected";} ?> >No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Enable Featured Pricing</span>
                            <span class="force-color-red"><?= $fe_enable_feature_pricing_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <select name="fe_enable_paypal">
                                <option value="1" <?php if($fe_enable_paypal == "1"){echo "selected";} ?> >Yes</option>
                                <option value="0" <?php if($fe_enable_paypal == "0"){echo "selected";} ?> >No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Enable Paypal</span>
                            <span class="force-color-red"><?= $fe_enable_paypal_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <select name="fe_enable_bank_transfer">
                                <option value="1" <?php if($fe_enable_bank_transfer == "1"){echo "selected";} ?> >Yes</option>
                                <option value="0" <?php if($fe_enable_bank_transfer == "0"){echo "selected";} ?> >No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Enable Bank Transfer</span>
                            <span class="force-color-red"><?= $fe_enable_bank_transfer_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <textarea name="fe_bank_instruction" placeholder="Type here" >
                                <?= $fe_bank_instruction ?>
                            </textarea>
                            <span class="refund-input-legend-two force-color-blue">Bank Transfer Instruction</span>
                            <span class="force-color-red"><?= $fe_bank_instruction_err ?></span>
                        </div>
                        <span class="admin-page-heading"><br><br>Post Price Settings</span>
                        <div class="input-group-lon fieldset-relative">
                            <select name="po_enable_feature_pricing">
                                <option value="1" <?php if($po_enable_feature_pricing == "1"){echo "selected";} ?> >Yes</option>
                                <option value="0" <?php if($po_enable_feature_pricing == "0"){echo "selected";} ?> >No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Enable Featured Pricing</span>
                            <span class="force-color-red"><?= $po_enable_feature_pricing_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <select name="po_enable_paypal">
                                <option value="1" <?php if($po_enable_paypal == "1"){echo "selected";} ?> >Yes</option>
                                <option value="0" <?php if($po_enable_paypal == "0"){echo "selected";} ?> >No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Enable Paypal</span>
                            <span class="force-color-red"><?= $po_enable_paypal_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <select name="po_enable_bank_transfer">
                                <option value="1" <?php if($po_enable_bank_transfer == "1"){echo "selected";} ?> >Yes</option>
                                <option value="0" <?php if($po_enable_bank_transfer == "0"){echo "selected";} ?> >No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Enable Bank Transfer</span>
                            <span class="force-color-red"><?= $po_enable_bank_transfer_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <textarea name="po_bank_instruction" placeholder="Type here" >
                                <?= $po_bank_instruction ?>
                            </textarea>
                            <span class="refund-input-legend-two force-color-blue">Bank Transfer Instruction</span>
                            <span class="force-color-red"><?= $po_bank_instruction_err ?></span>
                        </div>
                        <span class="admin-page-heading"><br><br>Bank Currency Settings</span>
                        <div class="input-group-lon fieldset-relative">
                            <select name="currency">
                                <option value="1" <?php if($currency == "1"){ echo "selected"; } ?>>Nigerian Naira (₦)</option>
                                <option value="2" <?php if($currency == "2"){ echo "selected"; } ?>>US Dollar ($)</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Bank Currency</span>
                        </div>
                    </div>
                    <div class="user-refund-btn">
                        <button type="submit" class="btn force-bg-blue" name="submit_package_setting_btn" >Update Package Setting</button>
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
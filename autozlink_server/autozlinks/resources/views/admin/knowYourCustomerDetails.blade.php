<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - KYC</title>
        <?php require_once "includes/meta.php"; ?>
        <?php require_once "components/actions-edit-kyc.php"; ?>
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
                        AZCoin/KYC
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="dashboard-azc-area-btn">
                    <div class="display-flex-row-justify-end alert hide" id="alert-save">
                        <span><img src="../../assets/img/icons/check-green-bg.svg" /></span>
                        <span class="table-heading-text parallax-slider-message"><b>Successfully Saved</b></span>
                    </div>
                    <div class="users-mutal-detail-div display-flex-row">
                        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="class-kyc-div">
<?php if($message_err != ""){?>
    <div class="alert-danger">
        <strong>Error!</strong> <?php echo $message_err; ?>
    </div>
<?php }?>
                            <input type="hidden" name="dt" value="<?= $dt ?>" />
                            <input type="hidden" name="img_dis" value="<?= $img_dis ?>" />
                            <input type="hidden" name="kyc_status" value="<?= $kyc_status ?>" />
                            <input type="hidden" name="upload_doc_font" value="<?= $upload_doc_font ?>" />
                            <input type="hidden" name="upload_doc_back" value="<?= $upload_doc_back ?>" />
                            <div class="transact-cat-dis-img-big display-flex-row class-kyc-snap">
                                <span class="display-flex-column">
                                    <sp class="force-color-blue">Snap shot</sp>
                                    <sp><img src="../../assets/img/users-avatar/<?= $img_dis ?>" /></sp>
                                </span>
                                <span><b>KYC Status: </b><sp class="<?= $change_color ?>"><?= $kyc_status ?></sp></span>
                            </div>
                            <div class="display-flex-row class-kyc-input-group">
                                <div class="input-group fieldset-relative">
                                    <input type="text" name="us_username" value="<?= $us_username ?>" placeholder="Type here" readonly />
                                    <span class="edit-ads-input-legend force-color-blue">Username</span>
                                </div>
                                <div class="input-group fieldset-relative">
                                    <input type="text" name="us_email" id="id" value="<?= $us_email ?>" placeholder="Type here" readonly />
                                    <span class="edit-ads-input-legend force-color-blue">Email</span>
                                </div>
                            </div>
                            <div class="display-flex-row class-kyc-input-group">
                                <div class="input-group fieldset-relative">
                                    <input type="text" name="bank_bvn" id="id" value="<?= $bank_bvn ?>" placeholder="Type here" />
                                    <span class="edit-ads-input-legend force-color-blue">BVN</span><br>
                                    <span class="force-color-red"><?= $bank_bvn_err ?></span>
                                </div>
                                <div class="input-group fieldset-relative">
                                    <input type="text" name="doc_type" id="id" value="<?= $doc_type ?>" placeholder="Type here" />
                                    <span class="edit-ads-input-legend force-color-blue">Document Type</span><br>
                                    <span class="force-color-red"><?= $doc_type_err ?></span>
                                </div>
                            </div>
                            <div class="display-flex-row class-kyc-input-group">
                                <div class="class-kyc-input-group-img">
                                    <img src="../../assets/img/user-particular/<?= $upload_doc_font ?>" />
                                </div>
                                <div class="class-kyc-input-group-img">
                                    <img src="../../assets/img/user-particular/<?= $upload_doc_back ?>" />
                                </div>
                            </div>
                            <div class="class-kyc-button">
                                <button type="submit" class="btn force-bg-blue" name="submit_kyc_btn" >Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
        
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
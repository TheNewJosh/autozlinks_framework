<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Notifications</title>
        <?php require_once "includes/meta.php"; ?>
        <?php require_once "components/actions-aaa-select.php"; ?>
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
                        AZCoin/Notifications
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
                    <div class="display-flex-row">
                        <a href="azc-notifications-create.php" class="btn force-bg-blue">Create</a>
                        <a href="#" class="btn force-bg-red">Delete</a>
                    </div>
                    <div class="transact-cat-table-div">
<?php for ($i=0; $i <count($dataNotificationAll) ; $i++){  ?>
                        <div class="display-flex-row-no-justify user-table-space">
                            <div class="azc-notification-img-div">
                                <a href="azc-notifications-update.php?id=<?= $dataNotificationAll[$i]['id']; ?>">
                                    <img src="../../assets/img/icons/notification-speaker.svg" />
                                </a>
                            </div>
                            <div class="display-flex-column azc-text-width-space">
                                <span class="table-heading-text" ><b><?= $dataNotificationAll[$i]['heading']; ?></b></span>
                                <span><p class="table-item-text"><?= $dataNotificationAll[$i]['message_text']; ?></p></span>
                                <span class="table-item-text azc-move-right"><?= $dataNotificationAll[$i]['datetime']; ?></span>
                            </div>
                        </div>
<?php } ?>
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
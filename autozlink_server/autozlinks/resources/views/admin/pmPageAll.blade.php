<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Page</title>
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
                        All Pages
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
                    <div class="display-flex-row-justify-end alert hide" id="alert-delete">
                        <span><img src="../../assets/img/icons/check-green-bg.svg" /></span>
                        <span class="table-heading-text parallax-slider-message"><b class="force-color-red">Successfully Deleted</b></span>
                    </div>
                    <div class="transact-cat-table-div">
<?php for ($i=0; $i <count($dataPageMenuAll) ; $i++){  ?>
                        <div class="user-table-space">
                            <div class="display-flex-row parallax-slider-des-divs">
                                <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                    <span class="table-heading-text" ><b>Title</b></span>
                                    <span class="table-item-text"><?= $dataPageMenuAll[$i]['title']; ?></span>
                                </div>
                                <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                    <span class="table-heading-text" ><b>Description</b></span>
                                    <span class="user-dis-name table-item-text"><?= $dataPageMenuAll[$i]['meta_description']; ?></span>
                                </div>
                                <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                    <span class="table-heading-text" ><b>Status</b></span>
                                    <span class="table-item-text force-color-green"><?= $postStatus[$dataPageMenuAll[$i]['status']]; ?></span>
                                </div>
                                <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                    <span class="">
                                        <div class="drop-down-menu">
                                            <label for="action-parallax-slider-<?= $i ?>" class="edit-ads-foot-action"><i class="fas fa-cog"></i> Action <i class="fas fa-chevron-down"></i></label>
                                            <input type="checkbox" id="action-parallax-slider-<?= $i ?>" name="action-parallax-slider">
                                            <ul class="nav-item-sub-ul">
                                                <li class="nav-item-sub">
                                                    <a href="pm-page-update?id=<?= $dataPageMenuAll[$i]['id']; ?>">
                                                        <i class="fas fa-edit"></i>Edit
                                                    </a>
                                                </li>
                                                <li class="nav-item-sub nav-item-sub-line">
                                                    <a href="#" class="force-color-red" id="click-modal-delete">
                                                    <i class="fas fa-trash-alt"></i>Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </span>
                                </div>
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
            if(msg === "sucess-del"){
                $('#alert-delete').addClass("show");
                $('#alert-delete').removeClass("hide");
                $('#alert-delete').addClass("showAlert");
                setTimeout(function(){
                 $('#alert-delete').removeClass("show");
                 $('#alert-delete').addClass("hide");
                },5000);
            }
        </script>
    </body>
</html>
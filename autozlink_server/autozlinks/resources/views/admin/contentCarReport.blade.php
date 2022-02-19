<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Users</title>
        <?php require_once "includes/meta.php"; ?>
        <?php
            $dt = "1";
            require_once "components/actions-aaa-select.php"; 
        ?>
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
                        Report Cars
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="dashboard-azc-area-btn">
                    <div class="display-flex-row-justify-end">
                          <a href="#" class="edit-ads-foot-action"><i class="fas fa-cog"></i> Action <i class="fas fa-chevron-down"></i></a>
                    </div>
                    <div class="transact-cat-table-div">
<?php for ($i=0; $i <count($dataContentAll) ; $i++){  ?>
                        <div class="display-flex-row-no-justify user-table-space-no-padding">
                            <div class="parallax-slider-img-div">
                                <a href="parallax-slider-update.php"><img src="../../assets/img/post-car/feature-image/<?= $dataContentAll[$i]['featured_img']; ?>" class="content-car-img" /></a>
                            </div>
                            <div class="display-flex-row parallax-slider-des-divs">
                                <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                    <span class="table-heading-text" ><b>Title</b></span>
                                    <span class="user-dis-name-lag table-item-text content-car-margin-b"><?= $dataContentAll[$i]['title']; ?></span>
                                    <span class="table-heading-text" ><b>Days Left</b></span>
                                    <span class="user-dis-name table-item-text content-car-margin-b">1</span>
                                </div>
                                <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                    <span class="table-heading-text" ><b>Car Categories</b></span>
                                    <span class="user-dis-name table-item-text content-car-margin-b"><?= $objadmin->getCategoriesID($pdo, $dataContentAll[$i]['category'])['title'] ?></span>
                                    <span class="table-heading-text" ><b>Days Left</b></span>
                                    <span class="user-dis-name table-item-text content-car-margin-b">12</span>
                                </div>
                                <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                    <span class="table-heading-text" ><b>Email</b></span>
                                    <span class="user-dis-name table-item-text content-car-margin-b"><?= $dataContentAll[$i]['email']; ?></span>
                                    <span class="table-heading-text" ><b>Featured</b></span>
                                    <span class="user-dis-name table-item-text content-car-margin-b force-color-green"><?= $statusYN[$dataContentAll[$i]['featured']]; ?></span>
                                </div>
                                <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                    <span class="table-heading-text" ><b>City</b></span>
                                    <span class="user-dis-name table-item-text content-car-margin-b"><?= $dataContentAll[$i]['city']; ?></span>
                                    <span class="content-car-margin-tb">
                                        <div class="parallax-slider-des-btn drop-down-menu">
                                    <label for="action-parallax-slider-<?= $i ?>" class="edit-ads-foot-action"><i class="fas fa-cog"></i> Action <i class="fas fa-chevron-down"></i></label>
                                    <input type="checkbox" id="action-parallax-slider-<?= $i ?>" name="action-parallax-slider">
                                    <ul class="nav-item-sub-ul">
                                        <li class="nav-item-sub"><a href="parallax-slider-update.php?slider_id=<?= $dataContentAll[$i]['id']; ?>"><i class="fas fa-edit"></i>Edit</a></li>
                                        <li class="nav-item-sub nav-item-sub-line">
                                            <a href="#" class="force-color-red" id="click-modal-delete" data-slider-title="<?= $dataContentAll[$i]['title'] ?>" data-href="components/actions-aaa-delete.php?parallax-slider-slide_id=<?= $dataContentAll[$i]['id'] ?>&parallax-slider-img_url=<?= $dataContentAll[$i]['featured_img'] ?>">
                                            <i class="fas fa-trash-alt"></i>Delete
                                            </a>
                                        </li>
                                        <li class="nav-item-sub nav-item-sub-line"><a href="#">View all reviews</a></li>
                                        <li class="nav-item-sub nav-item-sub-line"><a href="#">Remove from featured</a></li>
                                        <li class="nav-item-sub nav-item-sub-line"><a href="#">Renew featured</a></li>
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
        </script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Packages</title>
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
                        All Packages
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
<?php for ($i=0; $i <count($dataPackageAll) ; $i++){  ?>
                        <div class="user-table-space">
                            <div class="display-flex-row parallax-slider-des-divs">
                                <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                    <span class="table-heading-text" ><b>Title</b></span>
                                    <span class="table-item-text content-car-margin-b"><?= $dataPackageAll[$i]['title'] ?></span>
                                    <span class="table-heading-text" ><b>Expiration Time(Days)</b></span>
                                    <span class="table-item-text content-car-margin-b"><?= $dataPackageAll[$i]['expiration_time'] ?></span>
                                </div>
                                <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                    <span class="table-heading-text" ><b>Price(USD)</b></span>
                                    <span class="table-item-text content-car-margin-b">$ <?= $dataPackageAll[$i]['price'] ?></span>
                                    <span class="table-heading-text" ><b>Featured Expiration Time(Days)</b></span>
                                    <span class="table-item-text content-car-margin-b"><?= $dataPackageAll[$i]['featured_expiration_time'] ?></span>
                                </div>
                                <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                    <span class="table-heading-text" ><b>Type</b></span>
                                    <span class="table-item-text content-car-margin-b"><?= $dataPackageAll[$i]['type'] ?></span>
                                    <span class="table-heading-text" ><b>Max Gallery Photo</b></span>
                                    <span class="table-item-text content-car-margin-b"><?= $dataPackageAll[$i]['max_gallery_photos'] ?></span>
                                </div>
                                <div class="parallax-slider-des-div content-car-margin-s drop-down-menu">
                                    <label for="action-parallax-slider-<?= $i ?>" class="edit-ads-foot-action"><i class="fas fa-cog"></i> Action <i class="fas fa-chevron-down"></i></label>
                                    <input type="checkbox" id="action-parallax-slider-<?= $i ?>" name="action-parallax-slider">
                                    <ul class="nav-item-sub-ul">
                                        <li class="nav-item-sub"><a href="packages-update.php?id=<?= $dataPackageAll[$i]['id']; ?>"><i class="fas fa-edit"></i>Edit</a></li>
                                        <li class="nav-item-sub nav-item-sub-line">
                                            <a href="#" class="force-color-red" id="click-modal-delete" >
                                            <i class="fas fa-trash-alt"></i>Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
<?php } ?>
                    </div>
                </div>
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
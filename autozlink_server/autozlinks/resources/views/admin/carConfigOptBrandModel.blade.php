<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Car Config</title>
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
                        Brand Models
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="display-flex-row-no-justify">
                    <div class="content-location-area-btn">
                        <div class="content-car-loc-btn">
                              <a href="#" class="btn dashboard-small-text">New Brand</a>
                        </div>
                        <div class="transact-cat-table-div">
<?php 
    $dataBrandModelAll = $objadmin->getBrandModelAll($pdo, "brand"); 
    for ($i=0; $i <count($dataBrandModelAll) ; $i++){ 
?>
                            <div class="user-table-space">
                                <div class="display-flex-row parallax-slider-des-divs">
                                    <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                        <span class="table-heading-text" ><b>Name</b></span>
                                        <span class="table-item-text"><?= $dataBrandModelAll[$i]['name']; ?></span>
                                    </div>
                                    <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                        <span class="table-heading-text" ><b>Type</b></span>
                                        <span class="table-item-text">Brand</span>
                                    </div>
                                    <div class=" parallax-slider-des-div content-car-margin-s">
                                        <div class="table-heading-text content-car-loc-a"><a href="#" class="force-color-blue">See Model</a></div>
                                        <div class="drop-down-menu">
                                            <label for="action-brand-<?= $i ?>" class="edit-ads-foot-action"><i class="fas fa-cog"></i> Action <i class="fas fa-chevron-down"></i></label>
                                            <input type="checkbox" id="action-brand-<?= $i ?>" name="action-parallax-slider">
                                            <ul class="nav-item-sub-ul">
                                                <li class="nav-item-sub"><a href="parallax-slider-update.php?slider_id=<?= $dataBrandModelAll[$i]['id']; ?>"><i class="fas fa-edit"></i>Edit</a></li>
                                                <li class="nav-item-sub nav-item-sub-line">
                                                    <a href="#" class="force-color-red" id="click-modal-delete">
                                                    <i class="fas fa-trash-alt"></i>Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php } ?>    
                        </div>
                    </div>
                    <div class="content-location-area-btn">
                        <div class="content-car-loc-btn">
                              <a href="#" class="btn dashboard-small-text force-bg-green">Add Model</a>
                        </div>
                        <div class="transact-cat-table-div">
<?php 
    $dataBrandModelAll = $objadmin->getBrandModelAll($pdo, "model"); 
    for ($i=0; $i <count($dataBrandModelAll) ; $i++){ 
?>
                            <div class="user-table-space">
                                <div class="display-flex-row parallax-slider-des-divs">
                                    <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                        <span class="table-heading-text" ><b>Name</b></span>
                                        <span class="table-item-text"><?= $dataBrandModelAll[$i]['name']; ?></span>
                                    </div>
                                    <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                        <span class="table-heading-text" ><b>Type</b></span>
                                        <span class="table-item-text">Model</span>
                                    </div>
                                    <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                        <span class="table-heading-text" ><b>Parent</b></span>
                                        <span class="table-item-text"><?= $objadmin->getBrandModelID($pdo, $dataBrandModelAll[$i]['parent'])['name'] ?></span>
                                    </div>
                                    <div class="drop-down-menu">
                                        <label for="action-model-<?= $i ?>" class="edit-ads-foot-action"><i class="fas fa-cog"></i> Action <i class="fas fa-chevron-down"></i></label>
                                        <input type="checkbox" id="action-model-<?= $i ?>" name="action-parallax-slider">
                                        <ul class="nav-item-sub-ul">
                                            <li class="nav-item-sub"><a href="parallax-slider-update.php?slider_id=<?= $dataBrandModelAll[$i]['id']; ?>"><i class="fas fa-edit"></i>Edit</a></li>
                                            <li class="nav-item-sub nav-item-sub-line">
                                                <a href="#" class="force-color-red" id="click-modal-delete">
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
                </div>
            </section>
        </main>
        
        @include('admin.layouts.footer')
        @include('admin.layouts.script')
    </body>
</html>
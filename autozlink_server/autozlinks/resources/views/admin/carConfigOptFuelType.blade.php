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
                        Fuel Types
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="display-flex-row-no-justify">
                    <div class="">
                        <div class="content-car-loc-btn">
                              <a href="#" class="btn dashboard-small-text">Create Fuel Type</a>
                        </div>
                        <div class="transact-cat-table-div display-flex-row">
<?php for ($i=0; $i <count($dataFuelTypeAll) ; $i++){  ?>
                            <div class="user-table-space">
                                <div class="display-flex-row parallax-slider-des-divs">
                                    <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                        <span class="table-heading-text" ><b>Name</b></span>
                                        <span class="table-item-text"><?= $dataFuelTypeAll[$i]['title'] ?></span>
                                    </div>
                                    <div class="drop-down-menu">
                                        <label for="action-parallax-slider-<?= $i ?>" class="edit-ads-foot-action"><i class="fas fa-cog"></i> Action <i class="fas fa-chevron-down"></i></label>
                                        <input type="checkbox" id="action-parallax-slider-<?= $i ?>" name="action-parallax-slider">
                                        <ul class="nav-item-sub-ul">
                                            <li class="nav-item-sub"><a href="parallax-slider-update.php?slider_id=<?= $dataFuelTypeAll[$i]['id']; ?>"><i class="fas fa-edit"></i>Edit</a></li>
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
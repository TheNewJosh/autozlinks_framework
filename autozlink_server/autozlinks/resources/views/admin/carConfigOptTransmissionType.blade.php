<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Car Config</title>
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
                        Transmission Types
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="display-flex-row-no-justify">
                    <div class="n">
                        <div class="content-car-loc-btn">
                              <a href="#" class="btn dashboard-small-text">Create Transmission Type</a>
                        </div>
                        <div class="transact-cat-table-div display-flex-row">
<?php for ($i=0; $i <count($dataTransmissionAll) ; $i++){  ?>
                            <div class="user-table-space">
                                <div class="display-flex-row parallax-slider-des-divs">
                                    <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                        <span class="table-heading-text" ><b>Name</b></span>
                                        <span class="table-item-text"><?= $dataTransmissionAll[$i]['title'] ?></span>
                                    </div>
                                    <div class="drop-down-menu">
                                        <label for="action-parallax-slider-<?= $i ?>" class="edit-ads-foot-action"><i class="fas fa-cog"></i> Action <i class="fas fa-chevron-down"></i></label>
                                        <input type="checkbox" id="action-parallax-slider-<?= $i ?>" name="action-parallax-slider">
                                        <ul class="nav-item-sub-ul">
                                            <li class="nav-item-sub"><a href="parallax-slider-update.php?slider_id=<?= $dataTransmissionAll[$i]['id']; ?>"><i class="fas fa-edit"></i>Edit</a></li>
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
        
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
    </body>
</html>
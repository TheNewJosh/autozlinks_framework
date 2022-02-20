<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Parallax</title>
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
                    <div class="users-mutal-detail-div">
                        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="class-kyc-div" enctype="multipart/form-data">
                            <div class="display-flex-row-no-justify parallax-slider-upd-btn">
                                <span class="parallax-status">
                                    <input type="radio" id="status1" name="status" value="1"  <?= $status1 ?> />
                                    <label for="status1" class="btn force-bg-blue parallax-slider-upd-btn-a">Draft</label>
                                </span>
                                <span class="parallax-status">
                                    <input type="radio" id="status2" name="status" value="2"  <?= $status2 ?> />
                                    <label for="status2" class="btn force-bg-green parallax-slider-upd-btn-a">Publish</label>
                                </span>
                            </div>
<?php if($message_err != ''){?>
    <div class="alert-danger">
        <strong>Error!</strong> <?php echo $message_err; ?>
    </div>
<?php }?>
                            <div class="display-flex-row-no-justify class-kyc-input-group">
                                <div class="display-flex-column">
                                    <span class="parallax-slider-upd-span">
                                        <img src="../../assets/img/icons/picture.svg" class="parallax-slider-upd-img" />
                                    </span>
                                    <span class="parallax-slider-upd-span">
                                        <sp class="table-item-text">(Min 300 x 260)</sp>
                                    </span>
                                    <span class="parallax-slider-upd-span">
                                        <input type="file" name="image_link" placeholder="Type here" accept=".png, .jpeg, .jpg, .gif" />
                                    </span>
                                    <span class="force-color-red"><?= $image_link_err ?></span>
                                </div>
                                <div class="display-flex-column">
                                    <div class="input-group fieldset-relative">
                                        <input type="text" name="title" value="<?= $title ?>" placeholder="Type here" />
                                        <span class="edit-ads-input-legend force-color-blue">Title</span>
                                        <span class="force-color-red"><?= $title_err ?></span>
                                    </div>
                                    <div class="input-group fieldset-relative">
                                        <textarea type="text" name="description" placeholder="Type here"><?= $description ?></textarea>
                                        <span class="edit-ads-input-legend force-color-blue">Description</span>
                                        <span class="force-color-red"><?= $description_err ?></span>
                                    </div>
                                    <div class="input-group fieldset-relative">
                                        <input type="number" name="slider_order" value="<?= $slider_order ?>" placeholder="Type here" />
                                        <span class="edit-ads-input-legend force-color-blue">Slider Order</span>
                                        <span class="force-color-red"><?= $slider_order_err ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="class-kyc-button">
                                <button type="submit" name="submit_parallex_btn" class="btn force-bg-blue">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        
        @include('admin.layouts.footer')
        @include('admin.layouts.script')
    </body>
</html>
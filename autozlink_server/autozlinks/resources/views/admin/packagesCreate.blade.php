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
                        Packages
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="users-refund-detail-form fieldset-relative">
                    <span class="admin-page-heading">Create New Package</span>
<?php if($message_err != ''){?>
    <div class="alert-danger">
        <strong>Error!</strong> <?php echo $message_err; ?>
    </div>
<?php }?>
                    <div class="display-flex-column azc-input-group">
                        <div class="input-group-lon fieldset-relative">
                            <select name="type">
                                <option>Select Package</option>
                                <option value="post_package" <?php if($type == "post_package"){echo "selected";} ?> >Post Package</option>
                                <option value="featured_package" <?php if($type == "featured_package"){echo "selected";} ?> >Featured Package</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Type</span>
                            <span class="force-color-red"><?= $type_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="title" value="<?= $title ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Title</span>
                            <span class="force-color-red"><?= $title_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="number" name="price" value="<?= $price ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Price</span>
                            <span class="force-color-red"><?= $price_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="number" name="instagram_price" value="<?= $instagram_price ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Instagram Ads Price</span>
                            <span class="force-color-red"><?= $instagram_price_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="number" name="fb_instagram_price" value="<?= $fb_instagram_price ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Fb &amp; Instagram Ads Price</span>
                            <span class="force-color-red"><?= $fb_instagram_price_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="number" name="expiration_time" value="<?= $expiration_time ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Expiration Time(Days)</span>
                            <span class="force-color-red"><?= $expiration_time_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="number" name="featured_expiration_time" value="<?= $featured_expiration_time ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Featured Expiration Time(Days)</span>
                            <span class="force-color-red"><?= $featured_expiration_time_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="number" name="max_gallery_photos" value="<?= $max_gallery_photos ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Max Gallery Photo</span>
                            <span class="force-color-red"><?= $max_gallery_photos_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <select name="status">
                                <option>Select Status</option>
                                <option value="1" <?php if($status == "1"){echo "selected";} ?> >ON</option>
                                <option value="0" <?php if($status == "0"){echo "selected";} ?> >OFF</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Status</span>
                            <span class="force-color-red"><?= $status_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <textarea name="description" placeholder="Type here"><?= $description ?></textarea>
                            <span class="refund-input-legend-two force-color-blue">Description</span>
                            <span class="force-color-red"><?= $description_err ?></span>
                        </div>
                    </div>
                    <div class="user-refund-btn">
                        <button type="submit" class="btn force-bg-blue" name="submit_package_btn" >Create Package</button>
                    </div>
                </form>
            </section>
        </main>
        
        @include('admin.layouts.footer')
        @include('admin.layouts.script')
    </body>
</html>
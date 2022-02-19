<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Blog</title>
        <?php require_once "includes/meta.php"; ?>
        <?php require "components/actions-blog-add.php"; ?>
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
                    <div class="users-mutal-detail-div">
                        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="class-kyc-div" enctype="multipart/form-data">
                            <div class="display-flex-row-no-justify parallax-slider-upd-btn">
                                <span class="parallax-status">
                                    <input type="radio" id="status1" name="status" value="0"  <?= $status1 ?> />
                                    <label for="status1" class="btn force-bg-blue parallax-slider-upd-btn-a">Draft</label>
                                </span>
                                <span class="parallax-status">
                                    <input type="radio" id="status2" name="status" value="1"  <?= $status2 ?> />
                                    <label for="status2" class="btn force-bg-green parallax-slider-upd-btn-a">Publish</label>
                                </span>
                                <!-- <span class="parallax-status" style="margin-left:10px;">
                                    <a href="" for="status2" class="btn force-bg-red">Delete</a>
                                </span> -->
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
                                        <select name="type" id="" style="width: 70%; height:40px; border-radius:10px;">
                                            <option value="1">News</option>
                                            <option value="2">Car Sales</option>
                                            <option value="3">Repairs & Maintenance</option>
                                        </select>
                                        <span class="edit-ads-input-legend force-color-blue">section</span>
                                        <span class="force-color-red"><?= $type_err ?></span>
                                    </div>
                                    <div class="input-group fieldset-relative">
                                        <input type="text" name="title" value="<?= $title ?>" placeholder="Type here" />
                                        <span class="edit-ads-input-legend force-color-blue">Title</span>
                                        <span class="force-color-red"><?= $title_err ?></span>
                                    </div>
                                    <div class="input-group fieldset-relative">
                                        <textarea id="textarea" name="description"><?= $description ?></textarea>
                                        <span class="edit-ads-input-legend force-color-blue">Content</span>
                                        <span class="force-color-red"><?= $description_err ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="class-kyc-button">
                                <button type="submit" name="submit_blog_btn" class="btn force-bg-blue">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>

        <script src="https://cdn.tiny.cloud/1/0bafku73iwl16lvy29rbw1ndewfrm8fc90bly3tnv1s8nqoz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
            selector: 'textarea',
            });
        </script>
    </body>
</html>
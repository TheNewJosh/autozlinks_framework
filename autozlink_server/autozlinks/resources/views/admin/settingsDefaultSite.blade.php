<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Settings</title>
        <?php require_once "includes/meta.php"; ?>
        <?php require "components/actions-settings-site-edit.php"; ?>
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
                        Default Site Settings
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="display-flex-row-justify-end alert hide">
                    <span><img src="../../assets/img/icons/check-green-bg.svg" /></span>
                    <span class="table-heading-text parallax-slider-message" ><b>Successfully Edited</b></span>
                </div>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="users-refund-detail-form fieldset-relative">
<?php if($message_err != ''){?>
    <div class="alert-danger">
        <strong>Error!</strong> <?php echo $message_err; ?>
    </div>
<?php }?>
                    <div class="display-flex-column azc-input-group">
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="site_title" value="<?= $site_title ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Site Title</span>
                            <span class="force-color-red"><?= $site_title_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="footer_text" value="<?= $footer_text ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Footer Text</span>
                            <span class="force-color-red"><?= $footer_text_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <div class="display-flex-row-no-justify input-logo">
                                <div><img src="../../assets/img/<?= $h_img ?>" /></div>
                                <div class="display-flex-column">
                                    <span class="parallax-slider-upd-span">
                                        <sp class="table-item-text">(Min 300 x 260)</sp>
                                    </span>
                                    <span class="parallax-slider-upd-span">
                                        <input type="file" name="site_logo" placeholder="Type here" class="force-input-width-file" />
                                    </span>
                                    <span class="force-color-red"><?= $site_logo_err ?></span>
                                </div>
                            </div>
                            <span class="refund-input-legend-two force-color-blue">Site Logo</span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="logo_text" value="<?= $logo_text ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Logo Text</span>
                            <span class="force-color-red"><?= $logo_text_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="logo_color" value="<?= $logo_color ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Logo Text Color</span>
                            <span class="force-color-red"><?= $logo_color_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <select name="text_type">
                                <option value="1" <?php if($text_type == "1"){echo "selected";} ?>>Image</option>
                                <option value="2" <?php if($text_type == "2"){echo "selected";} ?>>Text</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Text Type</span>
                            <span class="force-color-red"><?= $text_type_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <select name="site_language">
                                <option value="1" <?php if($site_language == "1"){echo "selected";} ?>>English</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Site Language</span>
                            <span class="force-color-red"><?= $site_language_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <select name="site_text_decoration">
                                <option value="1" <?php if($site_text_decoration == "1"){echo "selected";} ?>>lrt</option>
                                <option value="2" <?php if($site_text_decoration == "2"){echo "selected";} ?>>rlt</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Site Text Decoration</span>
                            <span class="force-color-red"><?= $site_text_decoration_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="number" name="pagination_count" value="<?= $pagination_count ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Pagination Per Page</span>
                            <span class="force-color-red"><?= $pagination_count_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <select name="default_page_layout">
                                <option value="1" <?php if($default_page_layout == "1"){echo "selected";} ?>>Left bar with content</option>
                                <option value="2" <?php if($default_page_layout == "2"){echo "selected";} ?>>Right bar with content</option>
                                <option value="3" <?php if($default_page_layout == "3"){echo "selected";} ?>>Only content</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Default Page Layout</span>
                            <span class="force-color-red"><?= $default_page_layout_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <select name="css_compression">
                                <option value="1" <?php if($css_compression == "1"){echo "selected";} ?>>Yes</option>
                                <option value="0" <?php if($css_compression == "0"){echo "selected";} ?>>No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">CSS Compression</span>
                            <span class="force-color-red"><?= $css_compression_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <select name="site_mode">
                                <option value="1" <?php if($site_mode == "1"){echo "selected";} ?>>Production</option>
                                <option value="2" <?php if($site_mode == "2"){echo "selected";} ?>>Development</option>
                                <option value="3" <?php if($site_mode == "3"){echo "selected";} ?>>Maintenance</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Site Mode</span>
                            <span class="force-color-red"><?= $site_mode_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="fb_page_name" value="<?= $fb_page_name ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">FB Page Name</span>
                            <span class="force-color-red"><?= $fb_page_name_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="ig_username" value="<?= $ig_username ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">IG Username</span>
                            <span class="force-color-red"><?= $ig_username_err ?></span>
                        </div>
                        <span class="admin-page-heading"><br><br>Google Analytics Settings</span>
                        <div class="input-group-lon fieldset-relative">
                            <textarea type="text" name="google_analysis_setting" placeholder="Type here"><?= $google_analysis_setting ?></textarea>
                            <span class="refund-input-legend-two force-color-blue">Tracking Code</span>
                            <span class="force-color-red"><?= $google_analysis_setting_err ?></span>
                        </div>
                        <span class="admin-page-heading"><br><br>Default SEO Settings</span>
                        <div class="input-group-lon fieldset-relative">
                            <textarea type="text" name="seo_setting" placeholder="Type here"><?= $seo_setting ?>
                            </textarea>
                            <span class="refund-input-legend-two force-color-blue">Meta Description</span>
                            <span class="force-color-red"><?= $seo_setting_err ?></span>
                        </div>
                    </div>
                    <div class="user-refund-btn">
                        <button type="submit" class="btn force-bg-blue" name="submit_site_setting_btn" >Update</button>
                    </div>
                </form>
            </section>
        </main>
        
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
        <script>
            var msg = new URL(window.location.href).searchParams.get("msg");
            if(msg === "sucess"){
                $('.alert').addClass("show");
                $('.alert').removeClass("hide");
                $('.alert').addClass("showAlert");
                setTimeout(function(){
                 $('.alert').removeClass("show");
                 $('.alert').addClass("hide");
                },5000);
            }
        </script>
    </body>
</html>
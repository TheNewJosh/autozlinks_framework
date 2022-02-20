<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Site Settings</title>
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
                        Site Settings
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="display-flex-row-justify-end alert hide" id="alert-save">
                    <span><img src="../../assets/img/icons/check-green-bg.svg" /></span>
                    <span class="table-heading-text parallax-slider-message"><b>Successfully Save</b></span>
                </div>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="site-setting-detail-form fieldset-relative">
                    <span class="admin-page-heading">Content Settings</span>
<?php if($message_err != ''){?>
    <div class="alert-danger">
        <strong>Error!</strong> <?php echo $message_err; ?>
    </div>
<?php }?>
                    <div class="display-flex-row azc-input-group site-settings-headgis">
                        <div class="input-group-lon-ss fieldset-relative">
                            <select name="publish_post">
                                <option value="1" <?php if($publish_post == "1"){ echo "selected"; } ?> >Yes</option>
                                <option value="0" <?php if($publish_post == "0"){ echo "selected"; } ?> >No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Publish Post Directly</span>
                            <br/><span class="force-color-red"><?= $publish_post_err ?></span><br><br>
                        </div>
                        <div class="input-group-lon-ss fieldset-relative">
                            <select name="show_state_p">
                                <option value="1" <?php if($show_state_p == "1"){ echo "selected"; } ?>>Yes</option>
                                <option value="1" <?php if($show_state_p == "1"){ echo "selected"; } ?>>No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Show State Province</span>
                            <br/><span class="force-color-red"><?= $show_state_p_err ?></span><br><br>
                        </div>
                    </div>
                    <div class="display-flex-row azc-input-group">
                        <div class="input-group-lon-ss fieldset-relative">
                            <select name="system_currency">
                                <option value="1" <?php if($system_currency == "1"){ echo "selected"; } ?>>Nigerian Naira (₦)</option>
                                <option value="2" <?php if($system_currency == "2"){ echo "selected"; } ?>>US Dollar ($)</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">System Currency</span>
                            <br/><span class="force-color-red"><?= $system_currency_err ?></span><br><br>
                        </div>
                        <div class="input-group-lon-ss fieldset-relative">
                            <select name="city_drop">
                                <option value="1" <?php if($city_drop == "1"){ echo "selected"; } ?>>Dropdown</option>
                                <option value="2" <?php if($city_drop == "2"){ echo "selected"; } ?>>Autocomplete</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">City Dropdown</span>
                            <br/><span class="force-color-red"><?= $city_drop_err ?></span><br><br>
                        </div>
                    </div>
                    <div class="display-flex-row azc-input-group">
                        <div class="display-flex-row">
                            <div class="display-flex-row-no-justify site-setting-mr">
                                <span><input type="radio" name="use_icon_shcode" value="1" <?php if($use_icon_shcode == "1"){ echo "checked"; } ?> /></span>
                                <span class="force-color-blue">Use Icon</span>
                            </div>
                            <div class="display-flex-row-no-justify">
                                <span><input type="radio" name="use_icon_shcode" value="0" <?php if($use_icon_shcode == "0"){ echo "checked"; } ?> /></span>
                                <span class="force-color-blue">Use Short Code</span>
                            </div>
                        </div>
                        <div class="input-group-lon-ss fieldset-relative">
                            <input name="post_per_page" value="<?= $post_per_page ?>" type="number" />
                            <span class="refund-input-legend-two force-color-blue">Post Per Page</span>
                            <br/><span class="force-color-red"><?= $post_per_page_err ?></span><br><br>
                        </div>
                    </div>
                    <div class="display-flex-row azc-input-group">
                        <div class="input-group-lon-ss fieldset-relative">
                            <select name="enable_signup">
                                <option value="1" <?php if($enable_signup == "1"){ echo "selected"; } ?>>Yes</option>
                                <option value="1" <?php if($enable_signup == "1"){ echo "selected"; } ?>>No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Enable Signup</span>
                            <br/><span class="force-color-red"><?= $enable_signup_err ?></span><br><br>
                        </div>
                        <div class="input-group-lon-ss fieldset-relative">
                            <select name="price_format">
                                <option value="1" <?php if($price_format == "1"){ echo "selected"; } ?>>Yes</option>
                                <option value="1" <?php if($price_format == "1"){ echo "selected"; } ?>>No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Price Format</span>
                            <br/><span class="force-color-red"><?= $price_format_err ?></span><br><br>
                        </div>
                    </div>
                    <div class="display-flex-row azc-input-group">
                        <div class="input-group-lon-ss fieldset-relative">
                            <select name="package_expire">
                                <option value="1" <?php if($package_expire == "1"){ echo "selected"; } ?>>Yes</option>
                                <option value="1" <?php if($package_expire == "1"){ echo "selected"; } ?>>No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">If package Expired</span>
                            <br/><span class="force-color-red"><?= $package_expire_err ?></span><br><br>
                        </div>
                        <div class="input-group-lon-ss fieldset-relative">
                            <select name="enable_review">
                                <option value="1" <?php if($enable_review == "1"){ echo "selected"; } ?>>Yes</option>
                                <option value="1" <?php if($enable_review == "1"){ echo "selected"; } ?>>No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Enable Review</span>
                            <br/><span class="force-color-red"><?= $enable_review_err ?></span><br><br>
                        </div>
                    </div>
                    <div class="display-flex-row azc-input-group">
                        <div class="input-group-lon-ss fieldset-relative">
                            <select name="show_admin_user">
                                <option value="1" <?php if($show_admin_user == "1"){ echo "selected"; } ?>>Yes</option>
                                <option value="1" <?php if($show_admin_user == "1"){ echo "selected"; } ?>>No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Show Admin user</span>
                            <br/><span class="force-color-red"><?= $show_admin_user_err ?></span><br><br>
                        </div>
                        <div class="input-group-lon-ss fieldset-relative">
                            <input name="upload_file_size" value="<?= $upload_file_size ?>" type="number" />
                            <span class="refund-input-legend-two force-color-blue">Max Upload Size (KB)</span>
                            <br/><span class="force-color-red"><?= $upload_file_size_err ?></span><br><br>
                        </div>
                    </div>
                    <div class="display-flex-row azc-input-group">
                        <div class="input-group-lon-ss fieldset-relative">
                            <select name="mileage_unit">
                                <option value="1" <?php if($mileage_unit == "1"){ echo "selected"; } ?>>Miles</option>
                                <option value="2" <?php if($mileage_unit == "2"){ echo "selected"; } ?>>KM</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Mileage Unit</span>
                            <br/><span class="force-color-red"><?= $mileage_unit_err ?></span><br><br>
                        </div>
                        <div class="input-group-lon-ss fieldset-relative">
                            <select name="recent_post">
                                <option value="1" <?php if($recent_post == "1"){ echo "selected"; } ?>>Random</option>
                                <option value="2" <?php if($recent_post == "2"){ echo "selected"; } ?>>Ascending</option>
                                <option value="3" <?php if($recent_post == "3"){ echo "selected"; } ?>>Descending</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Recent Post Order</span>
                            <br/><span class="force-color-red"><?= $recent_post_err ?></span><br><br>
                        </div>
                    </div>
                    <div class="display-flex-row azc-input-group">
                        <div class="display-flex-column">
                            <div class="force-color-blue site-setting-sh-h">Car Mileage Fliter Range</div>
                            <div class="display-flex-row">
                                <div class="input-group-sh-ss fieldset-relative site-setting-mr">
                                    <input name="min_mileage_fliter" value="<?= $min_mileage_fliter ?>" type="number" />
                                    <span class="refund-input-legend-two force-color-blue">Min</span><br/>
                                    <span class="force-color-red"><?= $min_mileage_fliter_err ?></span>
                                </div>
    <br><br>                            <div class="input-group-sh-ss fieldset-relative">
                                    <input name="max_mileage_fliter" value="<?= $max_mileage_fliter ?>" type="number" />
                                    <span class="refund-input-legend-two force-color-blue">Max</span><br>
                                    <span class="force-color-red"><?= $max_mileage_fliter_err ?></span>
                                </div>
    <br><br>                        </div>
                        </div>
                        <div class="input-group-lon-ss fieldset-relative">
                            <select name="default_post">
                                <option value="1" <?php if($default_post == "1"){ echo "selected"; } ?>>Yes</option>
                                <option value="1" <?php if($default_post == "1"){ echo "selected"; } ?>>No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Default Post Order</span>
                            <br/><span class="force-color-red"><?= $default_post_err ?></span><br><br>
                        </div>
                    </div>
                    <div class="display-flex-row azc-input-group">
                        <div class="display-flex-column">
                            <div class="force-color-blue site-setting-sh-h">Car Price Fliter Range</div>
                            <div class="display-flex-row">
                                <div class="input-group-sh-ss fieldset-relative site-setting-mr">
                                    <input name="min_price_fliter" value="<?= $min_price_fliter ?>" type="number" />
                                    <span class="refund-input-legend-two force-color-blue">Min</span>
                                    <br/><span class="force-color-red"><?= $min_price_fliter_err ?></span>
                                </div>
    <br><br>                            <div class="input-group-sh-ss fieldset-relative">
                                    <input name="max_price_fliter" value="<?= $max_price_fliter ?>" type="number" />
                                    <span class="refund-input-legend-two force-color-blue">Max</span>
                                    <br/><span class="force-color-red"><?= $max_price_fliter_err ?></span>
                                </div>
    <br><br>                        </div>
                        </div>
                        <div class="input-group-lon-ss fieldset-relative">
                            <select name="enable_ads_block">
                                <option value="1" <?php if($enable_ads_block == "1"){ echo "selected"; } ?>>Yes</option>
                                <option value="1" <?php if($enable_ads_block == "1"){ echo "selected"; } ?>>No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Enable Ads block Alert</span>
                            <br/><span class="force-color-red"><?= $enable_ads_block_err ?></span><br><br>
                        </div>
                    </div>
                    <div class="display-flex-row azc-input-group">
                        <div class="input-group-lon-ss fieldset-relative">
                            <select name="disable_car_location">
                                <option value="1" <?php if($disable_car_location == "1"){ echo "selected"; } ?>>Yes</option>
                                <option value="1" <?php if($disable_car_location == "1"){ echo "selected"; } ?>>No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Disable Car Location</span>
                            <br/><span class="force-color-red"><?= $disable_car_location_err ?></span>
                        </div>
    <br><br>                    <div class="input-group-lon-ss fieldset-relative">
                            <select name="cookies_polcy_popup">
                                <option value="1" <?php if($cookies_polcy_popup == "1"){ echo "selected"; } ?>>Yes</option>
                                <option value="1" <?php if($cookies_polcy_popup == "1"){ echo "selected"; } ?>>No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Cookies Policy Popup</span>
                            <br/><span class="force-color-red"><?= $cookies_polcy_popup_err ?></span><br><br>
                        </div>
                    </div>
                    
                    <div class="site-settings-headgs">
                        <span class="admin-page-heading">Facebook App Settings</span>
                    </div>
                    <div class="display-flex-row azc-input-group site-settings-headgis">
                        <div class="input-group-lon-ss fieldset-relative">
                            <select name="enable_facebook_login">
                                <option value="1" <?php if($enable_facebook_login == "1"){ echo "selected"; } ?>>Yes</option>
                                <option value="1" <?php if($enable_facebook_login == "1"){ echo "selected"; } ?>>No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Enable Facebook Login</span>
                            <br/><span class="force-color-red"><?= $enable_facebook_login_err ?></span><br><br>
                        </div>
                        <div class="input-group-lon-ss fieldset-relative">
                            <input name="facebook_app_id" value="<?= $facebook_app_id ?>" type="text" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Facebook App Id</span>
                            <br/><span class="force-color-red"><?= $facebook_app_id_err ?></span><br><br>
                        </div>
                    </div>
                    <div class="display-flex-row azc-input-group">
                        <div class="input-group-lon-ss fieldset-relative">
                            <input name="facebook_secret_key" value="<?= $facebook_secret_key ?>" type="text" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Facebook Secret Key</span>
                            <br/><span class="force-color-red"><?= $facebook_secret_key_err ?></span><br><br>
                        </div>
                    </div>
                    
                    <div class="site-settings-headgs">
                        <span class="admin-page-heading">Comment Settings</span>
                    </div>
                    <div class="display-flex-row azc-input-group site-settings-headgis">
                        <div class="input-group-lon-ss fieldset-relative">
                            <select name="enable_comment">
                                <option value="1" <?php if($enable_comment == "1"){ echo "selected"; } ?>>Yes</option>
                                <option value="1" <?php if($enable_comment == "1"){ echo "selected"; } ?>>No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Enable Comment</span>
                            <br/><span class="force-color-red"><?= $enable_comment_err ?></span><br><br>
                        </div>
                        <div class="input-group-lon-ss fieldset-relative">
                            <select name="enable_blog_comment">
                                <option value="1" <?php if($enable_blog_comment == "1"){ echo "selected"; } ?>>Yes</option>
                                <option value="1" <?php if($enable_blog_comment == "1"){ echo "selected"; } ?>>No</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Enable Blog Comment</span>
                            <br/><span class="force-color-red"><?= $enable_blog_comment_err ?></span><br><br>
                        </div>
                    </div>
                    <div class="display-flex-row azc-input-group">
                        <div class="input-group-lon-ss fieldset-relative">
                            <input name="facebook_app_id_blog" value="<?= $facebook_app_id_blog ?>" type="text" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Fb App Id For Blog</span>
                            <br/><span class="force-color-red"><?= $facebook_app_id_blog_err ?></span><br><br>
                        </div>
                    </div>
                    
                    <div class="user-refund-btn">
                        <button type="submit" class="btn force-bg-blue" name="submit_content_settings_btn">Update</button>
                    </div>
                </form>
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
        </script>
    </body>
</html>
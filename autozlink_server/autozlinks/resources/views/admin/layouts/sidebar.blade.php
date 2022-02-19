<?php
    $page = basename($_SERVER['PHP_SELF']); 
    
    $asmi1 = $asmi2 = $asmi3 = $asmi4 = $asmi5 = $asmi6 = $asmi7 = $asmi8 = $asmi9 = $asmi10 = $asmi11 = $asmi12 = $asmi13 = "";

    $asmc2 = $asmc3 = $asmc4 = $asmc5 = $asmc6 = $asmc7 = $asmc9 = $asmc11 = $asmc12 = $asmc13 = "";

    $asmd21 = $asmd22 = $asmd23 = $asmd24 = $asmd25 = $asmd26 = $asmd27 = "";
    $asmd41 = $asmd42 = "";
    $asmd51 = $asmd52 = $asmd53 = $asmd54 = $asmd55 = "";
    $asmd61 = $asmd62 = $asmd63 = $asmd64 = "";
    $asmd71 = $asmd72 = $asmd73 = $asmd74 = $asmd75 = $asmd76 = "";
    $asmd91 = $asmd92 = $asmd93 = "";
    $asmd111 = $asmd112 = "";
    $asmd121 = $asmd122 = $asmd123 = "";
    $asmd131 = $asmd132 = $asmd133 = $asmd134 = $asmd135 = $asmd136 = $asmd137 = "";
    
    if($page == "index.php"){
        $asmi1 = "active-aside-item";
    }

    if($page == "users.php" || 
        $page == "azc-dispute.php" || 
        $page == "know-your-customer.php" || 
        $page == "azc-coin-system.php" || 
        $page == "azc-coupon-code.php" || 
        $page == "azc-notifications.php" || 
        $page == "azc-notifications-create.php" || 
        $page == "azc-notifications-update.php" || 
        $page == "users-mutual.php" || 
        $page == "users-escrow.php" || 
        $page == "users-packages.php" || 
        $page == "users-coin.php" || 
        $page == "users-refund.php" ||
        $page == "users-withdrawal.php" ||
        $page == "users-mutual-details.php" ||
        $page == "users-escrow-details.php" ||
        $page == "users-packages-details.php" ||
        $page == "users-coin-details.php" ||
        $page == "users-refund-details.php" ||
        $page == "users-refund-form.php" ||
        $page == "users-withdrawal-details.php" ||
        $page == "azc-coupon-code-create.php" || 
        $page == "azc-coupon-code-update.php" ||
        $page == "know-your-customer-details.php" ){
        
        $asmi2 = "active-aside-item-drop-down";
        $asmc2 = "checked";
        
        if($page == "users.php" ||
            $page == "users-mutual.php" ||
            $page == "users-mutual-details.php" ||
            $page == "users-escrow.php" ||
            $page == "users-escrow-details.php" ||
            $page == "users-packages.php" ||
            $page == "users-packages-details.php" ||
            $page == "users-coin.php" ||
            $page == "users-coin-details.php" ||
            $page == "users-refund.php" ||
            $page == "users-refund-details.php" ||
            $page == "users-withdrawal.php" ||
            $page == "users-refund-form.php" ||
            $page == "users-withdrawal-details.php"){
            $asmd21 = "active-aside-item";
        }
        if($page == "know-your-customer.php" || $page == "know-your-customer-details.php"){
            $asmd23 = "active-aside-item";
        }
        if($page == "azc-dispute.php"){
            $asmd24 = "active-aside-item";
        }
        if($page == "azc-coin-system.php"){
            $asmd25 = "active-aside-item";
        }
        if($page == "azc-coupon-code.php" || $page == "azc-coupon-code-create.php" || $page == "azc-coupon-code-update.php"){
            $asmd26 = "active-aside-item";
        }
        if($page == "azc-notifications-create.php" || $page == "azc-notifications-update.php" || $page == "azc-notifications.php"){
            $asmd27 = "active-aside-item";
        }
    }

    if($page == "parallax-slider-all.php" || 
        $page == "parallax-slider-new.php" || 
        $page == "parallax-slider-all.php" ||
        $page == "parallax-slider-update.php" ){
        
        $asmi4 = "active-aside-item-drop-down";
        $asmc4 = "checked";
        
        if($page == "parallax-slider-all.php"){
            $asmd41 = "active-aside-item";
        }
        if($page == "parallax-slider-new.php"){
            $asmd42 = "active-aside-item";
        }
    }

    if($page == "content-car-all.php" ||
       $page == "content-car-add.php" ||
       $page == "content-car-report.php" ||
       $page == "content-site-settings.php" ||
       $page == "content-car-location-state.php" ||
       $page == "content-car-location-city.php" ||
       $page == "content-car-location.php" ){
        
        $asmi5 = "active-aside-item-drop-down";
        $asmc5 = "checked";
        
        if($page == "content-car-all.php"){
            $asmd51 = "active-aside-item";
        }
        if($page == "content-car-add.php"){
            $asmd52 = "active-aside-item";
        }
        if($page == "content-car-report.php"){
            $asmd53 = "active-aside-item";
        }
        if($page == "content-car-location-city.php" || $page == "content-car-location-state.php" || $page == "content-car-location.php"){
            $asmd54 = "active-aside-item";
        }
        if($page == "content-site-settings.php"){
            $asmd55 = "active-aside-item";
        }
    }

    if($page == "payment-settings-paypal.php" ||
       $page == "payment-settings-paystack.php" ||
       $page == "payment-history.php" ){
        
        $asmi6 = "active-aside-item-drop-down";
        $asmc6 = "checked";
        
        if($page == "payment-settings-paypal.php"){
            $asmd61 = "active-aside-item";
        }
        if($page == "payment-settings-paystack.php"){
            $asmd62 = "active-aside-item";
        }
        if($page == "payment-history.php"){
            $asmd64 = "active-aside-item";
        }
    }

    if($page == "car-config-opt-all-car-category.php" ||
       $page == "car-config-opt-brand-model.php" ||
       $page == "car-config-opt-condition.php" ||
       $page == "car-config-opt-transmission-type.php" ||
       $page == "car-config-opt-fuel-type.php" ||
       $page == "car-config-opt-custom-field.php" ){
        
        $asmi7 = "active-aside-item-drop-down";
        $asmc7 = "checked";
        
        if($page == "car-config-opt-all-car-category.php"){
            $asmd71 = "active-aside-item";
        }
        if($page == "car-config-opt-brand-model.php"){
            $asmd72 = "active-aside-item";
        }
        if($page == "car-config-opt-condition.php"){
            $asmd73 = "active-aside-item";
        }
        if($page == "car-config-opt-transmission-type.php"){
            $asmd74 = "active-aside-item";
        }
        if($page == "car-config-opt-fuel-type.php"){
            $asmd75 = "active-aside-item";
        }
        if($page == "car-config-opt-custom-field.php"){
            $asmd76 = "active-aside-item";
        }
    }

    if($page == "profile.php"){
        $asmi8 = "active-aside-item";
    }

    if($page == "packages-all.php" ||
       $page == "packages-create.php" ||
       $page == "packages-update.php" ||
       $page == "packages-settings.php" ){
        
        $asmi9 = "active-aside-item-drop-down";
        $asmc9 = "checked";
        
        if($page == "packages-update.php" || $page == "packages-all.php"){
            $asmd91 = "active-aside-item";
        }
        if($page == "packages-create.php"){
            $asmd92 = "active-aside-item";
        }
        if($page == "packages-settings.php"){
            $asmd93 = "active-aside-item";
        }
    }

    if($page == "all-users.php"){
        $asmi10 = "active-aside-item";
    }

    if($page == "blog-post-update.php" || $page == "blog-post-all.php" ||
       $page == "blog-post-new.php" ){
        
        $asmi11 = "active-aside-item-drop-down";
        $asmc11 = "checked";
        
        if($page == "blog-post-all.php"){
            $asmd111 = "active-aside-item";
        }
        if($page == "blog-post-new.php"){
            $asmd112 = "active-aside-item";
        }
    }

    if($page == "pm-page-all.php" ||
       $page == "pm-page-new.php" ||
       $page == "pm-page-update.php" ){
        
        $asmi12 = "active-aside-item-drop-down";
        $asmc12 = "checked";
        
        if($page == "pm-page-all.php" || $page == "pm-page-update.php"){
            $asmd121 = "active-aside-item";
        }
        if($page == "pm-page-new.php"){
            $asmd122 = "active-aside-item";
        }
        if($page == "packages-create.php"){
            $asmd123 = "active-aside-item";
        }
    }

    if($page == "settings-smtp.php" ||
       $page == "settings-edit-mail-confirmation-email.php" ||
       $page == "settings-edit-mail-recovery-email.php" ||
       $page == "settings-edit-mail-payment-confirmation-email.php" ||
       $page == "settings-edit-mail-post-expiration-notification.php" ||
       $page == "settings-edit-mail-post-publish-email.php" ||
       $page == "settings-debug-email.php" ||
       $page == "settings-web-admin.php" ||
       $page == "settings-site-map.php" ||
       $page == "settings-default-site.php" ||
       $page == "settings-clear-unused-images.php" ){
        
        $asmi13 = "active-aside-item-drop-down";
        $asmc13 = "checked";
        
        if($page == "settings-smtp.php"){
            $asmd131 = "active-aside-item";
        }
        if($page == "settings-edit-mail-confirmation-email.php" ||
          $page == "settings-edit-mail-recovery-email.php" ||
          $page == "settings-edit-mail-payment-confirmation-email.php" ||
          $page == "settings-edit-mail-post-expiration-notification.php" ||
          $page == "settings-edit-mail-post-publish-email.php" ){
            $asmd132 = "active-aside-item";
        }
        if($page == "settings-debug-email.php"){
            $asmd133 = "active-aside-item";
        }
        if($page == "settings-default-site.php"){
            $asmd134 = "active-aside-item";
        }
        if($page == "settings-web-admin.php"){
            $asmd135 = "active-aside-item";
        }
        if($page == "settings-site-map.php"){
            $asmd136 = "active-aside-item";
        }
        if($page == "settings-clear-unused-images.php"){
            $asmd137 = "active-aside-item";
        }
    }

?>

<div class="aside-bg">
    <ul class="active-aside-ul display-flex-column" id="scroll" data-simplebar data-simplebar-auto-hide="false">
        <li class="<?= $asmi1 ?>">
            <a href="index.php" class="aside-item display-flex-row">
                <span><i class="fa fa-tachometer"></i></span>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-2" class="display-flex-row <?= $asmi2 ?>">
                <div class="aside-item display-flex-row">
                    <span><i class="fas fa-coins"></i></span>
                    <span>AZCoin</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-2" name="sidebar_drop_down" <?= $asmc2 ?> >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub <?= $asmd21 ?>"><a href="users.php">- Users</a></li>
                    <li class="aside-item-sub <?= $asmd22 ?>"><a href="#">- Live Transactions</a></li>
                    <li class="aside-item-sub <?= $asmd23 ?>"><a href="know-your-customer.php">- KYC</a></li>
                    <li class="aside-item-sub <?= $asmd24 ?>"><a href="azc-dispute.php">- Dispute</a></li>
                    <li class="aside-item-sub <?= $asmd25 ?>"><a href="azc-coin-system.php">- Coin System</a></li>
                    <li class="aside-item-sub <?= $asmd26 ?>"><a href="azc-coupon-code.php">- Coupon Code</a></li>
                    <li class="aside-item-sub <?= $asmd27 ?>"><a href="azc-notifications.php">- Notification Settings</a></li>
                </ul>
            </div>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-3" class="display-flex-row <?= $asmi3 ?>">
                <div class="aside-item display-flex-row">
                    <span><i class="far fa-file"></i></span>
                    <span>Live Auction</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-3" name="sidebar_drop_down" <?= $asmc3 ?> >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub"><a href="#">#</a></li>
                </ul>
            </div>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-4" class="display-flex-row <?= $asmi4 ?>">
                <div class="aside-item display-flex-row">
                    <span><i class="far fa-file"></i></span>
                    <span>Parallex Slider</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-4" name="sidebar_drop_down" <?= $asmc4 ?>>
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub <?= $asmd41 ?> ">
                        <a href="parallax-slider-all.php">All</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd42 ?> ">
                        <a href="parallax-slider-new.php">Add New</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-5" class="display-flex-row <?= $asmi5 ?>">
                <div class="aside-item display-flex-row">
                    <span><i class="fas fa-car"></i></span>
                    <span>Content</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-5" name="sidebar_drop_down" <?= $asmc5 ?> >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub <?= $asmd51 ?>">
                        <a href="content-car-all.php">All Cars</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd52 ?>">
                        <a href="content-car-add.php">Add Cars</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd53 ?>">
                        <a href="content-car-report.php">Report Cars</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd54 ?>">
                        <a href="content-car-location.php">Locations</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd55 ?>">
                        <a href="content-site-settings.php">Site Settings</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-6" class="display-flex-row <?= $asmi6 ?>">
                <div class="aside-item display-flex-row">
                    <span><i class="fas fa-money-bill-wave"></i></span>
                    <span>Payment Settings</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-6" name="sidebar_drop_down" <?= $asmc6 ?> >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub <?= $asmd61 ?>">
                        <a href="payment-settings-paypal.php">Paypal Settings</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd62 ?>">
                        <a href="payment-settings-paystack.php">Paystack Settings</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd63 ?>">
                        <a href="#">AZCoin</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd64 ?>">
                        <a href="payment-history.php">Payment History</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-7" class="display-flex-row <?= $asmi7 ?>">
                <div class="aside-item display-flex-row">
                    <span><i class="fas fa-bars"></i></span>
                    <span>Car Config Option</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-7" name="sidebar_drop_down" <?= $asmc7 ?> >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub <?= $asmd71 ?>">
                        <a href="car-config-opt-all-car-category.php">All Car Categories</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd72 ?>">
                        <a href="car-config-opt-brand-model.php">Brand Models</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd73 ?>">
                        <a href="car-config-opt-condition.php">Car Conditions</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd74 ?>">
                        <a href="car-config-opt-transmission-type.php">Transmission Types</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd75 ?>">
                        <a href="car-config-opt-fuel-type.php">Fuel Types</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd76 ?>">
                        <a href="car-config-opt-custom-field.php">Custom Field</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="<?= $asmi8 ?>" >
            <a href="profile.php" class="aside-item display-flex-row">
                <span><i class="fas fa-user"></i></span>
                <span>Profile</span>
            </a>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-9" class="display-flex-row <?= $asmi9 ?>">
                <div class="aside-item display-flex-row">
                    <span><i class="fas fa-bars"></i></span>
                    <span>Packages</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-9" name="sidebar_drop_down" <?= $asmc9 ?> >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub <?= $asmd91 ?>">
                        <a href="packages-all.php">All Packages</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd92 ?>">
                        <a href="packages-create.php">Create New Packages</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd93 ?>">
                        <a href="packages-settings.php">Packages Settings</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="<?= $asmi10 ?>">
            <a href="all-users.php" class="aside-item display-flex-row">
                <span><i class="fas fa-users"></i></span>
                <span>Users</span>
            </a>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-11" class="display-flex-row <?= $asmi11 ?>">
                <div class="aside-item display-flex-row">
                    <span><i class="far fa-file"></i></span>
                    <span>Blog</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-11" name="sidebar_drop_down" <?= $asmc11 ?> >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub <?= $asmd111 ?>">
                        <a href="blog-post-all.php">All Post</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd112 ?>">
                        <a href="blog-post-new.php">New Post</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-12" class="display-flex-row <?= $asmi12 ?>">
                <div class="aside-item display-flex-row">
                    <span><i class="far fa-file"></i></span>
                    <span>Pages and Menu</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-12" name="sidebar_drop_down" <?= $asmc12 ?> >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub <?= $asmd121 ?>">
                        <a href="pm-page-all.php">All Page</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd122 ?>">
                        <a href="pm-page-new.php">New Page</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd123 ?>">
                        <a href="pm-menu.php">Menu</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-13" class="display-flex-row <?= $asmi13 ?>">
                <div class="aside-item display-flex-row">
                    <span><i class="fas fa-cog"></i></span>
                    <span>Settings</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-13" name="sidebar_drop_down" <?= $asmc13 ?> >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub <?= $asmd131 ?>">
                        <a href="settings-smtp.php">SMTP Email Settings</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd132 ?>">
                        <a href="settings-edit-mail-confirmation-email.php">Edit Mail Text</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd133 ?>">
                        <a href="settings-debug-email.php">Debug Email</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd134 ?>">
                        <a href="settings-default-site.php">Default Site Settings</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd135 ?>">
                        <a href="settings-web-admin.php">Web Admin Settings</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd136 ?>">
                        <a href="settings-site-map.php">Site Map</a>
                    </li>
                    <li class="aside-item-sub <?= $asmd137 ?>">
                        <a href="settings-clear-unused-images.php">Clear Unused Image</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>
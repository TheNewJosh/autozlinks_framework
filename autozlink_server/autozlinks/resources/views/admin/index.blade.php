<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin</title>
        @include('admin.layouts.meta')

    </head>
    <body class="body-bg">
        <div class="display-flex-row header-bg display-none-max-600">
    <div class="border-menu-logo">
        <a href="../../index.php"><img src="../../assets/img/logo-2.png" /></a>
    </div>
    <div class="display-flex-row">
        <div class="display-flex-row heading-margin heading-search">
            <span class="heading-search-icon"><img src="../../assets/img/icons/search.svg" /></span>
            <span><input type="text" placeholder="Type your search here" class="heading-search-input" /></span>
        </div>
        <div class="display-flex-row heading-margin-right">
            <div class=" heading-margin"><img src="../../assets/img/bell-dot.png" /></div>
            <div>
                <div class="drop-down-menu">
                    <label for="hcb111" class="hcb111-img">
                        <img src="../../assets/img/admin-user.png" />
                    </label>
                    <input type="checkbox" id="hcb111" name="hcb111">
                    <ul class="nav-item-sub-ul hcb111-space">
                        <li class="nav-item-sub">
                            <a href="../../index.php">Visit Site</a>
                        </li><li class="nav-item-sub nav-item-sub-line">
                            <a href="#">Change Password</a>
                        </li>
                        <li class="nav-item-sub nav-item-sub-line">
                            <a href="profile.php">Edit Profile</a>
                        </li><li class="nav-item-sub nav-item-sub-line">
                            <a href="../../components/action-logout.php" class="force-color-red">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="display-none-min-600 mobile-heading-bg">
    <div class="display-flex-row heading-img-mobile-view">
        <img src="../../assets/img/logo.png" class="heading-logo-mobile-v" />
        <img src="../../assets/img/bell-dot.png" style="height:24px; width: 25px;" />
    </div>
    <nav class="navbar">
      <div class="hamburger-menu">
        <div class="line line-1"></div>
        <div class="line line-2"></div>
        <div class="line line-3"></div>
      </div>
      <div class="nav-list">
            <div class="display-flex-row-no-justify heading-margin heading-search">
                <span class="heading-search-icon"><img src="../../assets/img/icons/search.svg" /></span>
                <span><input type="text" placeholder="Type your search here" class="heading-search-input-m" /></span>
            </div>
            <ul class="active-aside-ul-m display-flex-column" id="scroll" data-simplebar data-simplebar-auto-hide="false">
                <li>
                    <a href="index.php" class="nav-link">Dashboard</a>
                </li>
                <li class="dropdown-item">
                    <a href="#" class="nav-link">
                        AZCoin <i class="fas fa-chevron-right"></i>
                    </a>
                    <ul class="aside-item-sub-ul">
                        <li class="aside-item-sub"><a href="users.php">Users</a></li>
                    </ul>
                </li>
                <li class="dropdown-item">
                    <a href="#" class="nav-link">
                        Live Auction <i class="fas fa-chevron-right"></i>
                    </a>
                    <ul class="aside-item-sub-ul">
                        <li class="aside-item-sub"><a href="#">#</a></li>
                    </ul>
                </li>
                <li class="dropdown-item">
                    <a href="#" class="nav-link">
                        Parallex Slider <i class="fas fa-chevron-right"></i>
                    </a>
                    <ul class="aside-item-sub-ul">
                        <li class="aside-item-sub"><a href="#">#</a></li>
                    </ul>
                </li>
                <li class="dropdown-item">
                    <a href="#" class="nav-link">
                        Content <i class="fas fa-chevron-right"></i>
                    </a>
                    <ul class="aside-item-sub-ul">
                        <li class="aside-item-sub"><a href="#">#</a></li>
                    </ul>
                </li>
                <li class="dropdown-item">
                    <a href="#" class="nav-link">
                        Payment Settings <i class="fas fa-chevron-right"></i>
                    </a>
                    <ul class="aside-item-sub-ul">
                        <li class="aside-item-sub"><a href="#">#</a></li>
                    </ul>
                </li>
                <li class="dropdown-item">
                    <a href="#" class="nav-link">
                        Car Config Option <i class="fas fa-chevron-right"></i>
                    </a>
                    <ul class="aside-item-sub-ul">
                        <li class="aside-item-sub"><a href="#">#</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="nav-link">
                        Profile
                    </a>
                </li>
                <li class="dropdown-item">
                    <a href="#" class="nav-link">
                        Packages <i class="fas fa-chevron-right"></i>
                    </a>
                    <ul class="aside-item-sub-ul">
                        <li class="aside-item-sub"><a href="#">#</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="nav-link">
                        Users
                    </a>
                </li>
                <li class="dropdown-item">
                    <a href="#" class="nav-link">
                        Blog<i class="fas fa-chevron-right"></i>
                    </a>
                    <ul class="aside-item-sub-ul">
                        <li class="aside-item-sub"><a href="#">#</a></li>
                    </ul>
                </li>
                <li class="dropdown-item">
                    <a href="#" class="nav-link">
                        Pages and Menu <i class="fas fa-chevron-right"></i>
                    </a>
                    <ul class="aside-item-sub-ul">
                        <li class="aside-item-sub"><a href="#">#</a></li>
                    </ul>
                </li>
                <li class="dropdown-item">
                    <a href="#" class="nav-link">
                        Settings <i class="fas fa-chevron-right"></i>
                    </a>
                    <ul class="aside-item-sub-ul">
                        <li class="aside-item-sub"><a href="#">#</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>        <main class="main">
            <section class="display-none-max-600">
                
<div class="aside-bg">
    <ul class="active-aside-ul display-flex-column" id="scroll" data-simplebar data-simplebar-auto-hide="false">
        <li class="active-aside-item">
            <a href="index.php" class="aside-item display-flex-row">
                <span><i class="fa fa-tachometer"></i></span>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-2" class="display-flex-row ">
                <div class="aside-item display-flex-row">
                    <span><i class="fas fa-coins"></i></span>
                    <span>AZCoin</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-2" name="sidebar_drop_down"  >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub "><a href="users.php">- Users</a></li>
                    <li class="aside-item-sub "><a href="#">- Live Transactions</a></li>
                    <li class="aside-item-sub "><a href="know-your-customer.php">- KYC</a></li>
                    <li class="aside-item-sub "><a href="azc-dispute.php">- Dispute</a></li>
                    <li class="aside-item-sub "><a href="azc-coin-system.php">- Coin System</a></li>
                    <li class="aside-item-sub "><a href="azc-coupon-code.php">- Coupon Code</a></li>
                    <li class="aside-item-sub "><a href="azc-notifications.php">- Notification Settings</a></li>
                </ul>
            </div>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-3" class="display-flex-row ">
                <div class="aside-item display-flex-row">
                    <span><i class="far fa-file"></i></span>
                    <span>Live Auction</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-3" name="sidebar_drop_down"  >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub"><a href="#">#</a></li>
                </ul>
            </div>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-4" class="display-flex-row ">
                <div class="aside-item display-flex-row">
                    <span><i class="far fa-file"></i></span>
                    <span>Parallex Slider</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-4" name="sidebar_drop_down" >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub  ">
                        <a href="parallax-slider-all.php">All</a>
                    </li>
                    <li class="aside-item-sub  ">
                        <a href="parallax-slider-new.php">Add New</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-5" class="display-flex-row ">
                <div class="aside-item display-flex-row">
                    <span><i class="fas fa-car"></i></span>
                    <span>Content</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-5" name="sidebar_drop_down"  >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub ">
                        <a href="content-car-all.php">All Cars</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="content-car-add.php">Add Cars</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="content-car-report.php">Report Cars</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="content-car-location.php">Locations</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="content-site-settings.php">Site Settings</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-6" class="display-flex-row ">
                <div class="aside-item display-flex-row">
                    <span><i class="fas fa-money-bill-wave"></i></span>
                    <span>Payment Settings</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-6" name="sidebar_drop_down"  >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub ">
                        <a href="payment-settings-paypal.php">Paypal Settings</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="payment-settings-paystack.php">Paystack Settings</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="#">AZCoin</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="payment-history.php">Payment History</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-7" class="display-flex-row ">
                <div class="aside-item display-flex-row">
                    <span><i class="fas fa-bars"></i></span>
                    <span>Car Config Option</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-7" name="sidebar_drop_down"  >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub ">
                        <a href="car-config-opt-all-car-category.php">All Car Categories</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="car-config-opt-brand-model.php">Brand Models</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="car-config-opt-condition.php">Car Conditions</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="car-config-opt-transmission-type.php">Transmission Types</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="car-config-opt-fuel-type.php">Fuel Types</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="car-config-opt-custom-field.php">Custom Field</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="" >
            <a href="profile.php" class="aside-item display-flex-row">
                <span><i class="fas fa-user"></i></span>
                <span>Profile</span>
            </a>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-9" class="display-flex-row ">
                <div class="aside-item display-flex-row">
                    <span><i class="fas fa-bars"></i></span>
                    <span>Packages</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-9" name="sidebar_drop_down"  >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub ">
                        <a href="packages-all.php">All Packages</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="packages-create.php">Create New Packages</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="packages-settings.php">Packages Settings</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="">
            <a href="all-users.php" class="aside-item display-flex-row">
                <span><i class="fas fa-users"></i></span>
                <span>Users</span>
            </a>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-11" class="display-flex-row ">
                <div class="aside-item display-flex-row">
                    <span><i class="far fa-file"></i></span>
                    <span>Blog</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-11" name="sidebar_drop_down"  >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub ">
                        <a href="blog-post-all.php">All Post</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="blog-post-new.php">New Post</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-12" class="display-flex-row ">
                <div class="aside-item display-flex-row">
                    <span><i class="far fa-file"></i></span>
                    <span>Pages and Menu</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-12" name="sidebar_drop_down"  >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub ">
                        <a href="pm-page-all.php">All Page</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="pm-page-new.php">New Page</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="pm-menu.php">Menu</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="dropdown-item">
            <label for="sidebar-drop-13" class="display-flex-row ">
                <div class="aside-item display-flex-row">
                    <span><i class="fas fa-cog"></i></span>
                    <span>Settings</span>
                </div>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-down"></i></span>
                <span class="aside-item-icon-r"><i class="fas fa-chevron-right"></i></span>
            </label>
            <div class="drop-down-siderbar-menu">
                <input type="checkbox" id="sidebar-drop-13" name="sidebar_drop_down"  >
                <ul class="aside-item-sub-ul">
                    <li class="aside-item-sub ">
                        <a href="settings-smtp.php">SMTP Email Settings</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="settings-edit-mail-confirmation-email.php">Edit Mail Text</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="settings-debug-email.php">Debug Email</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="settings-default-site.php">Default Site Settings</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="settings-web-admin.php">Web Admin Settings</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="settings-site-map.php">Site Map</a>
                    </li>
                    <li class="aside-item-sub ">
                        <a href="settings-clear-unused-images.php">Clear Unused Image</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>            </section> 
            <section class="main-content">
                <div class="display-flex-column">
                    <span class="admin-page-heading">
                        Dashboard
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="display-flex-row-no-justify admin-tags-info-div">
                    <span class="admin-tags-info" id="admin-tags-info-lt1">Last 7days</span>
                    <span class="admin-tags-info" id="admin-tags-info-lt2">Last 14days</span>
                    <span class="admin-tags-info" id="admin-tags-info-lt3">Last 21days</span>
                    <span class="admin-tags-info" id="admin-tags-info-lt4">Last 2months</span>
                    <span class="admin-tags-info" id="admin-tags-info-lt5">Last 3months</span>
                    <span class="display-flex-column">
                        <div class="admin-tags-info admin-tags-info-width" id="admin-tags-info-customize">Customize</div>
                        <div class="display-flex-row-no-justify display-none" id="admin-tags-info-date-div">
                            <input type="date" id="min-range-date" placeholder="Min Date" class="admin-tags-info-input-l admin-tags-info-input">
                            -
                            <input type="date" id="max-range-date" placeholder="Min Date" class="admin-tags-info-input-r admin-tags-info-input">
                        </div>
                    </span>
                </div>
                <div class="display-flex-row-no-justify dashboard-stat">
                    <div class="display-flex-column dashboard-stat-div-each">
                        <span><img src="../../assets/img/icons/add-item.svg" /></span>
                        <span class="dashboard-stat-number-display">65</span>
                        <span class="dashboard-stat-text-display">Cars Posted</span>
                    </div>
                    <div class="display-flex-column dashboard-stat-div-each">
                        <span><img src="../../assets/img/icons/user-group.svg" /></span>
                        <span class="dashboard-stat-number-display">65</span>
                        <span class="dashboard-stat-text-display">Users</span>
                    </div>
                    <div class="display-flex-column dashboard-stat-div-each">
                        <span><img src="../../assets/img/icons/dollar-circle.svg" /></span>
                        <span class="dashboard-stat-number-display">65</span>
                        <span class="dashboard-stat-text-display">Total Profit</span>
                    </div>
                </div>
                <div>
                    <h3 class="admin-page-heading">Autozlinks Post Ads</h3>
                    <div class="display-flex-row-no-justify dashboard-stat">
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/add-item.svg" /></span>
                            <span class="dashboard-stat-number-display">2</span>
                            <span class="dashboard-stat-text-display">Total free Ads</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/money.svg" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Paid Ads</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/wallet-checked.svg" /></span>
                            <span class="dashboard-stat-number-display">65</span>
                            <span class="dashboard-stat-text-display">Total Successful Payment</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/wallet-cancel.svg" /></span>
                            <span class="dashboard-stat-number-display">65</span>
                            <span class="dashboard-stat-text-display">Total Failed Payment</span>
                        </div>
                    </div>
                    <div class="display-flex-row-no-justify dashboard-stat">
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/wall-double.svg" /></span>
                            <span class="dashboard-stat-number-display">2</span>
                            <span class="dashboard-stat-text-display">Total Basic Plan Payment</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/wall-double.svg" /></span>
                            <span class="dashboard-stat-number-display">2</span>
                            <span class="dashboard-stat-text-display">Total Gold Plan Payment</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/wall-double.svg" /></span>
                            <span class="dashboard-stat-number-display">65</span>
                            <span class="dashboard-stat-text-display">Total Premium Plan Payment</span>
                        </div>
                    </div>
                    <div class="display-flex-row-no-justify dashboard-stat">
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/car-post.svg" /></span>
                            <span class="dashboard-stat-number-display">2</span>
                            <span class="dashboard-stat-text-display">Total Reported Cars</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/money.svg" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total AZC Payment</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/money.svg" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Paystack Payment</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/money.svg" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Paypal Payment</span>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="admin-page-heading">AZCoins</h3>
                    <div class="display-flex-row-no-justify dashboard-stat">
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/money.svg" /></span>
                            <span class="dashboard-stat-number-display">2</span>
                            <span class="dashboard-stat-text-display">Total Withdrawal</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/money.svg" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Deposited</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/money.svg" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Bonus Given</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/money.svg" /></span>
                            <span class="dashboard-stat-number-display">2</span>
                            <span class="dashboard-stat-text-display">Total Spend</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/money.svg" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Refunds</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/money.svg" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Recieved</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/money.svg" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Escrow/business Transaction</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/money.svg" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Withdrawal Charges</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/money.svg" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Mutual/friends Charges</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/money.svg" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-number-display">265.00 AZC</span>
                            <span class="dashboard-stat-text-display">Total User Balance</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/money.svg" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-number-display">265.00 AZC</span>
                            <span class="dashboard-stat-text-display">Total User Available Balance</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/money.svg" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Package Bought</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/money.svg" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Escrow Balance</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/wallet-checked.svg" /></span>
                            <span class="dashboard-stat-number-display">2</span>
                            <span class="dashboard-stat-text-display">Total Successful Transaction</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/wallet-cancel.svg" /></span>
                            <span class="dashboard-stat-number-display">1</span>
                            <span class="dashboard-stat-text-display">Total Failed Transaction</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/wallet-question-mark.svg" /></span>
                            <span class="dashboard-stat-number-display">65</span>
                            <span class="dashboard-stat-text-display">Total Pending Transaction</span>
                        </div>
                    </div>
                </div>
                <div class="dashboard-footer-button-area">
                    <a href="#" class="btn dashboard-small-text">See Full Documentation</a>
                </div>
            </section>
        </main>
        
        <div class="admin-footer">
    <span><img src="../../assets/img/icons/copyright.svg" /> 2021 Autozlinks</span>
</div>        <script src="../../assets/js/jquery-3-4-1.min.js"></script>

<script src="../../assets/js/simplebar.min.js" type="application/javascript"></script>

<script src="../../assets/js/main-admin.js" type="application/javascript"></script>        
        <script>
            $(document).ready(function(){
                
                $('#admin-tags-info-customize').click(function(){
                     document.querySelector('#admin-tags-info-lt1').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt2').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt3').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt4').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt5').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-customize').classList.add("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-date-div').classList.toggle("display-none");
                     
                });
                
                $('#admin-tags-info-lt1').click(function(){
                     document.querySelector('#admin-tags-info-lt1').classList.add("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt2').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt3').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt4').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt5').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-customize').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-date-div').classList.add("display-none");
                     
                });
                
                $('#admin-tags-info-lt2').click(function(){
                     document.querySelector('#admin-tags-info-lt1').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt2').classList.add("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt3').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt4').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt5').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-customize').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-date-div').classList.add("display-none");
                     
                });
                
                $('#admin-tags-info-lt3').click(function(){
                     document.querySelector('#admin-tags-info-lt1').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt2').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt3').classList.add("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt4').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt5').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-customize').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-date-div').classList.add("display-none");
                     
                });
                
                $('#admin-tags-info-lt4').click(function(){
                     document.querySelector('#admin-tags-info-lt1').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt2').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt3').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt4').classList.add("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt5').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-customize').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-date-div').classList.add("display-none");
                     
                });
                
                $('#admin-tags-info-lt5').click(function(){
                     document.querySelector('#admin-tags-info-lt1').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt2').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt3').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt4').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-lt5').classList.add("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-customize').classList.remove("admin-tags-info-active");
                     document.querySelector('#admin-tags-info-date-div').classList.add("display-none");
                     
                });
                
            });
        </script>
    </body>
</html>
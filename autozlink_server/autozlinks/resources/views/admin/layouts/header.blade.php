<div class="display-flex-row header-bg display-none-max-600">
    <div class="border-menu-logo">
        <a href="../../index.php"><img src="{{ asset('img/logo-2.png')}}" /></a>
    </div>
    <div class="display-flex-row">
        <div class="display-flex-row heading-margin heading-search">
            <span class="heading-search-icon"><img src="{{ asset('img/icons/search.svg')}}" /></span>
            <span><input type="text" placeholder="Type your search here" class="heading-search-input" /></span>
        </div>
        <div class="display-flex-row heading-margin-right">
            <div class=" heading-margin"><img src="{{ asset('img/bell-dot.png')}}" /></div>
            <div>
                <div class="drop-down-menu">
                    <label for="hcb111" class="hcb111-img">
                        <img src="{{ asset('img/admin-user.png')}}" />
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
        <img src="{{ asset('img/logo.png')}}" class="heading-logo-mobile-v" />
        <img src="{{ asset('img/bell-dot.png')}}" style="height:24px; width: 25px;" />
    </div>
    <nav class="navbar">
      <div class="hamburger-menu">
        <div class="line line-1"></div>
        <div class="line line-2"></div>
        <div class="line line-3"></div>
      </div>
      <div class="nav-list">
            <div class="display-flex-row-no-justify heading-margin heading-search">
                <span class="heading-search-icon"><img src="{{ asset('img/icons/search.svg')}}" /></span>
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
</div>
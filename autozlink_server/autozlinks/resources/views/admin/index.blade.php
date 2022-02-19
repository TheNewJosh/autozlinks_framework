<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin</title>
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
                        <span><img src="{{ asset('img/icons/add-item.svg')}}" /></span>
                        <span class="dashboard-stat-number-display">65</span>
                        <span class="dashboard-stat-text-display">Cars Posted</span>
                    </div>
                    <div class="display-flex-column dashboard-stat-div-each">
                        <span><img src="{{ asset('img/icons/user-group.svg')}}" /></span>
                        <span class="dashboard-stat-number-display">65</span>
                        <span class="dashboard-stat-text-display">Users</span>
                    </div>
                    <div class="display-flex-column dashboard-stat-div-each">
                        <span><img src="{{ asset('img/icons/dollar-circle.svg')}}" /></span>
                        <span class="dashboard-stat-number-display">65</span>
                        <span class="dashboard-stat-text-display">Total Profit</span>
                    </div>
                </div>
                <div>
                    <h3 class="admin-page-heading">Autozlinks Post Ads</h3>
                    <div class="display-flex-row-no-justify dashboard-stat">
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/add-item.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">2</span>
                            <span class="dashboard-stat-text-display">Total free Ads</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/money.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Paid Ads</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/wallet-checked.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">65</span>
                            <span class="dashboard-stat-text-display">Total Successful Payment</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/wallet-cancel.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">65</span>
                            <span class="dashboard-stat-text-display">Total Failed Payment</span>
                        </div>
                    </div>
                    <div class="display-flex-row-no-justify dashboard-stat">
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/wall-double.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">2</span>
                            <span class="dashboard-stat-text-display">Total Basic Plan Payment</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/wall-double.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">2</span>
                            <span class="dashboard-stat-text-display">Total Gold Plan Payment</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/wall-double.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">65</span>
                            <span class="dashboard-stat-text-display">Total Premium Plan Payment</span>
                        </div>
                    </div>
                    <div class="display-flex-row-no-justify dashboard-stat">
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/car-post.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">2</span>
                            <span class="dashboard-stat-text-display">Total Reported Cars</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/money.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total AZC Payment</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/money.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Paystack Payment</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/money.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Paypal Payment</span>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="admin-page-heading">AZCoins</h3>
                    <div class="display-flex-row-no-justify dashboard-stat">
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/money.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">2</span>
                            <span class="dashboard-stat-text-display">Total Withdrawal</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/money.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Deposited</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/money.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Bonus Given</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/money.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">2</span>
                            <span class="dashboard-stat-text-display">Total Spend</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/money.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Refunds</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/money.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Recieved</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/money.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Escrow/business Transaction</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/money.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Withdrawal Charges</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/money.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Mutual/friends Charges</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/money.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-number-display">265.00 AZC</span>
                            <span class="dashboard-stat-text-display">Total User Balance</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/money.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-number-display">265.00 AZC</span>
                            <span class="dashboard-stat-text-display">Total User Available Balance</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/money.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Package Bought</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/money.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">65.6 NGN</span>
                            <span class="dashboard-stat-text-display">Total Escrow Balance</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/wallet-checked.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">2</span>
                            <span class="dashboard-stat-text-display">Total Successful Transaction</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/wallet-cancel.svg')}}" /></span>
                            <span class="dashboard-stat-number-display">1</span>
                            <span class="dashboard-stat-text-display">Total Failed Transaction</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="{{ asset('img/icons/wallet-question-mark.svg')}}" /></span>
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

        @include('admin.layouts.footer')
        @include('admin.layouts.script')

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
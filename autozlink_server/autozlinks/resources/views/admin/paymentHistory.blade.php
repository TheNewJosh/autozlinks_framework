<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Payment</title>
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
                        Payment History
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="dashboard-azc-area-btn">
                    <div class="transact-cat-table-div">
<?php for ($i=0; $i <count($dataPaymentHisAll) ; $i++){  ?>
                        <div class="user-table-space">
                            <div class="display-flex-row parallax-slider-des-divs">
                                <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                    <span class="table-heading-text" ><b>Transaction Id</b></span>
                                    <span class="table-item-text content-car-margin-b"><?= $dataPaymentHisAll[$i]['unique_id']; ?></span>
                                    <span class="table-heading-text" ><b>Request Date</b></span>
                                    <span class="table-item-text content-car-margin-b"><?= $dataPaymentHisAll[$i]['request_date']; ?></span>
                                </div>
                                <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                    <span class="table-heading-text" ><b>User Email</b></span>
                                    <span class="table-item-text content-car-margin-b"><?= $dataPaymentHisAll[$i]['user_email']; ?></span>
                                    <span class="table-heading-text" ><b>Expiration Date</b></span>
                                    <span class="table-item-text content-car-margin-b"><?= $dataPaymentHisAll[$i]['expiration_date']; ?></span>
                                </div>
                                <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                    <span class="table-heading-text" ><b>Payment Method</b></span>
                                    <span class="table-item-text content-car-margin-b"><?= $dataPaymentHisAll[$i]['payment_medium']; ?></span>
                                    <span class="table-heading-text" ><b>Payment For</b></span>
                                    <span class="table-item-text content-car-margin-b"><?= $dataPaymentHisAll[$i]['payment_type']; ?></span>
                                </div>
                                <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                    <span class="table-heading-text" ><b>Post Id</b></span>
                                    <span class="table-item-text content-car-margin-b"><?= $dataPaymentHisAll[$i]['post_id']; ?></span>
                                    <span class="table-heading-text" ><b>Status</b></span>
                                    <span class="table-item-text content-car-margin-b force-color-green"><?= $actionType[$dataPaymentHisAll[$i]['status']]; ?></span>
                                </div>
                                <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                    <span class="table-heading-text" ><b>Amount</b></span>
                                    <span class="table-item-text content-car-margin-b"><?= $dataPaymentHisAll[$i]['amount'] ?></span>
                                    <span class="table-heading-text" ><b>Plan</b></span>
                                    <span class="table-item-text content-car-margin-b force-color-blue"><?= $objadmin->getPackageID($pdo,$dataPaymentHisAll[$i]['package_id'])['title'] ?></span>
                                </div>
                                <div class="parallax-slider-des-btn drop-down-menu">
                                    <label for="action-parallax-slider-<?= $i ?>" class="edit-ads-foot-action"><i class="fas fa-cog"></i> Action <i class="fas fa-chevron-down"></i></label>
                                    <input type="checkbox" id="action-parallax-slider-<?= $i ?>" name="action-parallax-slider">
                                    <ul class="nav-item-sub-ul">
                                        <li class="nav-item-sub nav-item-sub-line">
                                            <a href="#" class="force-color-red" >
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
            </section>
        </main>
        
        @include('admin.layouts.footer')
        @include('admin.layouts.script')
    </body>
</html>
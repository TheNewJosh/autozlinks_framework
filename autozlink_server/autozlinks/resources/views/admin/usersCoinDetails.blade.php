<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Users</title>
        <?php require_once "includes/meta.php"; ?>
        <?php 
            if(isset($_GET['user_id'])){
                $ct1 = $_GET['user_id'];
                $dt = $_GET['transact_id'];
                require_once "components/actions-aaa-select.php"; 
        ?>
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
                        AZCoin/View transaction - <?= $objadmin->getUserID($pdo, $ct1)['us_username'] ?>
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="dashboard-azc-area-btn">
                    <div class="display-flex-row">
                        <a href="users-coin.php?user_id=<?= $ct1 ?>" class="btn force-bg-blue">Back</a>
<!--                        <a href="#" class="btn force-bg-red">Delete</a>-->
                    </div>
                    <div class="users-mutal-detail-div display-flex-column">
                        <div class="transact-cat-dis-img-big display-flex-row-no-justify users-mutal-detail-item-center">
                            <img src="../../assets/img/users-avatar/<?= $objadmin->getUserID($pdo, $dataCoinBoughtID['user_id'])['us_img'] ?>" />
                        </div>
                        <div class="display-flex-row">
                            <span class="display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Date</b></div>
                                <div class="table-item-text" ><?= $dataCoinBoughtID['datetime'] ?></div>
                            </span>
                            <span class="display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Username</b></div>
                                <div class="table-item-text" ><?= $objadmin->getUserID($pdo, $dataCoinBoughtID['user_id'])['us_username'] ?></div>
                                <div class="table-item-text" ><?= $objadmin->getUserID($pdo, $dataCoinBoughtID['user_id'])['us_email'] ?></div>
                            </span>
                            <span class="display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Account Details</b></div>
                                <div class="table-item-text" >
                                    <?= $objadmin->getUserID($pdo, $dataCoinBoughtID['user_id'])['bank_acct_name'] ?>
                                </div>
                                <div class="table-item-text" >
                                    <?= $objadmin->getUserID($pdo, $dataCoinBoughtID['user_id'])['bank_acct_no'] ?>
                                    /
                                    <?= $objadmin->getUserID($pdo, $dataCoinBoughtID['user_id'])['bank_name'] ?>
                                </div>
                            </span>
                        </div>
                        <div class="display-flex-row">
                            <span class="display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Method of Payment</b></div>
                                <div class="table-item-text" ><?= $paymentMethod[$dataCoinBoughtID['payment_method']] ?></div>
                            </span>
                            <span class="display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Type of Transaction</b></div>
                                <div class="table-item-text" ><?= $typeTransact[$dataCoinBoughtID['type_transact']] ?></div>
                            </span>
                            <span class="display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Amount</b></div>
                                <div class="table-item-text" ><?= number_format((float)$dataCoinBoughtID['amountazc'], 2, '.', '') ?> AZC</div>
                                <div class="table-item-text" ><?= number_format((float)$dataCoinBoughtID['amountcur'], 2, '.', '') ?> NGN</div>
                            </span>
                        </div>
                        <div class="display-flex-column">
                            <span class="users-mutal-detail-item-center">
                                <b class="table-heading-text">Transaction ID:</b>
                                <sp class="table-item-text"><?= $dataCoinBoughtID['transaction_code'] ?></sp>
                            </span>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php } ?>
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
    </body>
</html>
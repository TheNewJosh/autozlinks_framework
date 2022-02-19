<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - User</title>
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
                        <a href="users-mutual.php?user_id=<?= $ct1 ?>" class="btn force-bg-blue">Back</a>
<!--                        <a href="#" class="btn force-bg-red">Delete</a>-->
                    </div>
                    <div class="users-mutal-detail-div display-flex-column">
                        <div class="transact-cat-dis-img display-flex-row-no-justify users-mutal-detail-item-center">
                            <img src="../../assets/img/users-avatar/<?= $objadmin->getUserID($pdo, $dataMoneyTransactID['lmt_user_id'])['us_img'] ?>" />
                            <i class="fas fa-arrow-right"></i>
                            <img src="../../assets/img/users-avatar/<?= $objadmin->getUserID($pdo, $dataMoneyTransactID['lmt_coin_to'])['us_img'] ?>" />
                        </div>
                        <div class="display-flex-row">
                            <span class="display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Date</b></div>
                                <div class="table-item-text" ><?= $dataMoneyTransactID['lmt_datetime'] ?></div>
                            </span>
                            <span class="display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Sender</b></div>
                                <div class="table-item-text" ><?= $objadmin->getUserID($pdo, $dataMoneyTransactID['lmt_user_id'])['us_username'] ?></div>
                            </span>
                            <span class="display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Reciever</b></div>
                                <div class="table-item-text" ><?= $objadmin->getUserID($pdo, $dataMoneyTransactID['lmt_coin_to'])['us_username'] ?></div>
                            </span>
                        </div>
                        <div class="display-flex-row">
                            <span class="display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Narration</b></div>
                                <div class="table-item-text" ><?= $dataMoneyTransactID['lmt_reason_trans'] ?></div>
                            </span>
                            <span class="display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Type of Transaction</b></div>
                                <div class="table-item-text" ><?= $typeTransact[$dataMoneyTransactID['lmt_type']] ?></div>
                            </span>
                            <span class="display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Amount</b></div>
                                <div class="table-item-text" >
                                    <?= number_format((float)$dataMoneyTransactID['lmt_amountazc'], 2, '.', '') ?> 
                                    AZC
                                </div>
                                <div class="table-item-text" >
                                    <?= number_format((float)$dataMoneyTransactID['lmt_amountd'], 2, '.', '') ?>
                                    NGN
                                </div>
                            </span>
                        </div>
                        <div class="display-flex-column">
                            <span><b>Dispute Status: </b><sp class="force-color-blue">ON</sp></span>
                            <span>
                                <a href="#">
                                    <img src="../../assets/img/icons/arrow-case.svg" />
                                    <sp class="force-color-blue">Open dispute chat</sp>
                                </a>
                            </span>
                        </div>
                        <div class="display-flex-column">
                            <span class="users-mutal-detail-item-center">
                                <b class="table-heading-text">Transaction ID:</b>
                                <sp class="table-item-text"><?= $dataMoneyTransactID['lmt_transaction_code'] ?></sp>
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
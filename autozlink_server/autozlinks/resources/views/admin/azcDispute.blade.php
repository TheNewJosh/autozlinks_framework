<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Users</title>
        <?php require_once "includes/meta.php"; ?>
        <link href="../../assets/css/toggle-switch.css" rel="stylesheet" type="text/css" />
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
                    <div class="display-flex-row-no-justify dashboard-stat">
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/chat-question.svg" /></span>
                            <span class="dashboard-stat-number-display">2</span>
                            <span class="dashboard-stat-text-display">Dispute request</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/chat-question.svg" /></span>
                            <span class="dashboard-stat-number-display">1</span>
                            <span class="dashboard-stat-text-display">New Dsipute</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/chat-question.svg" /></span>
                            <span class="dashboard-stat-number-display">65</span>
                            <span class="dashboard-stat-text-display">Solved Dispute</span>
                        </div>
                        <div class="display-flex-column dashboard-stat-div-each">
                            <span><img src="../../assets/img/icons/chat-question.svg" /></span>
                            <span class="dashboard-stat-number-display">65</span>
                            <span class="dashboard-stat-text-display">Dispute In Progress</span>
                        </div>
                    </div>
                    <div class="transact-cat-table-div">
                        <div class="display-flex-row user-table-space">
                            <span class="transact-cat-dis-img display-flex-row-no-justify">
                                <a href="#" class="display-flex-row-no-justify">
                                    <img src="../../assets/img/users-avatar/avatar.png" />
                                    <i class="fas fa-arrow-right"></i>
                                    <img src="../../assets/img/users-avatar/avatar.png" />
                                </a>
                            </span>
                            <span class="user-dis-name display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Date</b></div>
                                <div class="table-item-text" >27 May, 2021</div>
                            </span>
                            <span class="user-dis-name display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Sender</b></div>
                                <div class="table-item-text" >Faith</div>
                            </span>
                            <span class="user-dis-name display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Reciever</b></div>
                                <div class="table-item-text" >John</div>
                            </span>
                            <span class="user-dis-name display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Dispute Status</b></div>
                                <select class="user-kyc-select">
                                    <option class="force-color-green">Solved Dispute</option>
                                    <option class="force-color-red">Pending</option>
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
    </body>
</html>
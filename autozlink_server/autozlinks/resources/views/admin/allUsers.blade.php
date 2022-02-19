<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Users</title>
        <?php require_once "includes/meta.php"; ?>
        <?php require_once "components/actions-aaa-select.php"; ?>
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
                        Users
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="dashboard-azc-area-btn">
                    <div class="display-flex-row-justify-end alert hide" id="alert-save">
                        <span><img src="../../assets/img/icons/check-green-bg.svg" /></span>
                        <span class="table-heading-text parallax-slider-message"><b>Successfully Saved</b></span>
                    </div>
                    <div class="display-flex-row-justify-end alert hide" id="alert-delete">
                        <span><img src="../../assets/img/icons/check-green-bg.svg" /></span>
                        <span class="table-heading-text parallax-slider-message"><b class="force-color-red">Successfully Deleted</b></span>
                    </div>
                    <div class="display-flex-row-no-justify">
                        <a href="all-users-create.php" class="btn force-bg-green user-table-div-alls-mr">Create User</a>
                        <a href="#" class="btn force-bg-blue user-table-div-alls-mr">Export User Emails(.csv)</a>
                        <a href="#" class="btn force-bg-blue user-table-div-alls-mr">Export User Phone</a>
                        <a href="#" class="btn force-bg-blue user-table-div-alls-mr">Send Email to Users</a>
                    </div>
                    <div class="user-table-div-alls">
<?php for ($i=0; $i <count($dataUserAll) ; $i++){  ?>
                        <div class="display-flex-row user-table-space-alls">
                            <span class="user-dis-img"><img src="../../assets/img/users-avatar/<?= $dataUserAll[$i]['us_img']; ?>" /></span>
                            <span class="user-dis-name display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Name</b></div>
                                <div class="table-item-text" ><?= $dataUserAll[$i]['us_full_name']; ?></div>
                            </span>
                            <span class="user-dis-name display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Type</b></div>
                                <div class="table-item-text" ><?= $userType[$dataUserAll[$i]['auth']]; ?></div>
                            </span>
                            <span class="user-dis-name display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Email</b></div>
                                <div class="table-item-text" ><?= $dataUserAll[$i]['us_email']; ?></div>
                            </span>
                            <span class="user-dis-name display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Gender</b></div>
                                <div class="table-item-text" ><?= $userGender[$dataUserAll[$i]['us_gender']]; ?></div>
                            </span>
                            <span class="user-dis-name display-flex-column user-table-span-margin">
                                <div class="table-heading-text" ><b>Status</b></div>
                                <div class="table-item-text force-color-green" ><?= $userStatus[$dataUserAll[$i]['status']]; ?></div>
                            </span>
                            <span class="user-table-span-margin">
                                <div class="drop-down-menu">
                                    <label for="action-parallax-slider-<?= $i ?>" class="edit-ads-foot-action"><i class="fas fa-cog"></i> Action <i class="fas fa-chevron-down"></i></label>
                                    <input type="checkbox" id="action-parallax-slider-<?= $i ?>" name="action-parallax-slider">
                                    <ul class="nav-item-sub-ul">
                                        <li class="nav-item-sub">
                                            <a href="#?id=<?= $dataUserAll[$i]['us_id']; ?>">
                                                <i class="fas fa-info-circle"></i>Details
                                            </a>
                                        </li>
                                        <li class="nav-item-sub nav-item-sub-line">
                                            <a href="#?id=<?= $dataUserAll[$i]['us_id']; ?>">
                                                <i class="fas fa-edit"></i>Edit
                                            </a>
                                        </li>
                                        <li class="nav-item-sub nav-item-sub-line">
                                            <a href="#" class="force-color-red" id="click-modal-delete">
                                            <i class="fas fa-trash-alt"></i>Delete
                                            </a>
                                        </li>
                                        <li class="nav-item-sub nav-item-sub-line">
                                            <a href="#" class="force-color-red" id="click-modal-delete">
                                            <i class="fas fa-ban"></i>Ban
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </span>
                        </div>
<?php } ?>
                    </div>
                </div>
            </section>
        </main>
        
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
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
            if(msg === "sucess-del"){
                $('#alert-delete').addClass("show");
                $('#alert-delete').removeClass("hide");
                $('#alert-delete').addClass("showAlert");
                setTimeout(function(){
                 $('#alert-delete').removeClass("show");
                 $('#alert-delete').addClass("hide");
                },5000);
            }
        </script>
    </body>
</html>
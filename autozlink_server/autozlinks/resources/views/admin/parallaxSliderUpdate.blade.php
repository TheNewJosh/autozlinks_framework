<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Parallax</title>
        <?php require_once "includes/meta.php"; ?>
        <?php require "components/actions-parallax-edit.php"; ?>
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
                    <div class="display-flex-row-justify-end alert hide">
                        <span><img src="../../assets/img/icons/check-green-bg.svg" /></span>
                        <span class="table-heading-text parallax-slider-message" ><b>Successfully Edited</b></span>
                    </div>
                    <div class="users-mutal-detail-div">
                        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="class-kyc-div" enctype="multipart/form-data">
                            <div class="display-flex-row-no-justify parallax-slider-upd-btn">
                                <span class="parallax-status">
                                    <input type="radio" id="status1" name="status" value="1"  <?= $status1 ?> />
                                    <label for="status1" class="btn force-bg-blue parallax-slider-upd-btn-a">Draft</label>
                                </span>
                                <span class="parallax-status">
                                    <input type="radio" id="status2" name="status" value="2"  <?= $status2 ?> />
                                    <label for="status2" class="btn force-bg-green parallax-slider-upd-btn-a">Publish</label>
                                </span>
                                <span>
                                    <a href="#" class="btn force-bg-red parallax-slider-upd-btn-a" id="click-modal-delete" data-slider-title="<?= $title ?>" data-href="components/actions-aaa-delete.php?parallax-slider-slide_id=<?= $dt ?>&parallax-slider-img_url=<?= $h_img ?>">Delete</a>
                                </span>
                            </div>
                            <input type="hidden" name="dt" value="<?= $dt ?>" />
                            <input type="hidden" name="h_img" value="<?= $h_img ?>" />
<?php if($message_err != ''){?>
    <div class="alert-danger">
        <strong>Error!</strong> <?php echo $message_err; ?>
    </div>
<?php }?>
                            <div class="display-flex-row-no-justify class-kyc-input-group">
                                <div class="display-flex-column">
                                    <span class="parallax-slider-upd-span">
                                        <img src="../../assets/img/slider/<?= $h_img ?>" class="parallax-slider-upd-img" />
                                    </span>
                                    <span class="parallax-slider-upd-span">
                                        <sp class="table-item-text">(Min 1440 x 658 px)</sp>
                                    </span>
                                    <span class="parallax-slider-upd-span">
                                        <input type="file" name="image_link" placeholder="Type here" accept=".png, .jpeg, .jpg, .gif" />
                                    </span>
                                    <span class="force-color-red"><?= $image_link_err ?></span>
                                </div>
                                <div class="display-flex-column">
                                    <div class="input-group fieldset-relative">
                                        <input type="text" name="title" value="<?= $title ?>" placeholder="Type here" />
                                        <span class="edit-ads-input-legend force-color-blue">Title</span>
                                        <span class="force-color-red"><?= $title_err ?></span>
                                    </div>
                                    <div class="input-group fieldset-relative">
                                        <textarea type="text" name="description" placeholder="Type here"><?= $description ?></textarea>
                                        <span class="edit-ads-input-legend force-color-blue">Description</span>
                                        <span class="force-color-red"><?= $description_err ?></span>
                                    </div>
                                    <div class="input-group fieldset-relative">
                                        <input type="number" name="slider_order" value="<?= $slider_order ?>" placeholder="Type here" />
                                        <span class="edit-ads-input-legend force-color-blue">Slider Order</span>
                                        <span class="force-color-red"><?= $slider_order_err ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="class-kyc-button">
                                <button type="submit" name="submit_parallex_btn" class="btn force-bg-blue">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        
<!--    Modal Body For Delete Parallax Slider Start    -->
<div class="modal-bg" id="modal-bg-delete">
    <div  class="modal">
        <span class="modal-close" id="modal-close-delete">X</span>
        <div class="text-center-div">
            <h1 class="text-center" id="modal-title-delete"></h1>
            <p class="blog-loop-card-para">Confirm to delete this?</p>
        </div>
        <div class="btns-group display-flex-row">
            <a href="#" class="btn force-bg-black" id="modal-cancel-delete">Cancel</a>
            <a class="btn force-bg-red" id="modal-confirm-delete">Confirm</a>
        </div>
    </div>
</div>
<!--    Modal Body For Delete Parallax Slider End    -->
        
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
        
        <!--    Get Message status url    -->
        <script>
            var msg = new URL(window.location.href).searchParams.get("msg");
            if(msg === "sucess"){
                $('.alert').addClass("show");
                $('.alert').removeClass("hide");
                $('.alert').addClass("showAlert");
                setTimeout(function(){
                 $('.alert').removeClass("show");
                 $('.alert').addClass("hide");
                },5000);
            }
        </script>
        <script>
            var modalBtn = document.querySelector("#click-modal-delete");
            var modalBg = document.querySelector("#modal-bg-delete");
            var modalClose = document.querySelector("#modal-close-delete");
            var modalTitle = document.querySelector("#modal-title-delete");
            var modalConfirm = document.querySelector("#modal-confirm-delete");
            var modalCancel = document.querySelector("#modal-cancel-delete");

            modalBtn.addEventListener('click', function (){
                modalTitle.textContent = modalBtn.getAttribute('data-slider-title');
                modalConfirm.setAttribute('href', modalBtn.getAttribute('data-href'));
                modalBg.classList.add("modal-bg-active");
            });

            modalClose.addEventListener('click', function (){
                modalBg.classList.remove("modal-bg-active");
            });
            
            modalCancel.addEventListener('click', function (){
                modalBg.classList.remove("modal-bg-active");
            });

            window.onclick = function(e){
                if(e.target == modalBg){
                    modalBg.classList.remove("modal-bg-active");
                }
            }
        </script>
    </body>
</html>
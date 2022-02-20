<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Blog</title>
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
                                    <input type="radio" id="status1" name="status" value="0"  <?= $status1 ?> />
                                    <label for="status1" class="btn force-bg-blue parallax-slider-upd-btn-a">Draft</label>
                                </span>
                                <span class="parallax-status">
                                    <input type="radio" id="status2" name="status" value="1"  <?= $status2 ?> />
                                    <label for="status2" class="btn force-bg-green parallax-slider-upd-btn-a">Publish</label>
                                </span>
                                <span class="parallax-status" style="margin-left:10px;">
                                    <a href="#" class="btn force-bg-red click-modal-delete" id="click-modal-delete" data-slider-title="<?= $title ?>" data-href="components/actions-aaa-delete.php?blog-blog_id=<?= $dt ?>&blog-img_url=<?= $h_img ?>">Delete</a>
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
                                    <?php if($h_img){ ?>
                                    <span class="parallax-slider-upd-span">
                                        <img src="../../assets/img/blog/<?= $h_img ?>" class="parallax-slider-upd-img" />
                                    </span>
                                    <?php }else{ ?>
                                    <span class="parallax-slider-upd-span">
                                        <img src="../../assets/img/icons/picture.svg" class="parallax-slider-upd-img" />
                                    </span>
                                    <?php } ?>
                                    <span class="parallax-slider-upd-span">
                                        <sp class="table-item-text">(Min 300 x 260)</sp>
                                    </span>
                                    <span class="parallax-slider-upd-span">
                                        <input type="file" name="image_link" placeholder="Type here" accept=".png, .jpeg, .jpg, .gif" />
                                    </span>
                                    <span class="force-color-red"><?= $image_link_err ?></span>
                                </div>
                                <div class="display-flex-column">
                                    <div class="input-group fieldset-relative">
                                        <select name="type" id="" style="width: 70%; height:40px; border-radius:10px;">
                                            <option value=""></option>
                                            <option value="News" <?php if($type == "News"){ echo "selected";} ?> >News</option>
                                        </select>
                                        <span class="edit-ads-input-legend force-color-blue">section</span>
                                        <span class="force-color-red"><?= $type_err ?></span>
                                    </div>
                                    <div class="input-group fieldset-relative">
                                        <input type="text" name="title" value="<?= $title ?>" placeholder="Type here" />
                                        <span class="edit-ads-input-legend force-color-blue">Title</span>
                                        <span class="force-color-red"><?= $title_err ?></span>
                                    </div>
                                    <div class="input-group fieldset-relative">
                                        <textarea id="textarea" name="description"><?= $description ?></textarea>
                                        <span class="edit-ads-input-legend force-color-blue">Content</span>
                                        <span class="force-color-red"><?= $description_err ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="class-kyc-button">
                                <button type="submit" name="submit_blog_btn" class="btn force-bg-blue">Save</button>
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

        @include('admin.layouts.footer')
        @include('admin.layouts.script')

        <script src="https://cdn.tiny.cloud/1/0bafku73iwl16lvy29rbw1ndewfrm8fc90bly3tnv1s8nqoz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
            selector: 'textarea',
            });
        </script>
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
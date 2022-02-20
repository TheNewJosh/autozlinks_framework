<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Parallax</title>
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
                        All Sliders
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
                    <div class="transact-cat-table-div">
<?php for ($i=0; $i <count($dataParallaxSlider) ; $i++){  ?>
                        <div class="display-flex-row-no-justify user-table-space-no-padding">
                            <div class="parallax-slider-img-div">
                                <a href="parallax-slider-update.php?slider_id=<?= $dataParallaxSlider[$i]['psr_id']; ?>"><img src="../../assets/img/slider/<?= $dataParallaxSlider[$i]['psr_image_link']; ?>" /></a>
                            </div>
                            <div class="display-flex-row parallax-slider-des-divs">
                                <div class="display-flex-column parallax-slider-des-div">
                                    <span class="table-heading-text" ><b>Title</b></span>
                                    <span class="table-item-text"><?= $dataParallaxSlider[$i]['psr_title'] ?></span>
                                    <span class="table-heading-text" ><b>Description</b></span>
                                    <span class="table-item-text parallax-slider-des-text-width"><?= $dataParallaxSlider[$i]['psr_description'] ?></span>
                                </div>
                                <div class="display-flex-column parallax-slider-des-div">
                                    <span class="table-heading-text" ><b>Slide order</b></span>
                                    <span class="table-item-text"><?= $dataParallaxSlider[$i]['psr_slider_order']; ?></span>
                                    <span class="table-heading-text" ><b>Status</b></span>
                                    <span class="table-item-text">
<?php
if($dataParallaxSlider[$i]['psr_status'] == 2){
    echo '<sp class="force-color-green">Published</sp>';
}else{
    echo '<sp class="force-color-yellow">Draft</sp>';
}                                                      
?>
                                    </span>
                                </div>
                                <div class="parallax-slider-des-btn drop-down-menu">
                                    <label for="action-parallax-slider-<?= $i ?>" class="edit-ads-foot-action"><i class="fas fa-cog"></i> Action <i class="fas fa-chevron-down"></i></label>
                                    <input type="checkbox" id="action-parallax-slider-<?= $i ?>" name="action-parallax-slider">
                                    <ul class="nav-item-sub-ul">
                                        <li class="nav-item-sub"><a href="parallax-slider-update.php?slider_id=<?= $dataParallaxSlider[$i]['psr_id']; ?>"><i class="fas fa-edit"></i>Edit</a></li>
                                        <li class="nav-item-sub nav-item-sub-line">
                                            <a href="#" class="force-color-red click-modal-delete" id="click-modal-delete-<?= $i ?>" data-slider-title="<?= $dataParallaxSlider[$i]['psr_title'] ?>" data-href="components/actions-aaa-delete.php?parallax-slider-slide_id=<?= $dataParallaxSlider[$i]['psr_id'] ?>&parallax-slider-img_url=<?= $dataParallaxSlider[$i]['psr_image_link'] ?>">
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
                <div class="dashboard-footer-button-area">
                    <a href="#" class="btn dashboard-small-text">Save Order</a>
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
        <script>
            var modalBg = document.querySelector("#modal-bg-delete");
            var modalClose = document.querySelector("#modal-close-delete");
            var modalTitle = document.querySelector("#modal-title-delete");
            var modalConfirm = document.querySelector("#modal-confirm-delete");
            var modalCancel = document.querySelector("#modal-cancel-delete");

            $(document).ready(function(){
                
               $(document).on('click', '.click-modal-delete', function(){
                    modalTitle.textContent = $(this).attr("data-slider-title");
                    modalConfirm.setAttribute('href', $(this).attr("data-href"));
                    modalBg.classList.add("modal-bg-active");
                }); 
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
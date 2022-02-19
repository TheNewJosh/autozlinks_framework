<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Car Categories</title>
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
                        All Car Categories
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="content-location-area-btn">
                    <div class="content-car-loc-btn">
                          <a href="#" class="btn dashboard-small-text click-modal-form">New Car Category</a>
                    </div>
                    <div class="transact-cat-table-div">
<?php for ($i=0; $i <count($dataCategoriesAll) ; $i++){  ?>
                        <div class="user-table-space">
                            <div class="display-flex-row parallax-slider-des-divs">
                                <div class="parallax-slider-des-div content-car-margin-s car-config-img">
                                    <img src="../../assets/img/car-category/<?= $dataCategoriesAll[$i]['featured_img'] ?>" />
                                </div>
                                <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                    <span class="table-heading-text" ><b>Title</b></span>
                                    <span class="table-item-text"><?= $dataCategoriesAll[$i]['title'] ?></span>
                                </div>
                                <div class="car-config-action-btn drop-down-menu">
                                    <label for="action-parallax-slider-<?= $i ?>" class="edit-ads-foot-action"><i class="fas fa-cog"></i> Action <i class="fas fa-chevron-down"></i></label>
                                    <input type="checkbox" id="action-parallax-slider-<?= $i ?>" name="action-parallax-slider">
                                    <ul class="nav-item-sub-ul">
                                        <li class="nav-item-sub">
                                                    <a href="#" class="click-modal-update" id="click-modal-update-<?= $i ?>" data-slider-title="<?= $dataCategoriesAll[$i]['title'] ?>" data-id="<?= $dataCategoriesAll[$i]['id'] ?>"><i class="fas fa-edit"></i>Edit</a>
                                                </li>
                                                <li class="nav-item-sub nav-item-sub-line">
                                                    <a href="#" class="force-color-red click-modal-delete" id="click-modal-delete-<?= $i ?>" data-slider-title="<?= $dataCategoriesAll[$i]['title'] ?>" data-href="components/actions-aaa-delete.php?content-car-location_id=<?= $dataCategoriesAll[$i]['id'] ?>&csc=country">
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

<!--    Modal Body For Form Start    -->
<div class="modal-bg" id="modal-bg-form">
    <div  class="modal">
        <span class="modal-close" id="modal-close-form">X</span>
        <div class="text-center-div">
            <h1 class="text-center">New car category</h1>
            <textarea placeholder="Type country names here" id="formTextareaInput" class="modal-textarea"></textarea>
            <p class="blog-loop-card-para">Put one or more country name as "," (comma) separated. Like Newyork,Dallas,idaho</p>
            <p class="blog-loop-card-para" id="return-message"></p>
        </div>
        <div class="btns-group display-flex-row">
            <a href="#" class="btn force-bg-black" id="modal-cancel-form">Close</a>
            <a class="btn force-bg-green" id="modal-confirm-form">Save</a>
        </div>
    </div>
</div>
<!--    Modal Body For Form End    -->
        
<!--    Modal Body For Form Start    -->
<div class="modal-bg" id="modal-bg-update">
    <div  class="modal">
        <span class="modal-close" id="modal-close-update">X</span>
        <div class="text-center-div">
            <h1 class="text-center">Edit car category</h1>
            <input type="text" placeholder="Type country names here" id="formTextInput" class="modal-textinput"/>
            <input type="hidden" id="formTextInputID" />
            <p class="blog-loop-card-para" id="return-message-up"></p>
        </div>
        <div class="btns-group display-flex-row">
            <a href="#" class="btn force-bg-black" id="modal-cancel-update">Close</a>
            <a class="btn force-bg-green" id="modal-confirm-update">Update</a>
        </div>
    </div>
</div>
<!--    Modal Body For Form End    -->
        
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
        <script>
            var modalBgf = document.querySelector("#modal-bg-form");
            var modalClosef = document.querySelector("#modal-close-form");
            var modalCancelf = document.querySelector("#modal-cancel-form");

            $(document).ready(function(){
               $(document).on('click', '.click-modal-form', function(){
                    modalBgf.classList.add("modal-bg-active");
                }); 
            });

            modalClosef.addEventListener('click', function (){
                modalBgf.classList.remove("modal-bg-active");
            });
            
            modalCancelf.addEventListener('click', function (){
                modalBgf.classList.remove("modal-bg-active");
            });

            window.onclick = function(e){
                if(e.target == modalBgf){
                    modalBgf.classList.remove("modal-bg-active");
                }
            }
            
            $(document).ready(function(){
               $(document).on('click', '#modal-confirm-form', function(){
                   document.querySelector("#return-message").innerHTML = '<span class="force-color-red">Loading.....</span'
                   var formTextareaInput =  $('#formTextareaInput').val();
                   var formTextareaInputArr = formTextareaInput.split(',');
                   var parent_dt = 0;
                   var type_d = 3;
                   if(formTextareaInput === ""){
                       document.querySelector("#return-message").innerHTML = '<span class="force-color-red">Field cannont be empty</span'
                   }else{
                          $.ajax({
                            url: "components/aaa-select-table-special.php", 
                            method:"POST",
                            data:{upload_car_location_country:"upload_car_location_country", formTextareaInputArr:formTextareaInputArr, parent_dt:parent_dt, type_d:type_d},
                            dataType: "json",
                            success: function(data){
                                if(data.status == 1){
                                    window.location.href = "content-car-location.php?msg=sucess"
                                }else{
                                    document.querySelector("#return-message").innerHTML = '<span class="force-color-red">Error Occur</span'
                                }                    
                            },
                        }); 
                   }
                }); 
            });
            
        </script>
         <script>
            var modalBInput = document.querySelector("#formTextInput");
            var modalBInputID = document.querySelector("#formTextInputID");
            var modalBgu = document.querySelector("#modal-bg-update");
            var modalCloseu = document.querySelector("#modal-close-update");
            var modalCancelu = document.querySelector("#modal-cancel-update");

            $(document).ready(function(){
               $(document).on('click', '.click-modal-update', function(){
                    modalBInput.value = $(this).attr("data-slider-title");
                    modalBInputID.value = $(this).attr("data-id");
                    modalBgu.classList.add("modal-bg-active");
                }); 
            });

            modalCloseu.addEventListener('click', function (){
                modalBgu.classList.remove("modal-bg-active");
            });
            
            modalCancelu.addEventListener('click', function (){
                modalBgu.classList.remove("modal-bg-active");
            });

            window.onclick = function(e){
                if(e.target == modalBgu){
                    modalBgu.classList.remove("modal-bg-active");
                }
            }
            
            $(document).ready(function(){
               $(document).on('click', '#modal-confirm-update', function(){
                   
                   document.querySelector("#return-message-up").innerHTML = '<span class="force-color-red">Loading.....</span'
                   
                   var formTextInput =  $('#formTextInput').val();
                   var formTextInputID =  $('#formTextInputID').val();
                   
                   if(formTextInput === ""){
                       document.querySelector("#return-message-up").innerHTML = '<span class="force-color-red">Field cannont be empty</span'
                   }else{
                          $.ajax({
                            url: "components/aaa-select-table-special.php", 
                            method:"POST",
                            data:{update_car_location_country:"update_car_location_country", formTextInput:formTextInput, formTextInputID:formTextInputID},
                            dataType: "json",
                            success: function(data){
                                if(data.status == 1){
                                    window.location.href = "content-car-location.php?msg=sucess"
                                }else{
                                    document.querySelector("#return-message-up").innerHTML = '<span class="force-color-red">Error Occur</span'
                                }                    
                            },
                        }); 
                   }
                }); 
            });
            
        </script>
    </body>
</html>
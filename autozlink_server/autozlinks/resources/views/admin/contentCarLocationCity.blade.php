<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Locations</title>
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
                        All Location
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="display-flex-row-no-justify">
                    <div class="content-location-area-btn">
                        <div class="content-car-loc-btn">
                              <a href="#" class="btn dashboard-small-text click-modal-form">Add Country</a>
                        </div>
                        <div class="display-flex-row-justify-end alert hide" id="alert-save">
                            <span><img src="../../assets/img/icons/check-green-bg.svg" class="markcheck-move" /></span>
                            <span class="table-heading-text parallax-slider-message"><b>Successfully Saved</b></span>
                        </div>
                        <div class="display-flex-row-justify-end alert hide" id="alert-delete">
                            <span><img src="../../assets/img/icons/check-green-bg.svg" class="markcheck-move" /></span>
                            <span class="table-heading-text parallax-slider-message"><b class="force-color-red">Successfully Deleted</b></span>
                        </div>
                        <div class="transact-cat-table-div">
<?php 
    $dataLocationAll= $objadmin->getLocationAll($pdo, "3"); 
    for ($i=0; $i <count($dataLocationAll) ; $i++){ 
?>
                            <div class="user-table-space">
                                <div class="display-flex-row parallax-slider-des-divs">
                                    <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                        <span class="table-heading-text" ><b>Name</b></span>
                                        <span class="user-dis-name-sm table-item-text"><?= $dataLocationAll[$i]['name']; ?></span>
                                    </div>
                                    <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                        <span class="table-heading-text" ><b>Type</b></span>
                                        <span class="user-dis-name-sm table-item-text">Country</span>
                                    </div>
                                    <div class=" parallax-slider-des-div content-car-margin-s">
                                        <div class="table-heading-text content-car-loc-a"><a href="content-car-location-state.php?country_id=<?= $dataLocationAll[$i]['id'] ?>" class="force-color-blue">See State</a></div>
                                        <div class="drop-down-menu">
                                            <label for="action-3-<?= $i ?>" class="edit-ads-foot-action"><i class="fas fa-cog"></i> Action <i class="fas fa-chevron-down"></i></label>
                                            <input type="checkbox" id="action-3-<?= $i ?>" name="action-parallax-slider">
                                            <ul class="nav-item-sub-ul">
                                                <li class="nav-item-sub">
                                                    <a href="#" class="click-modal-update" id="click-modal-update-<?= $i ?>" data-slider-title="<?= $dataLocationAll[$i]['name'] ?>" data-id="<?= $dataLocationAll[$i]['id'] ?>"><i class="fas fa-edit"></i>Edit</a>
                                                </li>
                                                <li class="nav-item-sub nav-item-sub-line">
                                                    <a href="#" class="force-color-red click-modal-delete" id="click-modal-delete-<?= $i ?>" data-slider-title="<?= $dataLocationAll[$i]['name'] ?>" data-href="components/actions-aaa-delete.php?content-car-location_id=<?= $dataLocationAll[$i]['id'] ?>&csc=country">
                                                    <i class="fas fa-trash-alt"></i>Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php } ?>
                        </div>
                    </div>
                    <div class="content-location-area-btn">
                        <div class="content-car-loc-btn">
                              <a href="#" class="btn dashboard-small-text click-modal-form-st">Add State</a>
                        </div>
                        <div class="display-flex-row-justify-end alert hide" id="alert-save-st">
                            <span><img src="../../assets/img/icons/check-green-bg.svg" class="markcheck-move" /></span>
                            <span class="table-heading-text parallax-slider-message"><b>Successfully Saved</b></span>
                        </div>
                        <div class="display-flex-row-justify-end alert hide" id="alert-delete-st">
                            <span><img src="../../assets/img/icons/check-green-bg.svg" class="markcheck-move" /></span>
                            <span class="table-heading-text parallax-slider-message"><b class="force-color-red">Successfully Deleted</b></span>
                        </div>
                        <div class="transact-cat-table-div">
<?php 
    if(isset($_GET['country_id'])){
    $dtcon = $_GET['country_id'];
    $dataLocationAll= $objadmin->getLocationPAll($pdo, "2", $dtcon); 
    for ($i=0; $i <count($dataLocationAll) ; $i++){ 
?>
                            <div class="user-table-space">
                                <div class="display-flex-row parallax-slider-des-divs">
                                    <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                        <span class="table-heading-text" ><b>Name</b></span>
                                        <span class="user-dis-name-sm table-item-text"><?= $dataLocationAll[$i]['name']; ?></span>
                                    </div>
                                    <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                        <span class="table-heading-text" ><b>Type</b></span>
                                        <span class="user-dis-name-sm table-item-text">State</span>
                                    </div>
                                    <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                        <span class="table-heading-text" ><b>Parent</b></span>
                                        <span class="user-dis-name-sm table-item-text">
                                            <?= $objadmin->getLocationID($pdo, $dataLocationAll[$i]['parent'])['name'] ?>
                                        </span>
                                    </div>
                                    <div class=" parallax-slider-des-div content-car-margin-s">
                                        <div class="table-heading-text content-car-loc-a"><a href="content-car-location-city.php?country_id=<?= $dtcon ?>&state_id=<?= $dataLocationAll[$i]['id'] ?>" class="force-color-blue">See Cities</a></div>
                                        <div class="drop-down-menu">
                                            <label for="action-2-<?= $i ?>" class="edit-ads-foot-action"><i class="fas fa-cog"></i> Action <i class="fas fa-chevron-down"></i></label>
                                            <input type="checkbox" id="action-2-<?= $i ?>" name="action-parallax-slider">
                                            <ul class="nav-item-sub-ul">
                                                <li class="nav-item-sub">
                                                    <a href="#" class="click-modal-update-st" id="click-modal-update-st-<?= $i ?>" data-slider-title="<?= $dataLocationAll[$i]['name'] ?>" data-id="<?= $dataLocationAll[$i]['id'] ?>"><i class="fas fa-edit"></i>Edit</a>
                                                </li>
                                                <li class="nav-item-sub nav-item-sub-line">
                                                    <a href="#" class="force-color-red click-modal-delete-st" id="click-modal-delete-st-<?= $i ?>" data-slider-title="<?= $dataLocationAll[$i]['name'] ?>" data-href="components/actions-aaa-delete.php?content-car-location_id=<?= $dataLocationAll[$i]['id'] ?>&parent_id=<?= $dataLocationAll[$i]['parent'] ?>&csc=state">
                                                    <i class="fas fa-trash-alt"></i>Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php } }?>
                        </div>
                    </div>
                    <div class="content-location-area-btn">
                        <div class="content-car-loc-btn">
                              <a href="#" class="btn dashboard-small-text click-modal-form-ct">Add Cities</a>
                        </div>
                        <div class="display-flex-row-justify-end alert hide" id="alert-save-ct">
                            <span><img src="../../assets/img/icons/check-green-bg.svg" class="markcheck-move" /></span>
                            <span class="table-heading-text parallax-slider-message"><b>Successfully Saved</b></span>
                        </div>
                        <div class="display-flex-row-justify-end alert hide" id="alert-delete-ct">
                            <span><img src="../../assets/img/icons/check-green-bg.svg" class="markcheck-move" /></span>
                            <span class="table-heading-text parallax-slider-message"><b class="force-color-red">Successfully Deleted</b></span>
                        </div>
                        <div class="transact-cat-table-div">
<?php 
    if(isset($_GET['state_id'])){
    $dtst = $_GET['state_id'];
    $dtcon = $_GET['country_id'];
    $dataLocationAll= $objadmin->getLocationPAll($pdo, "1", $dtst); 
    for ($i=0; $i <count($dataLocationAll) ; $i++){ 
?>
                            <div class="user-table-space">
                                <div class="display-flex-row parallax-slider-des-divs">
                                    <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                        <span class="table-heading-text" ><b>Name</b></span>
                                        <span class="user-dis-name-sm table-item-text"><?= $dataLocationAll[$i]['name']; ?></span>
                                    </div>
                                    <div class="display-flex-column parallax-slider-des-div content-car-margin-s">
                                        <span class="table-heading-text" ><b>Type</b></span>
                                        <span class="table-item-text">City</span>
                                    </div>
                                    <div class="drop-down-menu">
                                        <label for="action-1-<?= $i ?>" class="edit-ads-foot-action"><i class="fas fa-cog"></i> Action <i class="fas fa-chevron-down"></i></label>
                                        <input type="checkbox" id="action-1-<?= $i ?>" name="action-parallax-slider">
                                        <ul class="nav-item-sub-ul">
                                            <li class="nav-item-sub">
                                                    <a href="#" class="click-modal-update-ct" id="click-modal-update-ct-<?= $i ?>" data-slider-title="<?= $dataLocationAll[$i]['name'] ?>" data-id="<?= $dataLocationAll[$i]['id'] ?>"><i class="fas fa-edit"></i>Edit</a>
                                                </li>
                                                <li class="nav-item-sub nav-item-sub-line">
                                                    <a href="#" class="force-color-red click-modal-delete-ct" id="click-modal-delete-ct-<?= $i ?>" data-slider-title="<?= $dataLocationAll[$i]['name'] ?>" data-href="components/actions-aaa-delete.php?content-car-location_id=<?= $dataLocationAll[$i]['id'] ?>&country_id=<?= $dtcon ?>&parent_id=<?= $dataLocationAll[$i]['parent'] ?>&csc=city">
                                                    <i class="fas fa-trash-alt"></i>Delete
                                                    </a>
                                                </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
<?php } } ?>
                        </div>
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
            <h1 class="text-center">New country</h1>
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
            <h1 class="text-center">Edit country</h1>
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
        
<!--#################### State ##############################################-->
<!--    Modal Body For Delete Parallax Slider Start    -->
<div class="modal-bg" id="modal-bg-delete-st">
    <div  class="modal">
        <span class="modal-close" id="modal-close-delete-st">X</span>
        <div class="text-center-div">
            <h1 class="text-center" id="modal-title-delete-st"></h1>
            <p class="blog-loop-card-para">Confirm to delete this?</p>
        </div>
        <div class="btns-group display-flex-row">
            <a href="#" class="btn force-bg-black" id="modal-cancel-delete-st">Cancel</a>
            <a class="btn force-bg-red" id="modal-confirm-delete-st">Confirm</a>
        </div>
    </div>
</div>
<!--    Modal Body For Delete Parallax Slider End    -->

<!--    Modal Body For Form Start    -->
<div class="modal-bg" id="modal-bg-form-st">
    <div  class="modal">
        <span class="modal-close" id="modal-close-form-st">X</span>
        <div class="text-center-div">
            <h1 class="text-center">New State</h1>
            <textarea placeholder="Type country names here" id="formTextareaInput-st" class="modal-textarea"></textarea>
            <p class="blog-loop-card-para">Put one or more state name as "," (comma) separated. Like Newyork,Dallas,idaho</p>
            <p class="blog-loop-card-para" id="return-message-st"></p>
        </div>
        <div class="btns-group display-flex-row">
            <a href="#" class="btn force-bg-black" id="modal-cancel-form-st">Close</a>
            <a class="btn force-bg-green" id="modal-confirm-form-st">Save</a>
        </div>
    </div>
</div>
<!--    Modal Body For Form End    -->

<!--    Modal Body For Form Start    -->
<div class="modal-bg" id="modal-bg-update-st">
    <div  class="modal">
        <span class="modal-close" id="modal-close-update-st">X</span>
        <div class="text-center-div">
            <h1 class="text-center">Edit state</h1>
            <input type="text" placeholder="Type country names here" id="formTextInput-st" class="modal-textinput"/>
            <input type="hidden" id="formTextInputID-st" />
            <p class="blog-loop-card-para" id="return-message-up-st"></p>
        </div>
        <div class="btns-group display-flex-row">
            <a href="#" class="btn force-bg-black" id="modal-cancel-update-st">Close</a>
            <a class="btn force-bg-green" id="modal-confirm-update-st">Update</a>
        </div>
    </div>
</div>
<!--    Modal Body For Form End    -->
        
<!--#################### City ##############################################-->
<!--    Modal Body For Delete Parallax Slider Start    -->
<div class="modal-bg" id="modal-bg-delete-ct">
    <div  class="modal">
        <span class="modal-close" id="modal-close-delete-ct">X</span>
        <div class="text-center-div">
            <h1 class="text-center" id="modal-title-delete-ct"></h1>
            <p class="blog-loop-card-para">Confirm to delete this?</p>
        </div>
        <div class="btns-group display-flex-row">
            <a href="#" class="btn force-bg-black" id="modal-cancel-delete-ct">Cancel</a>
            <a class="btn force-bg-red" id="modal-confirm-delete-ct">Confirm</a>
        </div>
    </div>
</div>
<!--    Modal Body For Delete Parallax Slider End    -->

<!--    Modal Body For Form Start    -->
<div class="modal-bg" id="modal-bg-form-ct">
    <div  class="modal">
        <span class="modal-close" id="modal-close-form-ct">X</span>
        <div class="text-center-div">
            <h1 class="text-center">New City</h1>
            <textarea placeholder="Type country names here" id="formTextareaInput-ct" class="modal-textarea"></textarea>
            <p class="blog-loop-card-para">Put one or more state name as "," (comma) separated. Like Newyork,Dallas,idaho</p>
            <p class="blog-loop-card-para" id="return-message-ct"></p>
        </div>
        <div class="btns-group display-flex-row">
            <a href="#" class="btn force-bg-black" id="modal-cancel-form-ct">Close</a>
            <a class="btn force-bg-green" id="modal-confirm-form-ct">Save</a>
        </div>
    </div>
</div>
<!--    Modal Body For Form End    -->

<!--    Modal Body For Form Start    -->
<div class="modal-bg" id="modal-bg-update-ct">
    <div  class="modal">
        <span class="modal-close" id="modal-close-update-ct">X</span>
        <div class="text-center-div">
            <h1 class="text-center">Edit City</h1>
            <input type="text" placeholder="Type country names here" id="formTextInput-ct" class="modal-textinput"/>
            <input type="hidden" id="formTextInputID-ct" />
            <p class="blog-loop-card-para" id="return-message-up-ct"></p>
        </div>
        <div class="btns-group display-flex-row">
            <a href="#" class="btn force-bg-black" id="modal-cancel-update-ct">Close</a>
            <a class="btn force-bg-green" id="modal-confirm-update-ct">Update</a>
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
        
        <!-- ############################## State #################################       -->
        <script>
            var msg = new URL(window.location.href).searchParams.get("msg");
            if(msg === "sucess-st"){
                $('#alert-save-st').addClass("show");
                $('#alert-save-st').removeClass("hide");
                $('#alert-save-st').addClass("showAlert");
                setTimeout(function(){
                 $('#alert-save-st').removeClass("show");
                 $('#alert-save-st').addClass("hide");
                },5000);
            }
            if(msg === "sucess-del-st"){
                $('#alert-delete-st').addClass("show");
                $('#alert-delete-st').removeClass("hide");
                $('#alert-delete-st').addClass("showAlert");
                setTimeout(function(){
                 $('#alert-delete-st').removeClass("show");
                 $('#alert-delete-st').addClass("hide");
                },5000);
            }
        </script>
        <script>
            var modalBg = document.querySelector("#modal-bg-delete-st");
            var modalClose = document.querySelector("#modal-close-delete-st");
            var modalTitle = document.querySelector("#modal-title-delete-st");
            var modalConfirm = document.querySelector("#modal-confirm-delete-st");
            var modalCancel = document.querySelector("#modal-cancel-delete-st");

            $(document).ready(function(){
               $(document).on('click', '.click-modal-delete-st', function(){
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
            var modalBgf = document.querySelector("#modal-bg-form-st");
            var modalClosef = document.querySelector("#modal-close-form-st");
            var modalCancelf = document.querySelector("#modal-cancel-form-st");

            $(document).ready(function(){
               $(document).on('click', '.click-modal-form-st', function(){
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
               $(document).on('click', '#modal-confirm-form-st', function(){
                   document.querySelector("#return-message-st").innerHTML = '<span class="force-color-red">Loading.....</span'
                   var formTextareaInput =  $('#formTextareaInput-st').val();
                   var formTextareaInputArr = formTextareaInput.split(',');
                   var parent_dt = new URL(window.location.href).searchParams.get("country_id");
                   var type_d = 2;
                   if(formTextareaInput === ""){
                       document.querySelector("#return-message-st").innerHTML = '<span class="force-color-red">Field cannont be empty</span'
                   }else{
                          $.ajax({
                            url: "components/aaa-select-table-special.php", 
                            method:"POST",
                            data:{upload_car_location_country:"upload_car_location_country", formTextareaInputArr:formTextareaInputArr, parent_dt:parent_dt, type_d:type_d},
                            dataType: "json",
                            success: function(data){
                                if(data.status == 1){
                                    window.location.href = "content-car-location-state.php?country_id="+parent_dt+"&msg=sucess-st"
                                }else{
                                    document.querySelector("#return-message-st").innerHTML = '<span class="force-color-red">Error Occur</span'
                                }                    
                            },
                        }); 
                   }
                }); 
            });
            
        </script>
         <script>
            var modalBInput = document.querySelector("#formTextInput-st");
            var modalBInputID = document.querySelector("#formTextInputID-st");
            var modalBgu = document.querySelector("#modal-bg-update-st");
            var modalCloseu = document.querySelector("#modal-close-update-st");
            var modalCancelu = document.querySelector("#modal-cancel-update-st");

            $(document).ready(function(){
               $(document).on('click', '.click-modal-update-st', function(){
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
               $(document).on('click', '#modal-confirm-update-st', function(){
                   
                   document.querySelector("#return-message-up-st").innerHTML = '<span class="force-color-red">Loading.....</span'
                   
                   var formTextInput =  $('#formTextInput-st').val();
                   var formTextInputID =  $('#formTextInputID-st').val();
                   var parent_dt = new URL(window.location.href).searchParams.get("country_id");
                   
                   if(formTextInput === ""){
                       document.querySelector("#return-message-up-st").innerHTML = '<span class="force-color-red">Field cannont be empty</span'
                   }else{
                          $.ajax({
                            url: "components/aaa-select-table-special.php", 
                            method:"POST",
                            data:{update_car_location_country:"update_car_location_country", formTextInput:formTextInput, formTextInputID:formTextInputID},
                            dataType: "json",
                            success: function(data){
                                if(data.status == 1){
                                    window.location.href = "content-car-location-state.php?country_id="+parent_dt+"&msg=sucess-st"
                                }else{
                                    document.querySelector("#return-message-up-st").innerHTML = '<span class="force-color-red">Error Occur</span'
                                }                    
                            },
                        }); 
                   }
                }); 
            });
            
        </script>
        
        <!-- ############################## City #################################       -->
        <script>
            var msg = new URL(window.location.href).searchParams.get("msg");
            if(msg === "sucess-ct"){
                $('#alert-save-ct').addClass("show");
                $('#alert-save-ct').removeClass("hide");
                $('#alert-save-ct').addClass("showAlert");
                setTimeout(function(){
                 $('#alert-save-ct').removeClass("show");
                 $('#alert-save-ct').addClass("hide");
                },5000);
            }
            if(msg === "sucess-del-ct"){
                $('#alert-delete-ct').addClass("show");
                $('#alert-delete-ct').removeClass("hide");
                $('#alert-delete-ct').addClass("showAlert");
                setTimeout(function(){
                 $('#alert-delete-ct').removeClass("show");
                 $('#alert-delete-ct').addClass("hide");
                },5000);
            }
        </script>
        <script>
            var modalBg = document.querySelector("#modal-bg-delete-ct");
            var modalClose = document.querySelector("#modal-close-delete-ct");
            var modalTitle = document.querySelector("#modal-title-delete-ct");
            var modalConfirm = document.querySelector("#modal-confirm-delete-ct");
            var modalCancel = document.querySelector("#modal-cancel-delete-ct");

            $(document).ready(function(){
               $(document).on('click', '.click-modal-delete-ct', function(){
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
            var modalBgf = document.querySelector("#modal-bg-form-ct");
            var modalClosef = document.querySelector("#modal-close-form-ct");
            var modalCancelf = document.querySelector("#modal-cancel-form-ct");

            $(document).ready(function(){
               $(document).on('click', '.click-modal-form-ct', function(){
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
               $(document).on('click', '#modal-confirm-form-ct', function(){
                   document.querySelector("#return-message-ct").innerHTML = '<span class="force-color-red">Loading.....</span'
                   var formTextareaInput =  $('#formTextareaInput-ct').val();
                   var formTextareaInputArr = formTextareaInput.split(',');
                   var parent_dt = new URL(window.location.href).searchParams.get("state_id");
                   var country_dt = new URL(window.location.href).searchParams.get("country_id");
                   var type_d = 1;
                   if(formTextareaInput === ""){
                       document.querySelector("#return-message-ct").innerHTML = '<span class="force-color-red">Field cannont be empty</span'
                   }else{
                          $.ajax({
                            url: "components/aaa-select-table-special.php", 
                            method:"POST",
                            data:{upload_car_location_country:"upload_car_location_country", formTextareaInputArr:formTextareaInputArr, parent_dt:parent_dt, type_d:type_d},
                            dataType: "json",
                            success: function(data){
                                if(data.status == 1){
                                    window.location.href = "content-car-location-city.php?country_id="+country_dt+"&state_id="+parent_dt+"&msg=sucess-ct"
                                }else{
                                    document.querySelector("#return-message-ct").innerHTML = '<span class="force-color-red">Error Occur</span'
                                }                    
                            },
                        }); 
                   }
                }); 
            });
            
        </script>
         <script>
            var modalBInput = document.querySelector("#formTextInput-ct");
            var modalBInputID = document.querySelector("#formTextInputID-ct");
            var modalBgu = document.querySelector("#modal-bg-update-ct");
            var modalCloseu = document.querySelector("#modal-close-update-ct");
            var modalCancelu = document.querySelector("#modal-cancel-update-ct");

            $(document).ready(function(){
               $(document).on('click', '.click-modal-update-ct', function(){
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
               $(document).on('click', '#modal-confirm-update-ct', function(){
                   
                   document.querySelector("#return-message-up-ct").innerHTML = '<span class="force-color-red">Loading.....</span'
                   
                   var formTextInput =  $('#formTextInput-ct').val();
                   var formTextInputID =  $('#formTextInputID-ct').val();
                   var parent_dt = new URL(window.location.href).searchParams.get("state_id");
                   var country_dt = new URL(window.location.href).searchParams.get("country_id");
                   
                   if(formTextInput === ""){
                       document.querySelector("#return-message-up-ct").innerHTML = '<span class="force-color-red">Field cannont be empty</span'
                   }else{
                          $.ajax({
                            url: "components/aaa-select-table-special.php", 
                            method:"POST",
                            data:{update_car_location_country:"update_car_location_country", formTextInput:formTextInput, formTextInputID:formTextInputID},
                            dataType: "json",
                            success: function(data){
                                if(data.status == 1){
                                    window.location.href = "content-car-location-city.php?country_id="+country_dt+"&state_id="+parent_dt+"&msg=sucess-ct"
                                }else{
                                    document.querySelector("#return-message-up-ct").innerHTML = '<span class="force-color-red">Error Occur</span'
                                }                    
                            },
                        }); 
                   }
                }); 
            });
            
        </script>
    </body>
</html>
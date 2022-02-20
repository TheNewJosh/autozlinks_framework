<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Coupon</title>
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
                        AZCoin/ Refund
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="display-flex-row-justify-end alert hide" id="alert-save">
                    <span><img src="../../assets/img/icons/check-green-bg.svg" /></span>
                    <span class="table-heading-text parallax-slider-message"><b>Successfully Save</b></span>
                </div>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="users-refund-detail-form fieldset-relative">
                    <input type="hidden" name="dt" value="<?= $dt ?>" />
                    <span class="admin-page-heading">Create New Coupon</span>
                    <span class="modal-close-r">
                        <a href="azc-coupon-code.php" class="users-refund-modal-close">X</a>
                    </span>
<?php if($message_err != ''){?>
    <div class="alert-danger">
        <strong>Error!</strong> <?php echo $message_err; ?>
    </div>
<?php }?>
                    <div class="display-flex-column azc-input-group">
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="coupon_code" id="coupon_code" value="<?= $coupon_code ?>" placeholder="Enter Coupon Code" />
                            <span class="refund-input-legend-two force-color-blue">Coupon code</span>
                            <span class="force-color-red" id="coupon_code_err" ><?= $coupon_code_err ?></span>
                            <input type="hidden" id="coupon_code_hdd" value="<?= $coupon_code ?>" />
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="number" name="percentage_discount" value="<?= $percentage_discount ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Coupon discount %</span>
                            <span class="force-color-red"><?= $percentage_discount_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="date" name="start_datetime" value="<?= $start_datetime ?>" placeholder="Select Date" />
                            <span class="refund-input-legend-two force-color-blue">Coupon starting date</span>
                            <span class="force-color-red"><?= $start_datetime_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="date" name="end_datetime" value="<?= $end_datetime ?>" placeholder="Select Date" />
                            <span class="refund-input-legend-two force-color-blue">Coupon ending date</span>
                            <span class="force-color-red"><?= $end_datetime_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="number" name="number_used" value="<?= $number_used ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Coupon number of use</span>
                            <span class="force-color-red"><?= $number_used_err ?></span>
                        </div>
                    </div>
                    <div class="user-refund-btn">
                        <button type="submit" class="btn force-bg-blue" name="submit_coupon_code_btn" id="submit_coupon_code_btn">Update</button>
                    </div>
                </form>
            </section>
        </main>
        
        @include('admin.layouts.footer')
        @include('admin.layouts.script')
        <script>
            //Sign up Form Submission Start
            $(document).ready(function(){
                
                //Authenticate Coupon Start
                $('#coupon_code').change(function(){
                     var coupon_code =  $('#coupon_code').val();
                     var coupon_code_hdd =  $('#coupon_code_hdd').val();
                     $.ajax({
                        url: "components/aaa-select-table.php", 
                        method:"POST",
                        data:{auth_coupon_code:"auth_coupon_code", coupon_code:coupon_code},
                        dataType: "json",
                        success: function(data){
                            if(data.status == 1 && coupon_code_hdd !== coupon_code){
                               document.querySelector('#coupon_code_err').innerHTML = data.message;
                                $('#submit_coupon_code_btn').attr('disabled', 'true');
                            }else{
                                document.querySelector('#coupon_code_err').innerHTML = "";
                                $('#submit_coupon_code_btn').removeAttr('disabled');
                            }                    
                        },
                    });
                });
                //Authenticate Coupon End
                
            });
        </script>
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
        </script>
    </body>
</html>
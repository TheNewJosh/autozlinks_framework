<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Profile</title>
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
                        Profile
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="display-flex-row-justify-end alert hide">
                    <span><img src="../../assets/img/icons/check-green-bg.svg" /></span>
                    <span class="table-heading-text parallax-slider-message" ><b>Successfully Edited</b></span>
                </div>
                <div class="users-refund-detail-form">
                    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="transact-cat-dis-img-big display-flex-row-no-justify">
                        <input type="hidden" name="dt" value="<?= $dt ?>" />
                            <input type="hidden" name="h_img" value="<?= $h_img ?>" />
                        <img src="../../assets/img/users-avatar/<?= $h_img ?>" />
                        <div class="display-flex-column profile-img-div">
                            <span class="parallax-slider-upd-span">
                                <sp class="table-item-text">(Min 300 x 260)</sp>
                            </span>
                            <span class="parallax-slider-upd-span">
                                <input type="file" name="us_img" accept=".png, .jpeg, .jpg, .gif" />
                            </span>
                            <span class="force-color-red"><?= $us_img_err ?></span>
                            <span class="profile-btn">
                                <button type="submit" class="btn force-bg-blue" name="submit_profile_img_btn">upload</button>
                            </span>
                        </div>
                    </form>
                    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="fieldset-relative">
                        <div class="display-flex-row">
                            <div class="input-group-two fieldset-relative">
                                <input type="text" name="us_username" value="<?= $us_username ?>" us_username="id" placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">Username</span>
                                <br/><span class="force-color-red"><?= $us_username_err ?></span>
                            </div>
                            <div class="input-group-two fieldset-relative">
                                <input type="text" name="us_company_name" value="<?= $us_company_name ?>"  placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">Company Name</span>
                                <br/><span class="force-color-red"><?= $us_company_name_err ?></span>
                            </div>
                        </div>
                        <div class="display-flex-row">
                            <div class="input-group-two fieldset-relative">
                                <input type="email" name="us_email" value="<?= $us_email ?>"  placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">Email</span>
                                <br/><span class="force-color-red"><?= $us_email_err ?></span>
                            </div>
                            <div class="input-group-two fieldset-relative">
                                <input type="tel" name="us_phone" value="<?= $us_phone ?>"  placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">Phone</span>
                                <br/><span class="force-color-red"><?= $us_phone_err ?></span>
                            </div>
                        </div>
                        <div class="display-flex-row profile-span-div">
                            <div class="display-flex-row-no-justify">
                                <span>
                                    <input type="hidden" name="hide_email" value="0" />
                                    <input type="checkbox" name="hide_email" value="1" <?php if($hide_email == "1"){ echo "checked"; } ?> />
                                </span>
                                <span class="table-item-text">Hide email</span>
                            </div>
                            <div class="display-flex-row-no-justify">
                                <span>
                                    <input type="hidden" name="hide_phone" value="0" />
                                    <input type="checkbox" type="checkbox" name="hide_phone" value="1" <?php if($hide_phone == "1"){ echo "checked"; } ?> />
                                </span>
                                <span class="table-item-text">Hide phone</span>
                            </div>
                        </div>
                        <div class="display-flex-row">
                            <div class="input-group-two fieldset-relative">
                                <input type="text" name="us_full_name" value="<?= $us_full_name ?>"  placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">Full Name</span>
                                <br/><span class="force-color-red"><?= $us_full_name_err ?></span>
                            </div>
                            <div class="input-group-two fieldset-relative">
                                <input type="text" name="facebook_id" value="<?= $facebook_id ?>"  placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">Facebook id</span>
                                <br/><span class="force-color-red"><?= $facebook_id_err ?></span>
                            </div>
                        </div>
                        <div class="display-flex-row">
                            <div class="input-group-two fieldset-relative">
                                <input type="text" name="instagram_id" value="<?= $instagram_id ?>"  placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">Instagram id</span>
                                <br/><span class="force-color-red"><?= $instagram_id_err ?></span>
                            </div>
                            <div class="input-group-two fieldset-relative">
                                <input type="text" name="linkedin_id" value="<?= $linkedin_id ?>"  placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">Linkedin id</span>
                                <br/><span class="force-color-red"><?= $linkedin_id_err ?></span>
                            </div>
                        </div>
                        <div class="display-flex-row">
                            <div class="input-group-two fieldset-relative">
                                <select name="us_gender">
                                    <option value="1" <?php if($us_gender == "1"){ echo "selected"; } ?> >Male</option>
                                    <option value="2" <?php if($us_gender == "2"){ echo "selected"; } ?> >Female</option>
                                    <option value="0" <?php if($us_gender == "0"){ echo "selected"; } ?>>Other</option>
                                </select>
                                <span class="refund-input-legend-two force-color-blue">Gender</span>
                                <br/><span class="force-color-red"><?= $us_gender_err ?></span>
                            </div>
                        </div>
                        <div class="user-refund-btn">
                            <button type="submit" class="btn force-bg-blue" name="submit_profile_btn" >Update</button>
                        </div>
                    </form>
                </div>
            </section>
        </main>
        
        @include('admin.layouts.footer')
        @include('admin.layouts.script')
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
    </body>
</html>
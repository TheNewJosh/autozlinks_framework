<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Settings</title>
        @include('admin.layouts.meta')
        <link href="{{ asset('css/toggle-switch.css')}}" rel="stylesheet" type="text/css" />
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
                        Clear Unused Image
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="clear-unused-declared">
                   <p>This function only clears the images which are not used by cars,users,categories,pages,blogs. It searches through the database for finding images.So if you manually uploaded any images manually and used them within the code it may be deleted.</p> 
                </div>
                <form class="users-refund-detail-form fieldset-relative">
                    <span class="admin-page-heading force-color-orange">55 Unused Found</span>
                    <div class="clear-unused-div" id="scroll" data-simplebar data-simplebar-auto-hide="false">
                        <div class="display-flex-row-no-justify user-table-space-alls">
                            <span class="user-dis-img"><img src="../../assets/img/users-avatar/avatar.png" /></span>
                            <span class="user-dis-name display-flex-column user-table-span-margin">
                                <p class="table-item-text clear-unused-p-text" >./uploads/gallery/67829819_2472584143010807_4203932023892475904_n1.jpg</p>
                            </span>
                        </div>
                        <div class="display-flex-row-no-justify user-table-space-alls">
                            <span class="user-dis-img"><img src="../../assets/img/users-avatar/avatar.png" /></span>
                            <span class="user-dis-name display-flex-column user-table-span-margin">
                                <p class="table-item-text clear-unused-p-text" >./uploads/gallery/67829819_2472584143010807_4203932023892475904_n1.jpg</p>
                            </span>
                        </div>
                        <div class="display-flex-row-no-justify user-table-space-alls">
                            <span class="user-dis-img"><img src="../../assets/img/users-avatar/avatar.png" /></span>
                            <span class="user-dis-name display-flex-column user-table-span-margin">
                                <p class="table-item-text clear-unused-p-text" >./uploads/gallery/67829819_2472584143010807_4203932023892475904_n1.jpg</p>
                            </span>
                        </div>
                        <div class="display-flex-row-no-justify user-table-space-alls">
                            <span class="user-dis-img"><img src="../../assets/img/users-avatar/avatar.png" /></span>
                            <span class="user-dis-name display-flex-column user-table-span-margin">
                                <p class="table-item-text clear-unused-p-text" >./uploads/gallery/67829819_2472584143010807_4203932023892475904_n1.jpg</p>
                            </span>
                        </div>
                    </div>
                    <div class="user-refund-btn">
                        <button type="submit" class="btn force-bg-blue">Clear Unused Image</button>
                    </div>
                </form>
            </section>
        </main>
        
        @include('admin.layouts.footer')
        @include('admin.layouts.script')
    </body>
</html>
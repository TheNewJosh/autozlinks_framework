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
                        Site Map
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <form class="users-refund-detail-form fieldset-relative">
                    <span class="admin-page-heading">Generate Site Map</span>
                    <div class="display-flex-column azc-input-group">
                        <div class="display-flex-row-no-justify">
                            <span><input type="checkbox" name="hj" /></span>
                            <span class="table-item-text force-color-blue">Car Post</span>
                        </div>
                        <div class="display-flex-row-no-justify">
                            <span><input type="checkbox" name="hj" /></span>
                            <span class="table-item-text force-color-blue">Pages</span>
                        </div>
                        <div class="display-flex-row-no-justify">
                            <span><input type="checkbox" name="hj" /></span>
                            <span class="table-item-text force-color-blue">Blog Post</span>
                        </div>
                    </div>
                    <div class="display-flex-row settings-site">
                        <button type="submit" class="btn force-bg-blue">Create XML</button>
                        <button type="submit" class="btn force-bg-green">View XML</button>
                    </div>
                </form>
            </section>
        </main>
        
        @include('admin.layouts.footer')
        @include('admin.layouts.script')
    </body>
</html>
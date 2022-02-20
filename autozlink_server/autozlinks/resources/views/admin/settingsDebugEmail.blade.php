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
                        Debug Email
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <form class="users-refund-detail-form fieldset-relative">
                    <div class="display-flex-column azc-input-group">
                        <div class="input-group-lon fieldset-relative">
                            <input type="email" name="id" id="id" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Email To</span>
                        </div>
                    </div>
                    <div class="user-refund-btn">
                        <button type="submit" class="btn force-bg-blue">Send</button>
                    </div>
                </form>
            </section>
        </main>
        
        @include('admin.layouts.footer')
        @include('admin.layouts.script')
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Users</title>
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
                        AZCoin/ Refund
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <form class="users-refund-detail-form fieldset-relative">
                    <span class="admin-page-heading">Refund</span>
                    <span class="modal-close-r">
                        <a href="users.php" class="users-refund-modal-close">X</a>
                    </span>
                    <div class="input-group fieldset-relative">
                        <input type="text" name="id" id="id" placeholder="Type here" />
                        <span class="refund-input-legend force-color-blue">Receiver’s Email/Username</span>
                    </div>
                    <div class="input-group fieldset-relative">
                        <input type="number" name="id" id="id" placeholder="Type here" />
                        <span class="refund-input-legend force-color-blue">Amount (AZC)</span>
                    </div>
                    <div class="input-group fieldset-relative">
                        <input type="number" name="id" id="id" placeholder="Type here" />
                        <span class="refund-input-legend force-color-blue">Amount (NGN)</span>
                    </div>
                    <div class="user-refund-btn">
                        <button type="submit" class="btn force-bg-green">Refund</button>
                    </div>
                </form>
            </section>
        </main>
        
        @include('admin.layouts.footer')
        @include('admin.layouts.script')
    </body>
</html>
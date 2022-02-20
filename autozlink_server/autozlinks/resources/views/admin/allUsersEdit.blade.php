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
                        Edit Users
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <div class="users-refund-detail-form">
                    <form class="transact-cat-dis-img-big display-flex-row-no-justify">
                        <img src="../../assets/img/users-avatar/avatar.png" />
                        <div class="display-flex-column profile-img-div">
                            <span class="parallax-slider-upd-span">
                                <sp class="table-item-text">(Min 300 x 260)</sp>
                            </span>
                            <span class="parallax-slider-upd-span">
                                <input type="file" name="id" id="id" placeholder="Type here" />
                            </span>
                            <span class="profile-btn">
                                <button type="submit" class="btn force-bg-blue">upload</button>
                            </span>
                        </div>
                    </form>
                    <form class="fieldset-relative">
                        <div class="display-flex-row">
                            <div class="input-group-two fieldset-relative">
                                <input type="text" name="id" id="id" placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">Username</span>
                            </div>
                            <div class="input-group-two fieldset-relative">
                                <input type="text" name="id" id="id" placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">Company Name</span>
                            </div>
                        </div>
                        <div class="display-flex-row">
                            <div class="input-group-two fieldset-relative">
                                <input type="email" name="id" id="id" placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">Email</span>
                            </div>
                            <div class="input-group-two fieldset-relative">
                                <input type="tel" name="id" id="id" placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">Phone</span>
                            </div>
                        </div>
                        <div class="display-flex-row profile-span-div">
                            <div class="display-flex-row-no-justify">
                                <span><input type="radio" name="hj" /></span>
                                <span class="table-item-text">Hide email</span>
                            </div>
                            <div class="display-flex-row-no-justify">
                                <span><input type="radio" name="hjk" /></span>
                                <span class="table-item-text">Hide phone</span>
                            </div>
                        </div>
                        <div class="display-flex-row">
                            <div class="input-group-two fieldset-relative">
                                <input type="password" name="id" id="id" placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">Password</span>
                            </div>
                            <div class="input-group-two fieldset-relative">
                                <input type="password" name="id" id="id" placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">Re type Password</span>
                            </div>
                        </div>
                        <div class="display-flex-row">
                            <div class="input-group-two fieldset-relative">
                                <input type="text" name="id" id="id" placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">First Name</span>
                            </div>
                            <div class="input-group-two fieldset-relative">
                                <input type="text" name="id" id="id" placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">Facebook id</span>
                            </div>
                        </div>
                        <div class="display-flex-row">
                            <div class="input-group-two fieldset-relative">
                                <input type="text" name="id" id="id" placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">Last Name</span>
                            </div>
                            <div class="input-group-two fieldset-relative">
                                <input type="text" name="id" id="id" placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">Linkedin id</span>
                            </div>
                        </div>
                        <div class="display-flex-row">
                            <div class="input-group-two fieldset-relative">
                                <select>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                                <span class="refund-input-legend-two force-color-blue">Gender</span>
                            </div>
                            <div class="input-group-two fieldset-relative">
                                <input type="text" name="id" id="id" placeholder="Type here" />
                                <span class="refund-input-legend-two force-color-blue">Instagram id</span>
                            </div>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <textarea type="text" placeholder="Type here"></textarea>
                            <span class="refund-input-legend-two force-color-blue">About Me</span>
                        </div>
                        <div class="user-refund-btn">
                            <button type="submit" class="btn force-bg-blue">Update</button>
                        </div>
                    </form>
                </div>
            </section>
        </main>
        
        @include('admin.layouts.footer')
        @include('admin.layouts.script')
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - User</title>
        <?php require_once "includes/meta.php"; ?>
        <link href="../../assets/css/toggle-switch.css" rel="stylesheet" type="text/css" />
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
                        Users
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <form class="users-refund-detail-form fieldset-relative">
                    <span class="admin-page-heading">Create User</span>
                    <div class="display-flex-column azc-input-group">
                        <div class="input-group-lon fieldset-relative">
                            <input type="email" name="id" id="id" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">User Email</span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="id" id="id" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Username</span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="id" id="id" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">First Name</span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="id" id="id" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Last Name</span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <select>
                                <option>yes</option>
                                <option>yes</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Type</span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="id" id="id" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Company Name</span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <select>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Gender</span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="password" name="id" id="id" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Password</span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="password" name="id" id="id" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Comfirm Password</span>
                        </div>
                    </div>
                    <div class="user-refund-btn">
                        <button type="submit" class="btn force-bg-blue">Create</button>
                    </div>
                </form>
            </section>
        </main>
        
        <?php require_once "includes/footer.php"; ?>
        <?php require_once "includes/script.php"; ?>
    </body>
</html>
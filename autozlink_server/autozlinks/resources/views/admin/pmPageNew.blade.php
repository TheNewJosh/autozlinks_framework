<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Autozlinks || Admin - Page</title>
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
                        Edit Pages
                    </span>
                    <span class="admin-page-sub-heading">
                        Carbiz-Version : 1.4.0
                    </span>
                    <span class="admin-page-sub-heading">
                        Overview, Stats and More
                    </span>
                </div>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="users-refund-detail-form fieldset-relative">
                    <div class="display-flex-row-no-justify parallax-slider-upd-btn">
                        <span class="parallax-status">
                            <input type="radio" name="status" id="status1" value="0" <?php if($status == "0"){echo "checked";} ?> />
                            <label for="status1" class="btn force-bg-blue parallax-slider-upd-btn-a">Draft</label>
                        </span>
                        <span class="parallax-status">
                            <input type="radio" name="status" id="status2" value="1" <?php if($status == "1"){echo "checked";} ?> />
                            <label for="status2" class="btn force-bg-green parallax-slider-upd-btn-a">Publish</label>
                        </span>
                    </div>
<?php if($message_err != ''){?>
    <div class="alert-danger">
        <strong>Error!</strong> <?php echo $message_err; ?>
    </div>
<?php }?>
                    <div class="display-flex-column azc-input-group">
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="title" value="<?= $title ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Menu Title</span>
                            <span class="force-color-red"><?= $title_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="alias" value="<?= $alias ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Menu Alias</span>
                            <span class="force-color-red"><?= $alias_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <select name="show_menu">
                                <option value="1" <?php if($show_menu == "1"){echo "selected";} ?> >yes</option>
                                <option value="0" <?php if($show_menu == "0"){echo "selected";} ?>>no</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Show in Menu</span>
                            <span class="force-color-red"><?= $show_menu_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <select name="page_layout">
                                <option value="1" <?php if($page_layout == "1"){echo "selected";} ?> >Left bar with content</option>
                                <option value="2" <?php if($page_layout == "2"){echo "selected";} ?> >Right bar with content</option>
                                <option value="3" <?php if($page_layout == "3"){echo "selected";} ?> >Only content</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Page Layout</span>
                            <span class="force-color-red"><?= $page_layout_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <select name="content_from">
                                <option value="1" <?php if($content_from == "1"){echo "selected";} ?> >Url</option>
                                <option value="2" <?php if($content_from == "2"){echo "selected";} ?> >Manual</option>
                            </select>
                            <span class="refund-input-legend-two force-color-blue">Content From</span>
                            <span class="force-color-red"><?= $content_from_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="text" name="url" value="<?= $url ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Url</span>
                            <span class="force-color-red"><?= $url_err ?></span>
                        </div>
                        <span class="admin-page-heading"><br><br>SEO Options</span>
                        <div class="input-group-lon fieldset-relative">
                            <textarea name="meta_description" placeholder="Type here" ><?= $meta_description ?></textarea>
                            <span class="refund-input-legend-two force-color-blue">Meta Description</span>
                            <span class="force-color-red"><?= $meta_description_err ?></span>
                        </div>
                        <div class="input-group-lon fieldset-relative">
                            <input type="number" name="crawl" value="<?= $crawl ?>" placeholder="Type here" />
                            <span class="refund-input-legend-two force-color-blue">Crawl after (days)</span>
                            <span class="force-color-red"><?= $crawl_err ?></span>
                        </div>
                    </div>
                    <div class="user-refund-btn">
                        <button type="submit" class="btn force-bg-blue" name="submit_page_btn" >Create</button>
                    </div>
                </form>
            </section>
        </main>
        
        @include('admin.layouts.footer')
        @include('admin.layouts.script')
    </body>
</html>
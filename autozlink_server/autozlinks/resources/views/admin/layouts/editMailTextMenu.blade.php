<?php
    $page = basename($_SERVER['PHP_SELF']); 
    
    $uazt1 = $uazt2 = $uazt3 = $uazt4 = $uazt5 = $uazt6 = "";
    
    if($page == "settings-edit-mail-confirmation-email.php"){
        $uazt1 = "checked";
    }

    if($page == "settings-edit-mail-recovery-email.php"){
        $uazt2 = "checked";
    }

    if($page == "settings-edit-mail-payment-confirmation-email.php"){
        $uazt3 = "checked";
    }

    if($page == "settings-edit-mail-post-expiration-notification.php"){
        $uazt4 = "checked";
    }

    if($page == "settings-edit-mail-post-publish-email.php"){
        $uazt5 = "checked";
    }
?>
<div>
    <a href="settings-edit-mail-confirmation-email.php" class="display-flex-row-no-justify">
        <input type="radio" name="int-opt" class="check-option-input" <?= $uazt1 ?> />
        <b class="transact-cat-text">Confirmation Email</b>
    </a>
    <a href="settings-edit-mail-recovery-email.php" class="display-flex-row-no-justify">
        <input type="radio" name="int-opt" class="check-option-input" <?= $uazt2 ?> />
        <b class="transact-cat-text">Recovery Email</b>
    </a>
    <a href="settings-edit-mail-payment-confirmation-email.php" class="display-flex-row-no-justify">
        <input type="radio" name="int-opt" class="check-option-input" <?= $uazt3 ?> />
        <b class="transact-cat-text">Payment Confirmation Email</b>
    </a>
    <a href="settings-edit-mail-post-expiration-notification.php" class="display-flex-row-no-justify">
        <input type="radio" name="int-opt" class="check-option-input" <?= $uazt4 ?> />
        <b class="transact-cat-text">Post Expiration Notification</b>
    </a>
    <a href="settings-edit-mail-post-publish-email.php" class="display-flex-row-no-justify">
        <input type="radio" name="int-opt" class="check-option-input" <?= $uazt5 ?> />
        <b class="transact-cat-text">Post Publish Email</b>
    </a>
</div>
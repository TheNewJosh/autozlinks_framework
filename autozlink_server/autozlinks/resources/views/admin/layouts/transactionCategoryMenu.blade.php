<?php
    $page = basename($_SERVER['PHP_SELF']); 
    
    $uazt1 = $uazt2 = $uazt3 = $uazt4 = $uazt5 = $uazt6 = "";
    
    if($page == "users-mutual.php"){
        $uazt1 = "checked";
    }

    if($page == "users-escrow.php"){
        $uazt2 = "checked";
    }

    if($page == "users-packages.php"){
        $uazt3 = "checked";
    }

    if($page == "users-coin.php"){
        $uazt4 = "checked";
    }

    if($page == "users-refund.php"){
        $uazt5 = "checked";
    }

    if($page == "users-withdrawal.php"){
        $uazt6 = "checked";
    }
?>
<b class="admin-page-heading">Transaction Category</b>
<div>
    <a href="users-mutual.php?user_id=<?= $dt ?>">
        <input type="radio" name="int-opt" class="check-option-input" <?= $uazt1 ?> />
        <b class="transact-cat-text">Money moved (Mutual/friends)</b>
    </a><br>
    <a href="users-escrow.php?user_id=<?= $dt ?>">
        <input type="radio" name="int-opt" class="check-option-input" <?= $uazt2 ?> />
        <b class="transact-cat-text">Money moved (Escrow/business)</b>
    </a><br>
    <a href="users-packages.php?user_id=<?= $dt ?>">
        <input type="radio" name="int-opt" class="check-option-input" <?= $uazt3 ?> />
        <b class="transact-cat-text">Package purchased</b>
    </a><br>
    <a href="users-coin.php?user_id=<?= $dt ?>">
        <input type="radio" name="int-opt" class="check-option-input" <?= $uazt4 ?> />
        <b class="transact-cat-text">Coin bought</b>
    </a><br>
    <a href="users-refund.php?user_id=<?= $dt ?>">
        <input type="radio" name="int-opt" class="check-option-input" <?= $uazt5 ?> />
        <b class="transact-cat-text">Refunds</b>
    </a><br>
    <a href="users-withdrawal.php?user_id=<?= $dt ?>">
        <input type="radio" name="int-opt" class="check-option-input" <?= $uazt6 ?> />
        <b class="transact-cat-text">Withdrawals</b>
    </a>
</div>
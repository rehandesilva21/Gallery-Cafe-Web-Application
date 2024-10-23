<?php
include("config/constant.php");
print_r($_SESSION['menu-cart-list']);
if (isset($_SESSION['menu-cart-list'])) {
    foreach ($_SESSION['menu-cart-list'] as $row) {
?>
        <div class="imanegr">
            <div class="cart-items">
                <img src="images/profile.png" alt="" width="150" height="150">
                <h1><?php echo $row[1] ?></h1>
                <div class="text-des">
                    <p>Item Price:<label> <?php echo $row[2] ?></label></p>
                    <p>Item Quantity: <label> <?php echo $row[3] ?></label></p>
                    <div class="del-btn">
                        <a href="#" class="view-item-btn">Check Out</a>
                        <a href="#" class="del">Remove from Cart</a>
                    </div>
                </div>
            </div>
        </div>
<?php
    };
}
?>
<?php 

include("../config/constant.php");
if (isset($_GET['delCart'])) {
    $id = $_GET['delCart'];
    if (isset($_SESSION['menu-cart-list'])) {
        foreach ($_SESSION['menu-cart-list'] as $index => $row) {
            if ($row[0] == $id) {
                unset($_SESSION['menu-cart-list'][$index]);
                $_SESSION['menu-cart-list'] = array_values($_SESSION['menu-cart-list']);
                break;
            }
        }
    }
    if(count($_SESSION['menu-cart-list'])<= 0) {
        unset($_SESSION['menu-cart-list']);
    }
    $_SESSION['opencart'] = "0";
    header('location:' . SITEURL . 'menu.php');
}

?>
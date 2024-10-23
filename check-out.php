<?php
include("../config/constant.php");
// if (isset($_SESSION['menu-cart-list'])) {
//     $cusname = $_SESSION['userName'];
//     $date = date("Y-m-d");
//     $time = date("h:i:sa");
//     $prp = "prepairng";
//     foreach ($_SESSION['menu-cart-list'] as $row) {
//         $itemName = $row[1];
//         $itemPrice = $row[4];
//         $itemqty = $row[3];
        
//         $sql = "INSERT INTO `order_table`(`cusname`, `itemName`, `qty`, `totprice`, `date`, `time`, `status`) 
//             VALUES ('$cusname','$itemName','$itemqty','$itemPrice','$date','$time','$prp') ";
//         $res = mysqli_query($conn,$sql);
//     }
    // print_r($_SESSION['menu-cart-list']);
    // unset($_SESSION['menu-cart-list']);
    // header("location:".SITEURL."menu.php");
// }
echo "hi";
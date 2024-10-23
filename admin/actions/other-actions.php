<?php 
    include("../../config/constant.php");
    if(isset($_GET['comor'])){
        $id = $_GET['comor'];
        $done = 'done';
        $sql = "UPDATE order_table SET status = '$done' WHERE id = '$id' ";
        $result = mysqli_query($conn,$sql);
        $_SESSION["order-view"] = "0";
        header("location:".SITEURL."admin");
    }
    if(isset($_GET['delres'])){
        $id = $_GET['delres'];
        $done = 'done';
        $sql = "DELETE FROM `reservation_table` WHERE id = '$id' ";
        $result = mysqli_query($conn,$sql);
        $_SESSION["res-view"] = "0";
        header("location:".SITEURL."admin");
    }

?>
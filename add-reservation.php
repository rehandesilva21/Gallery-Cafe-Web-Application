<?php 
include("config/constant.php");
    if(isset($_POST['add-reservation'])){
        $resDate = $_POST['reservation-date'];
        $resTime = $_POST['reservation-time'];
        $resName = $_POST['name'];
        $resEmail = $_POST['email'];
        $resPhone = $_POST['phone'];
        $noGuest = $_POST['number-of-guests'];

        $sql = "INSERT INTO `reservation_table`(`name`, `email`, `phone`, `resdate`, `restime`, `noGuest`) 
        VALUES ('$resName','$$resEmail','$resPhone','$resDate','$resTime','$noGuest') ";
        $result = mysqli_query($conn,$sql);
        header("location:".SITEURL);
    }
?>
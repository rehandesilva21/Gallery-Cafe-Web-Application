<?php 
    include("../../../config/constant.php");
    if(isset($_GET['catdel'])){
        $id = $_GET['catdel'];
        $sqldel = "DELETE FROM category WHERE id = '$id'";
        $resdel = mysqli_query($conn,$sqldel);
        $_SESSION["cat"] = "0";
        header("location:".SITEURL."admin");
    }
    if(isset($_GET['menudel'])){
        $id = $_GET['menudel'];
        $sqldel = "DELETE FROM menu WHERE id = '$id'";
        $resdel = mysqli_query($conn,$sqldel);
        $_SESSION["menu"] = "0";
        header("location:".SITEURL."admin");
    }
    if(isset($_GET['evedel'])){
        $id = $_GET['evedel'];
        $sqldel = "DELETE FROM event WHERE name = '$id'";
        $resdel = mysqli_query($conn,$sqldel);
        $_SESSION["eve"] = "0";
        header("location:".SITEURL."admin");
    }
    if(isset($_GET['promdel'])){
        $id = $_GET['promdel'];
        $sqldel = "DELETE FROM promotion WHERE name = '$id'";
        $resdel = mysqli_query($conn,$sqldel);
        $_SESSION["prom"] = "0";
        header("location:".SITEURL."admin");
    }
    if(isset($_GET['userdel'])){
        $id = $_GET['userdel'];
        $sqldel = "DELETE FROM user WHERE username = '$id'";
        $resdel = mysqli_query($conn,$sqldel);
        $_SESSION["user"] = "0";
        header("location:".SITEURL."admin");
    }
    
?>
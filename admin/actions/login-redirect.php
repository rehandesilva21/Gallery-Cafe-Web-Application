<?php 
    if(!isset($_SESSION['loginA-success'])){
        header('location:'.SITEURL.'admin/login.php');
    }

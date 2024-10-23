<?php 
    include("../config/constant.php");
    if(isset($_POST["cart-submit"])) {
        $id = $_POST['id'];
        $qty = $_POST['qty'];

        $sqlMenu = "SELECT * FROM menu WHERE id= '$id'";
        $reaMenu = mysqli_query($conn, $sqlMenu) or die(mysqli_error($con));

        while($row = mysqli_fetch_assoc($reaMenu)) {
            $name = $row["name"];
            $price = $row["price"];
            $imgName = $row["image"];
        }

        $tot = $price * $qty;

        if(isset($_SESSION['menu-cart-list'])){
            $count = count($_SESSION['menu-cart-list']);
        }
        else{
            $count=0;
        }
        
        $_SESSION['menu-cart-list'][$count] = [
            $id,  
            $name,     
            $price,    
            $qty,     
            $tot,
            $imgName       
        ];
        print_r($_SESSION['menu-cart-list']);
        header('location:'.SITEURL.'menu.php');
    }
?>
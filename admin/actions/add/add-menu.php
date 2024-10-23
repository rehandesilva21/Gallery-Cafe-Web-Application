<?php
    include("../../../config/constant.php");

    if(isset($_POST["add-menu"])){
        $menuName = $_POST["menu-title"];
        $menuCat = $_POST["menu-cat"];
        $menuDes = $_POST["menu-des"];
        $menuPrice  = $_POST["menu-price"];

        if(isset($_FILES['image']['name']))
        {
            //upload the image
            // to uplaod to we need image  , source path and destination path
            $image_name = $_FILES['image']['name'];

            $source_path = $_FILES['image']['tmp_name'];
            
            $destination_path = "../../../images/menu/".$image_name;
            // Move folder
            $upload = move_uploaded_file($source_path , $destination_path);

            // check wether image upload or not
            if($upload==false)
            {
                //redirect category
                header('location'.SITEURL.'admin');
                die();
            }
        }
        else{
            
            
            $image_name = "";
        }
        $sqlAddMenu = "INSERT INTO `menu`( `name`, `Category`, `description`, `price`, `image`) VALUES ('$menuName','$menuCat','$menuDes','$menuPrice','$image_name')";
        $resultAddMenu = mysqli_query($conn,$sqlAddMenu) or die(mysqli_error($conn));

        if($resultAddMenu){
            $_SESSION["menu"] = "0";
            header("location:".SITEURL."admin");
        }
        else{
            echo "Error";
        }
    }

?>
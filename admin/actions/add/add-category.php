<?php
    include("../../../config/constant.php");

    if(isset($_POST["add-cat"])){
        $catName = $_POST["cat-name"];

        if(isset($_FILES['image']['name']))
        {
            //upload the image
            // to uplaod to we need image  , source path and destination path
            $image_name = $_FILES['image']['name'];

            $source_path = $_FILES['image']['tmp_name'];
            echo $source_path;
            $destination_path = "images/".$image_name;
            // Move folder
            $upload = move_uploaded_file($source_path , $destination_path);

            // check wether image upload or not
            if($upload==false)
            {
                //redirect category
                header('location:'.SITEURL.'admin/');
                die();
            }
        }
        else{
            // cant upload image
            
            $image_name = "";
        }
        $sqlAddCat = "INSERT INTO `category`(`name`, `image`) VALUES ('$catName','$image_name') ";
        $resultAddCat = mysqli_query($conn,$sqlAddCat) or die(mysqli_error($conn));

        if($resultAddCat){
            $_SESSION["cat"] = "0";
            header("location:".SITEURL."admin/");
        }
        else{
            echo "error";
        }
    }

?>
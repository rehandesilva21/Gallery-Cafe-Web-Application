<?php
    include("../../../config/constant.php");

    if(isset($_POST["add-promo"])){
        $name = $_POST["name"];
        $des = $_POST["des"];
        $startDate = $_POST["start"];
        $endDate = $_POST["end"];

        if(isset($_FILES['image']['name']))
        {
            //upload the image
            // to uplaod to we need image  , source path and destination path
            $image_name = $_FILES['image']['name'];

            $source_path = $_FILES['image']['tmp_name'];
            
            $destination_path = "../../../images/promotion/".$image_name;
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
            // cant upload image
            
            $image_name = "";
        }
        $sqlAddprom = "INSERT INTO `promotion`(`name`, `description`, `startDate`, `endDate`, `image`) VALUES ('$name','$des','$startDate','$endDate','$image_name')";
        $resultAddprom = mysqli_query($conn,$sqlAddprom) or die(mysqli_error($conn));

        if($resultAddprom){
            $_SESSION["prom"] = "0";
            header("location:".SITEURL."admin");
        }
        else{
            echo "error";
        }
    }

?>
<?php
    include("../../../config/constant.php");

    if(isset($_POST["add-event"])){
        $name = $_POST["name"];
        $des = $_POST["des"];
        $startDate = $_POST["date"];
        $startTime = $_POST["time"];
        if(isset($_FILES['image']['name']))
        {
            //upload the image
            // to uplaod to we need image  , source path and destination path
            $image_name = $_FILES['image']['name'];

            $source_path = $_FILES['image']['tmp_name'];
            
            $destination_path = "../../../images/event/".$image_name;
            // Move folder
            $upload = move_uploaded_file($source_path , $destination_path);

            // check wether image upload or not
            if($upload==false)
            {
                //redirect category
                header("location:".SITEURL."admin");
               
                die();
            }
        }
        else{
            // cant upload image
            
            $image_name = "";
        }
        $sqlAddprom = "INSERT INTO `event`(`name`, `description`, `startDate`, `startTime`, `image`) VALUES ('$name','$des','$startDate','$startTime','$image_name')";
        $resultAddprom = mysqli_query($conn,$sqlAddprom) or die(mysqli_error($conn));

        if($resultAddprom){
            $_SESSION["eve"] = "0";
            header("location:".SITEURL."admin");
        }
        else{
            echo "error";
        }
    }

?>
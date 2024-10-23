<?php 
    include("../../../config/constant.php");
    if(isset($_POST['add-user'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $userName = $_POST['username'];
        $password = $_POST['password'];
        $usertype = $_POST['usertype'];

        $sql= "INSERT INTO `user`(`username`, `name`, `email`, `password`, `usertype`) 
        VALUES ('$userName','$name','$email','$password','$usertype')";
        $result = mysqli_query($conn,$sql);
        if($result){
            $_SESSION["user"] = "0";
            header("location:".SITEURL."admin");
        }
        else{
            header("location:".SITEURL."admin");
        }
    }

?>
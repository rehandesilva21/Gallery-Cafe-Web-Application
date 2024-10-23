<?php 
    include("../../config/constant.php");
    if(isset($_POST['submit-login'])){
        $userName = $_POST['username'];
        $password = $_POST['password'];
        // `user`(`username`, `name`, `email`, `password`, `usertype`
        $sqlLogin = "SELECT * FROM User WHERE username = '$userName' or email = '$userName' and password= '$password'";
        $resultLogin = mysqli_query($conn, $sqlLogin) or die(mysqli_error($conn));  
        if(mysqli_num_rows($resultLogin) == 1){
            $row = mysqli_fetch_array($resultLogin);
            $_SESSION['loginA-success']='0';
            $_SESSION['admin-username'] = $row['name'];
            $_SESSION['admin-usertype'] = $row['usertype'];
            $_SESSION['first-time']= '0';
            header('location:'.SITEURL.'admin/');
        }
        else{
            header('location:'.SITEURL.'admin/error.html');
            
        }
    }

?>
<?php 
    // include data base
    include("config/constant.php");
    
    if(isset($_POST['submit-signup'])){
        // sign up form
        // Assign varible
        $name = $_POST['name'];
        $email = $_POST['email'];
        $userName = $_POST['user'];
        $phone = $_POST['phonenum'];
        $password = $_POST['psw'];
        echo "<script>alert('hutts')</script>";

        // customer`(`cusId`, `name`, `email`, `userName`, `phone`, `password`
        $sqlsign = "INSERT INTO customer SET
                    name = '$name',
                    email = '$email',
                    userName = '$userName',
                    phone  = '$phone',
                    password= '$password'
                    ";
        $result = mysqli_query($conn, $sqlsign) or die(mysqli_error($conn));
        echo"wadada";
        if($result==true){
            $_SESSION['userName']=$name;
            $_SESSION['cus-login']=1;
            
            header('location:'.SITEURL);
            ob_end();
        }
        else{
            $_SESSION['sign-f']=1;
            ob_end();
        }
    }
?>
<!--Signup form code-->
<div class ="signup">
          <div id="id02" class="modal1">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <form class="modal-content1 " action="loging.php" method="post" enctype="multipart/form-data">
            <div class="container2">
              <h2><a  onclick="document.getElementById('id01').style.display='none'"><i class="fa-solid fa-xmark"></i></a></h2>
              <h1>Sign in</h1>
              <br>
              <hr>
             
              <!--label for="email"><b>Email</b></label-->
              <input type="text" placeholder="Enter Name" name="name" required id = "text1">
              <br>
              <input type="text" placeholder="Enter Email" name="email" required id = "text1">
              <br>
              <input type="text" placeholder="Pick a Username" name="user" required id = "text1">
              <br>
              <input type="text" placeholder="Phone number" name="phonenum" required id = "text1">
              <br>
              <!--label for="psw"><b>Password</b></label-->
              <span class="eye1"><a onclick="showPassword()"><i class="fa-solid fa-eye-slash"></i></a></span>
              <input type="password" placeholder="Enter Password" name="psw" required id ="password1">
              <br><br>
      
             
        
              <p >Already have an Account?<a onclick="showSignUp()">Log In</a></p>
        
              <div class="clearfix1">
                <!--button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button-->
                <input type="submit" value="Sign Up" name="submit-signup" class="signupbtn">
              </div><br><br>
              <p class ="claim">Copyright © 2024 Gallery Cafe.All Rights Reserved!</p>
            </div>
          </form>
        </div>

<?php 
    // if(isset($_POST['sumbit-login'])){
    //     // sign up form
    //     // Assign varible
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $userName = $_POST['user'];
    //     $phone = $_POST['phonenum'];
    //     $password = $_POST['psw'];
    //     // customer`(`cusId`, `name`, `email`, `userName`, `phone`, `password`
    //     $sqlsign = "INSERT INTO * customer SET
    //                 name = '$name',
    //                 email = '$email',
    //                 userName = '$username',
    //                 phone  = '$phone',
    //                 passwprd= '$password'
    //                 ";
    //     $result = mysqli_query($conn, $sqlsign) or die(mysqli_error($conn));

    //     if($result==true){
    //         $_SESSION['userName']=$name;
    //         $_SESSION['cus-login']=1;
            
    //         header('location:'.SITEURL);
    //         ob_end();
    //     }
    //     else{
    //         $_SESSION['sign-f']=1;
    //     }
    // }
?>
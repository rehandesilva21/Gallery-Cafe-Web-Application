<div class = "login">
    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content animate" action="" method="post" enctype="multipart/form-data">
          <div class="container1">
            <h2><a  onclick="document.getElementById('id01').style.display='none'"><i class="fa-solid fa-xmark"></i></a></h2>
            <h1>Log In</h1>
            <br>
            <?php
              if(isset($_SESSION['cus-log-f1'])){
                echo'<p class="error">user name and password wrong</p>';
                unset($_SESSION['cus-log-f1']);
              }
              
            ?>
            <!-- <p class="error">user name and password wrong</a> -->
            <hr>
           
            <!--label for="email"><b>Email</b></label-->
            <input type="text" placeholder="Enter Username" name="username" required id = "text">
            <br>
            <!--label for="psw"><b>Password</b></label-->
            <span class="eye"><a onclick="showPassword()"><i class="fa-solid fa-eye-slash"></i></a></span>
            <input type="password" placeholder="Enter Password" name="psw" required id ="password">
            <br>
    
            
            <br><br>
            
            <p >Don't have an account?<a onclick ="showSignUp()">Please Sign up</a></p>
      
            <div class="clearfix">
              <!--button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button-->
              <input type="submit" value="Login" name="sumbit-login" class="signupbtn">
            </div>
            <br><br>
            <p class ="claim">Copyright © 2024 Gallery Cafe.All Rights Reserved!</p>
          </div>
        </form>
      <?php include('widgets/sign-up.php') ?>
      </div>
      
      
      

</div>

<?php 
    // include data base
    
    if(isset($_POST['sumbit-login'])){
        // Assign varibles
        $userName = $_POST['username'];
        $password = $_POST['psw'];

        $sqlLog = "SELECT * FROM customer WHERE username = '$userName' and password = '$password'";
        $resultLog = mysqli_query($conn, $sqlLog) or die(mysqli_error($conn));

        if(mysqli_num_rows($resultLog) ==1)
        {   
            $row = mysqli_fetch_assoc($resultLog);
            $_SESSION['userName']=$row['name'];
            $_SESSION['userId']=$row['cusId'];
            $_SESSION['cus-login']=1;
            
            header('location:'.SITEURL);
            ob_end();
        }
        else{
          $_SESSION['cus-log-f']= 0;
          $_SESSION['cus-log-f1']= "error";
          header('location:'.SITEURL);
          ob_end();
        }
    }

?>
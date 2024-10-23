<?php 
    // Session start
    session_start();

    //constatnt configure

    define('SITEURL','http://localhost/gallerycafe-rehan/');
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','gcafe_db');
   
    
    


    $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME) ;
    $db_select = mysqli_select_db($conn , DB_NAME) or die(mysqli_error($conn));

?>
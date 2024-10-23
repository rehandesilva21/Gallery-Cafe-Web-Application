<?php 
    include("../config/constant.php");
    if(isset($_GET['fav'])){
        $id = $_GET['fav'];
        $cus_id = $_GET['cusid'];
         
        $sqlsearch = "SELECT * FROM favourite WHERE cus_id = '$cus_id' and menu_id ='$id' ";
        $resultsearch = mysqli_query($conn,$sqlsearch) or die(mysqli_error($conn));

        if(mysqli_num_rows($resultsearch) == 0){
            $sqladdfav = "INSERT INTO `favourite`(`cus_id`, `menu_id`) VALUES ('$cus_id','$id')";
            $resultaddfav = mysqli_query($conn,$sqladdfav) or die(mysqli_error($conn));
            
            header("location:".SITEURL."menu.php?iid=".$id);

        }else{
            $sqldelfav = "DELETE FROM `favourite` WHERE cus_id = '$cus_id' and menu_id ='$id'";
            $resdelfav = mysqli_query($conn,$sqldelfav) or die(mysqli_error($conn));
            header("location:".SITEURL."menu.php?iid=".$id);
        }
        // $sql = 'INSERT INTO `favourite`(`cus_id`, `menu_id`) VALUES ('[value-1]','[value-2]')';
    }

?>
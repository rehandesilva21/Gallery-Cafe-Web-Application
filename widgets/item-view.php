<?php 
        if(isset($_GET['iid'])){
                // `menu` (`id`, `name`, `descriptiom`, `price`, `image`
                $itemIDcard = $_GET['iid'];
                $sqlItemView = "SELECT * FROM menu WHERE id = '$itemIDcard' ";
                $result = mysqli_query($conn, $sqlItemView);
                while($row = mysqli_fetch_array($result)){
                        $itemNameCard = $row["name"];
                        $itmePriceCard= $row["price"];
                        $itemDesCard= $row["description"];
                        $itemImageCard = $row["image"];
                }
        }
?>
<div id="filter1" class="filter1">

        <img src="<?php echo SITEURL ?>images/menu/<?php echo $itemImageCard ?>" alt="" width="350px" height="350px">
        <h1 id="Item-Id"><?php echo $itemNameCard ?></h1>
        <h2><label class ="price" id ="price"><?php echo $itmePriceCard ?></label></h2>
        <p><?php echo $itemDesCard ?></p>
        <form action="widgets/add-cart.php" method="post">
                <input type="text" name="id" value="<?php echo $itemIDcard ?>" style="display:none;">
                <input type ="number" placeholder="Enter Quantity" id ="userInput" value="1" min="1" max="999999" name="qty" class ="qtynum">
                
                <button type ="submit" class ="addcart" name="cart-submit" id = "addcart">Add to Cart</button>
        </form>
        
        <?php 
                $cus_id = $_SESSION['userId'];
                $sqlsearch1 = "SELECT * FROM favourite WHERE cus_id = '$cus_id' and menu_id ='$itemIDcard' ";
                $resultsearch1 = mysqli_query($conn,$sqlsearch1) or die(mysqli_error($conn));
        
                if(mysqli_num_rows($resultsearch1) == 0){
                        ?>
                                <a href="<?php echo SITEURL ?>widgets/add-favourite.php?fav=<?php echo $itemIDcard ?>&cusid=<?php echo$cus_id ?>" id ="fav"><i class="fa-regular fa-heart" ></i></a>
                        <?php
                }else{
                        ?>
                                <a href="<?php echo SITEURL ?>widgets/add-favourite.php?fav=<?php echo $itemIDcard ?>&cusid=<?php echo$cus_id ?>" id ="fav"><i class="fa-solid fa-heart" ></i></a>
                        <?php
                }
        ?>
        
        
        
        </div>

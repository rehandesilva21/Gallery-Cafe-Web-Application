<div class="foodmenuc">
        <h2>Top Items Today</h2>
        <div class ="menu1">
        <div class="foodmenu">
            <?php
                if(isset($_GET['catName'])) {
                    $catName = $_GET['catName'];
                    $sqlMenu = "SELECT * FROM menu WHERE Category = '$catName' ";
                }
                else{
                    $sqlMenu = "SELECT * FROM menu ";
                }
                //  Sql query
                // run query 
                $resMenu = mysqli_query($conn, $sqlMenu) or die(mysqli_error($conn));
                // include row
                // `menu` (`id`, `name`, `descriptiom`, `price`, `image`
                while ($row = mysqli_fetch_assoc($resMenu)) {
                    $itemId = $row["id"];
                    $itemName= $row["name"];
                    $itemPrice = $row["price"];
                    $itemImage = $row["image"];

                    ?>
                        <div>
                            <a href="<?php echo SITEURL; ?>menu.php?iid=<?php echo $itemId?>" >
                            <img src ="<?php echo SITEURL ?>images\menu\<?php echo $itemImage ?>" alt="<?php $itemImage?>" width="150px" height="150px">
                            <p><?php echo $itemName ?></p>
                            <h3>LKR <?php echo $itemPrice?></h3>
                            </a>
                            <br>
                        </div>
                    <?php
                }
            ?>
            
        </div>
    </div>
    </div>
  

    <script>
        
    </script>
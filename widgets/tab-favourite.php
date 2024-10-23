<div id="favorite" class="favorite">

    <h1>Favorites</h1>
    <div class="menu2">
        <div class="foodexp">
            <?php
            // SELECT `cus_id`, `menu_id` FROM `favourite` WHERE 1
                $cus_id = $_SESSION['userId'];
                $sqlfavoriete = "SELECT * FROM  favourite WHERE cus_id = '$cus_id'";
                $resultfavete = mysqli_query($conn,$sqlfavoriete) or die(mysqli_error($conn));

                while($rowfavete = mysqli_fetch_array($resultfavete)){
                    $fav_id = $rowfavete["menu_id"];
                    $sqlMenu = "SELECT * FROM menu WHERE id='$fav_id'";
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
                            <a href="<?php echo SITEURL; ?>menu.php?iid=<?php echo $itemId?>">
                            <div class="items"><img src="<?php echo SITEURL ?>images/menu/<?php echo $itemImage ?>" alt="<?php $itemImage?>" width="200px" height="200x">
                                    <p><?php echo $itemName ?></p>
                                    <h3>LKR <?php echo $itemPrice?></h3><br>
                            </div>
                            </a>
                            
                        <?php
                    }
                }
            ?>

            <!-- <div class="items"><img src="images/burger1.png" alt="item" width="200px" height="200x">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                </div> -->

            <!-- <ul>
                    <li class="items" onclick="openorder()" style="cursor: pointer;"><img src="images/burger1.png"
                            alt="item" width="200px" height="200px">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                    
                    <li class="items"><img src="images/burger1.png" alt="item" width="200px" height="200px">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                    <li class="items"><img src="images/burger1.png" alt="item" width="200px" height="200px">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                    <li class="items"><img src="images/burger1.png" alt="item" width="200px" height="200px">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                </ul>
            </div>
            <div class="foodexp">
                <ul>
                    <li class="items"><img src="images/burger1.png" alt="item" width="200px" height="200px">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                    <li class="items"><img src="images/burger1.png" alt="item" width="200px" height="200x">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                    <li class="items"><img src="images/burger1.png" alt="item" width="200px" height="200px">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                    <li class="items"><img src="images/burger1.png" alt="item" width="200px" height="200px">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                    <li class="items"><img src="images/burger1.png" alt="item" width="200px" height="200px">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                </ul>
            </div>
            <div class="foodexp">
                <ul>
                    <li class="items"><img src="images/burger1.png" alt="item" width="200px" height="200px">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                    <li class="items"><img src="images/burger1.png" alt="item" width="200px" height="200x">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                    <li class="items"><img src="images/burger1.png" alt="item" width="200px" height="200px">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                    <li class="items"><img src="images/burger1.png" alt="item" width="200px" height="200px">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                    <li class="items"><img src="images/burger1.png" alt="item" width="200px" height="200px">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                </ul>
            </div>
            <div class="foodexp">
                <ul>
                    <li class="items"><img src="images/burger1.png" alt="item" width="200px" height="200px">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                    <li class="items"><img src="images/burger1.png" alt="item" width="200px" height="200x">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                    <li class="items"><img src="images/burger1.png" alt="item" width="200px" height="200px">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                    <li class="items"><img src="images/burger1.png" alt="item" width="200px" height="200px">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                    <li class="items"><img src="images/burger1.png" alt="item" width="200px" height="200px">
                        <p>Item 1</p>
                        <h3>$2.99</h3><br>
                    </li>
                </ul> -->
        </div>
    </div>
</div>
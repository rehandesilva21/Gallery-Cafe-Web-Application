<div id="explore" class="explore">

    <h1>Explore</h1>
    <div class="menu2">
        <div class="foodexp">
            <?php
            $sqlMenu = "SELECT * FROM menu ";
            $resMenu = mysqli_query($conn, $sqlMenu);
            if (mysqli_num_rows($resMenu) > 0) {
                while ($row = mysqli_fetch_assoc($resMenu)) {
                    $itemId = $row["id"];
                    $itemName = $row["name"];
                    $itemPrice = $row["price"];
                    $itemImage = $row["image"];

            ?>
                    <a href="<?php echo SITEURL; ?>menu.php?iid=<?php echo $itemId ?>">
                        <div class="items"><img src="<?php echo SITEURL ?>images/menu/<?php echo $itemImage ?>" alt="<?php $itemImage ?>" width="200px" height="200x">
                            <p><?php echo $itemName ?></p>
                            <h3>LKR <?php echo $itemPrice ?></h3><br>
                        </div>
                    </a>

            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
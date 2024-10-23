<section>
    <div class="category">
        <div class="cat1">
            <h2>Categories</h2>
            <ul>
                <?php
                    $sqlCat = "SELECT * FROM category";
                    $resultCat = mysqli_query($conn, $sqlCat) or die(mysqli_error($conn));

                    while ($rowCat = mysqli_fetch_assoc($resultCat)) {
                        $catId = $rowCat["id"];
                        $catName = $rowCat["name"];
                        ?>
                            <li><a href ="<?php echo SITEURL ?>menu.php?catName=<?php echo $catName ?>"><?php echo $catName ?></a></li>
                        <?php
                    }
                ?>
                
            </ul>
            
        </div>
    </div>
</section>
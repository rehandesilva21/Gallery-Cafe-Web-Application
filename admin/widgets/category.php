<section>
    <div class="categories" id="categories">
        <h1>Categories</h1>
        <div class="catbox">
            <h1>Current Categories</h1>

            <?php
            $sqlcat = "SELECT * FROM category ";
            $resultcat = mysqli_query($conn, $sqlcat) or die(mysqli_error($conn));

            while ($rowcat = mysqli_fetch_assoc($resultcat)) {
                $catid = $rowcat["id"];
                $catname = $rowcat["name"];
            ?>
                <div class="cats">
                    <h1><?php echo $catname ?>
                        <?php
                        if ($_SESSION['admin-usertype'] == 'admin') {
                        ?>
                            <a href="<?php echo SITEURL ?>admin/actions/delete/del.php?catdel=<?php echo $catid ?>"><i class="fa-solid fa-trash"></i></a>
                        <?php
                        }
                        ?>
                    </h1>

                </div>
            <?php
            }
            ?>

        </div>
        <?php
        if ($_SESSION['admin-usertype'] == 'admin') {
        ?>
            <div class="catbox1">
                <h1>Add a New Category</h1>
                <div class="addcatform">
                    <form action="actions/add/add-category.php" method="post" enctype="multipart/form-data">
                        <input type="text" placeholder="Enter Category Name" name="cat-name">

                        <input type="file" id="image" name="image" required>
                        <input type="submit" name="add-cat" value="Submit">

                    </form>
                </div>
            </div>
        <?php
        }
        ?>


    </div>

</section>
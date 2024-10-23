<section>
    <div class="categories1" id="categories1">
        <h1>Add New Menu or Item</h1>
        <?php
        if ($_SESSION['admin-usertype'] == 'admin') {
        ?>
            <input type="button" value="Add Item or Menu" class="programmed-btn" onclick="addnewmenu()">
        <?php
        }
        ?>
        <form action="" method="get">
            <input type="search" name="searchmenu" id="search" placeholder="Search item or menu">
        </form>
        <div class="menu-scroller">
            <table class="Menutable1">

                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>

                </tr>
                <?php
                if (isset($_GET['searchmenu'])) {
                    $searctxt = $_GET['searchmenu'];
                    $searctxt = '%' . $searctxt . '%';
                    $sqlmenu = "SELECT * FROM menu WHERE name like '$searctxt'";
                } else {
                    $sqlmenu = "SELECT * FROM menu";
                }
                $resultmenu = mysqli_query($conn, $sqlmenu) or die(mysqli_error($conn));
                if (mysqli_num_rows($resultmenu) > 0) {


                    while ($rowcat = mysqli_fetch_assoc($resultmenu)) {
                        $menuId = $rowcat['id'];
                        $menuname = $rowcat["name"];
                        $menudesc = $rowcat["description"];
                        $menucat = $rowcat["Category"];
                        $menuprice = $rowcat["price"];

                ?>
                        <tr>
                            <td><?php echo $menuname ?></td>
                            <td><?php echo $menucat ?></td>
                            <td><?php echo $menudesc ?></td>
                            <td><?php echo $menuprice ?></td>
                            <td class="actions"><a href="#"><i class="fa-regular fa-pen-to-square"></i></a><a href="<?php echo SITEURL ?>admin/actions/delete/del.php?menudel=<?php echo $menuId ?>"><i class="fa-solid fa-xmark"></i></a></td>
                        </tr>
                <?php
                    }
                }

                ?>
                <!-- <tr>
                        <td>Namelorem ipsum</td>
                        <td>Name lorem ipsum</td>
                        <td>Name lorem ipsum</td>
                        <td>Name lorem ipsum</td>
                        
                    </tr> -->
            </table>
        </div>
        <div class="blackback" id="addmenu1">
            <div class="addmenuback" id="addmenu">
                <div class="addmenu-or-item">
                    <p style="cursor: pointer;" onclick="closenewmenu()"><i class="fa-solid fa-xmark"></i></p>
                    <form action="actions/add/add-menu.php" method="post" enctype="multipart/form-data">

                        <input type="text" placeholder="Enter Menu name" name="menu-title">
                        <input type="text" placeholder="Enter Description" name="menu-des"><br>
                        <input type="number" placeholder="Enter Price" name="menu-price"><br>
                        <select name="menu-cat">
                            <?php
                            $sqlCatGen = "SELECT * FROM category";
                            $resCatGen = mysqli_query($conn, $sqlCatGen) or die(mysqli_error($conn));
                            while ($row = mysqli_fetch_assoc($resCatGen)) {
                                $CatName = $row["name"];
                            ?>
                                <option value="<?php echo $CatName ?>"><?php echo $CatName ?></option>
                            <?php
                            }

                            ?>
                        </select>

                        <input type="file" name="image" id="" title="Add Your Category Image"><br>
                        <input type="submit" name="add-menu" value="Submit">

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
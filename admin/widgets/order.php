<section>
    <div class="orders" id="orders">
        <h1>Orders</h1>
        <input type="search" name="" id="search" placeholder="Search Orders">

        <div class="order-table">
            <table class="order-table1">

                <tr>
                    <th>Customer name</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Actions</th>

                </tr>
                <?php
                $sql = "SELECT * FROM order_table WHERE status = 'prepairng'";
                // `order_table`(`id`, `cusname`, `itemName`, `qty`, `totprice`, `date`, `time`, `status`)
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row["id"];
                        $cusname = $row["cusname"];
                        $itemName = $row['itemName'];
                        $qty = $row['qty'];
                        $tot  = $row['totprice'];
                        $status = $row['status'];
                ?>
                        <tr>
                            <td><?php echo $cusname ?></td>
                            <td><?php echo $itemName ?></td>
                            <td><?php echo $qty ?></td>
                            <td><?php echo $tot ?></td>
                            <td><?php echo $status ?></td>
                            <td class="actions"><a href="<?php echo SITEURL ?>admin/actions/other-actions.php?comor=<?php echo $id ?>"><i class="fa-solid fa-check"></i></a></td>
                        </tr>
                <?php
                    }
                }

                ?>
            </table>
        </div>


    </div>
</section>
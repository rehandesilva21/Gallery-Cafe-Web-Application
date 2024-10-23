<section>
    <div class="reserv" id="reserv">
        <h1>Reservations</h1>
        <input type="search" name="" id="search" placeholder="Search Reservations">
        <div class="reserv-table">
            <table class="reserv-table1">

                <tr>
                    <th>Customer Name</th>
                    <th>Mobile</th>
                    <th>Resevation Date</th>
                    <th>Reservation Time</th>
                    <th>No of Guests</th>
                    <th>Actions</th>

                </tr>
                <?php
                // INSERT INTO `reservation_table`(`id`, `name`, `email`, `phone`, `resdate`, `restime`, `noGuest`)
                $sql = "SELECT * FROM reservation_table";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $resId = $row["id"];
                        $resName = $row["name"];
                        $resEmail = $row["email"];
                        $resPhone = $row["phone"];
                        $resDate = $row["resdate"];
                        $resTime = $row["restime"];
                        $noGuest = $row['noGuest'];
                ?>
                        <tr>
                            <td><?php echo $resName ?></td>
                            <td><?php echo $resPhone ?></td>
                            <td><?php echo $resDate ?></td>
                            <td><?php echo $resTime ?></td>
                            <td><?php echo $noGuest ?></td>
                            <td class="actions"><a href="<?php echo SITEURL ?>admin/actions/other-actions.php?delres=<?php echo $resId ?>"><i class="fa-solid fa-trash"></i></a></td>

                        </tr>
                <?php
                    }
                }
                ?>

            </table>
        </div>

    </div>
</section>
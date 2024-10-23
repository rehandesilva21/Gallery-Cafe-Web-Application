<div class="dashboard" id="dashboard">
    <div class="pricingtdy">
        <?php
        $todaySales = 0;
        $date = date("Y-m-d");
        $sqlselling = "SELECT * FROM order_table WHERE date = '$date' ";
        $result = mysqli_query($conn, $sqlselling);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $todaySales += $row["totprice"];
            }
        }
        $totalUser = 0;
        $sqlusers = "SELECT * FROM customer";
        $resultusers = mysqli_query($conn, $sqlusers);
        if (mysqli_num_rows($resultusers) > 0) {
            while ($row = mysqli_fetch_array($resultusers)) {
                $totalUser++;
            }
        }
        $totCat = 0;
        $sqltotcat = "SELECT * FROM category";
        $resulttotcat = mysqli_query($conn, $sqltotcat);
        if (mysqli_num_rows($resulttotcat) > 0) {
            while ($row = mysqli_fetch_array($resulttotcat)) {
                $totCat++;
            }
        }
        $totReserv = 0;
        $sqltotReserv = "SELECT * FROM reservation_table";
        $resulttotReserv = mysqli_query($conn, $sqltotReserv);
        if (mysqli_num_rows($resulttotReserv) > 0) {
            while ($row = mysqli_fetch_array($resulttotReserv)) {
                $totReserv++;
            }
        }

        $netWorth = 0;
        $date = date("Y-m-d");
        $sqlselling = "SELECT * FROM order_table";
        $result = mysqli_query($conn, $sqlselling);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $netWorth += $row["totprice"];
            }
        }


        ?>
        <h2  class="access-navigate"><?php echo $todaySales ?> LKR<br><span>Today's Selling</span></h2>
        <h2  class="access-navigate"><?php echo $totalUser ?><br><span>Active users</span></h2>
        <h2  class="access-navigate" onclick="opencats()"><?php echo $totCat ?><br><span>Food Categories</span></h2>
        <h2 onclick="openreserv()" class="access-navigate"><?php echo $totReserv ?><br><span>Reservations</span></h2>
    </div>
    <div class="usertable">
        
        <h1>Active Users</h1>
        <div class="usertable-scroller">
        <table class="usertable1">

            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>username</th>
            </tr>
            <?php
            // (`cusId`, `name`, `email`, `userName`, `phone`, `password`)
            $sqlusers = "SELECT * FROM customer";
            $resultusers = mysqli_query($conn, $sqlusers);
            if (mysqli_num_rows($resultusers) > 0) {
                while ($row = mysqli_fetch_array($resultusers)) {
                    $name = $row['name'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $username = $row['userName'];
            ?>
                    <tr>
                        <td><?php echo $name ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $phone ?></td>
                        <td><?php echo $username ?></td>
                    </tr>
            <?php
                }
            }
            ?>

        </table>
        </div>
    </div>

    <!--Chart- Start -->

    <canvas id="myChart" style="width:40vw; max-width:40vw;max-height: 25vh;"></canvas>
    <div class="usertableb">
        <h1>Recent Orders</h1>
        <table class="usertable2">

            <tr>
                <th>Customer Name</th>
                <th>Order</th>

            </tr>
            <?php
            $count = 0;
            $sql = "SELECT * FROM order_table";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $cusname = $row["cusname"];
                    $item  = $row["itemName"];
            ?>
                    <tr>
                        <td><?php echo $cusname ?></td>
                        <td><?php echo $item ?></td>
                    </tr>
            <?php
                    $count++;
                    if ($count == 3) {
                        break;
                    }
                }
            }
            ?>
        </table>
    </div>

    <!--Chart -End-->

    <!--Net-worth- Start-->

    <div class="networth">
        <h1>Net Worth</h1>
        <h2><?php echo $netWorth ?><span><br>LKR</span></h2>
    </div>
</div>

<!--Net-worth-end-->
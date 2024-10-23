<!-- configuration -->
<?php include('config/constant.php') ?>
<!-- Login ?loging-check -->
<?php include('loging-check.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Gallery Cafe</title>
    <link rel="stylesheet" href="style/menu.css?v=<?php echo time(); ?>">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <div class="header">
        <div class="headerruler"></div>
        <div class="logo">
            <h1>Gallery <span>Cafe</span></h1>
        </div>
        <div class="searchbox">
            <label for="iconsearch"><i class="fa-solid fa-magnifying-glass"></i></label>
            <form action="" method="get">
                <input type="text" id="fname" name="searchtxt" placeholder="Search Your Favorite Foods..">
            </form>
        </div>
        <div class="buttons">
            <ul>
                <li><a href="index.php" title="Back to Home"><i class="fa-solid fa-house"></i></a></li>
                <li><a onclick="openNav1()" title="Show Cart"><i class="fa-solid fa-cart-shopping"></i><span class="badge"
                            id="badge"><button id="badge1"><?php if (isset($_SESSION['menu-cart-list'])) {
                                                                echo count($_SESSION['menu-cart-list']);
                                                            } else {
                                                                echo 0;
                                                            } ?></button></span></a></li>
                <li><a onclick="openNav()" onclick="closeNav()" title="View your Profile"><i class="fa-solid fa-user"></i></a></li>
                <li><a href="logout.php" title="Logout"><i class="fa-solid fa-right-from-bracket"></i></a></li>

            </ul>
        </div>

    </div>
    <section>
        <div class="hrruler"></div>
        <div class="sidenav" id="sidenav">
            <ul>
                <li><a onclick="closeAll()" class="btn active"><i
                            class="fa-solid fa-house"></i>&nbsp;&nbsp;Home&nbsp;&nbsp;</a></li>
                <li><a onclick="openExplore()" class="btn"><i class="fa-solid fa-bowl-food"></i>&nbsp;&nbsp;Explore</a>
                </li>
                <li><a onclick="openFav()" class="btn"><i class="fa-solid fa-heart"></i>&nbsp;&nbsp;Favorite</a></li>
                <li><a onclick="openoders()" class="btn"><i class="fa-solid fa-burger"></i>&nbsp;&nbsp;Order&nbsp;&nbsp;&nbsp;</a>
                </li>

            </ul>
        </div>
    </section>
    <section>
        <div class="imagecontainer">
            <div class="image">

            </div>
        </div>
    </section>
    <section>
        <div class="imagecontainer1">
            <div class="image1">

            </div>
        </div>
    </section>
    <?php include("widgets/category-menu.php") ?>

    <div class="background"></div>
    <section>
        <!-- top rateted items -->
        <?php include('widgets/foodmenuc.php') ?>
    </section>
    <section>
        <div class="trending">
            <div class="trendingnews">
                <div class="trend1">
                    <ul>
                        <li>
                            <h2>Trend 1</h2><img src="images/burger1.png" width="50px" height="50px">
                            <p>Dummy test goes here</p>
                        </li>
                    </ul>
                </div>
                <div class="trend1">
                    <ul>
                        <li>
                            <h2>Trend 1</h2><img src="images/burger1.png" width="50px" height="50px">
                            <p>Dummy test goes here</p>
                        </li>
                    </ul>
                </div>
                <div class="trend1">
                    <ul>
                        <li>
                            <h2>Trend 1</h2><img src="images/burger1.png" width="50px" height="50px">
                            <p>Dummy test goes here</p>
                        </li>
                    </ul>
                </div>
                <div class="trend1">
                    <ul>
                        <li>
                            <h2>Trend 1</h2><img src="images/burger1.png" width="50px" height="50px">
                            <p>Dummy test goes here</p>
                        </li>
                    </ul>
                </div>




            </div>
        </div>
    </section>
    <div class="logoutbtn"><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Logout</a></div>
    <section>
        <div class="black" id=black></div>
        <div class="profile" id="profile">
            <p><a onclick="closeNav()"><i class="fa-solid fa-xmark"></i></a></p>
            <div class="headertxt">
                <h1>Profile</h1>
            </div>
            <div class="profileimage">
                <img src="images/user-profile.png" alt="" width="220px" height="200px">



            </div>
            <div class="details">
                <ul>
                    <li>Name</li>
                    <li>Email</li>
                    <li>Username</li>
                    <li>Phone</li>
                    <li>Orders</li>
                    <li>Cart</li>
                </ul>

            </div>
            <div class="subdetails">
                <?php
                $cus_id = $_SESSION['userId'];
                $sqlcus = "SELECT * FROM customer WHERE cusId ='$cus_id'";
                $result = mysqli_query($conn, $sqlcus) or die(mysqli_error($conn));
                // `name`, `email`, `userName`, `phone`,
                while ($row = mysqli_fetch_array($result)) {
                    $cusname = $row['name'];
                    $email = $row['email'];
                    $userName = $row['userName'];
                    $phone  =  $row['phone'];
                }
                ?>
                <ul>
                    <li><?php echo $cusname ?></li>
                    <li class="mail-text" title="<?php echo $email ?>"><?php echo $email ?></li>
                    <li><?php echo $userName ?></li>
                    <li><?php echo $phone ?></li>
                    <li>Orders</li>
                    <li>Cart</li>
                </ul>

            </div>
        </div>
        </div>
    </section>
    <!--Cart-->
    <div id="cart" class="cart">
        <a href="javascript:void(0)" class="closebtn" onclick="closeCart()"><i class="fa-solid fa-xmark"></i></a>
        <h1>Cart</h1>
        <div class="sub-total">
            <?php $totPrice = 0;
            if (isset($_SESSION['menu-cart-list'])) {
                foreach ($_SESSION['menu-cart-list'] as $row) {
                    $totPrice = $totPrice + $row[4];
                }
            } ?>
            <h3>Total: <label><?php echo $totPrice ?></label></h3>
            <?php if (isset($_SESSION['menu-cart-list'])) {
            ?>
                <div class="checkout"><a href="check-out.php" class="check">Checkout</a></div>
            <?php
            } ?>

        </div>
        <div class="cart-scroller">
            <?php

            if (isset($_SESSION['menu-cart-list'])) {
                foreach ($_SESSION['menu-cart-list'] as $row) {
            ?>
                    <div class="imanegr">
                        <div class="cart-items">
                            <img src="images/menu/<?php echo $row[5] ?>" alt="" width="150" height="150" style="border-radius:14px; margin-top:2vh;">
                            <h1 class="cart-item-name"><?php echo $row[1] ?></h1>
                            <div class="text-des">
                                <p>Item Price:<label> <b><?php echo $row[2] ?></b></label></p>
                                <p>Item Quantity: <label> <b><?php echo $row[3] ?></b></label></p>
                                <div class="del-btn">

                                    <a href="<?php echo SITEURL ?>widgets/delete-cart.php?delCart=<?php echo $row[0] ?>" class="del">Remove from Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php

                };
            }
            ?>


            <!-- <div class="imanegr">
                <div class="cart-items">
                    <img src="images/profile.png" alt="" width="150" height="150">
                    <h1>Item Name</h1>
                    <div class="text-des">
                        <p>Item Price:<label> N/A</label></p>
                        <p>Item Quantity: <label> N/A</label></p>
                        <div class="del-btn">
                            <a href="#" class="view-item-btn">Check Out</a>
                            <a href="#" class="del">Remove from Cart</a>
                        </div>
                    </div>
                </div>
            </div> -->


        </div>

    </div>

    <!-- explode menu -->
    <?php include('widgets/tab-explode.php') ?>
    <!-- favourite -->
    <?php include('widgets/tab-favourite.php') ?>
    <!--order section-->
    <section>
        <div id="orders-container" class="orders-container">
            <h1>Order History</h1>
            <table class="orders-table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Status</th>
                </tr>
                <?php
                $cusname = $_SESSION['userName'];
                $sql = "SELECT * FROM order_table WHERE cusname = '$cusname'";
                $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $Id = $row["id"];
                        $itemName = $row["itemName"];
                        $price = $row["totprice"];
                        $qty  = $row["qty"];
                        $states =   $row["status"];
                ?>
                        <tr>
                            <td><?php echo $Id ?></td>
                            <td><?php echo $itemName ?></td>
                            <td><?php echo $price ?></td>
                            <td><?php echo $qty ?></td>
                            <td><?php echo $states ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </table>
        </div>
    </section>
    <!--Search Results-->

    <div id="search-results" class="search-results">
        <h1>You Searched for <label><?php if (isset($_GET['searchtxt'])) {
                                        echo $$_GET['searchtxt'];
                                    } ?></label></h1>
        <div class="searching-container">
            <?php
            if (isset($_GET['searchtxt'])) {
                echo "<script>openSearch()</script>";
                $searhTxt = $_GET['searchtxt'];
                $searhTxt = '%' . $searhTxt . '%';
                $sql = "SELECT * FROM menu Where name like '$searhTxt' or Category like '$searhTxt' or description like '$searhTxt' or price like '$searhTxt' ";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    $itemId = $row["id"];
                    $itemName = $row["name"];
                    $itemPrice = $row["price"];
                    $itemImage = $row["image"];
            ?>
                    <a href="<?php echo SITEURL; ?>menu.php?iid=<?php echo $itemId ?>" class="searched-container">
                        <div class="food-search">
                            <img class="search-res" src="images/menu/<?php echo $itemImage ?>">
                            <h2><?php echo $itemName ?></h2>
                            <p><?php echo $itemPrice ?></p>
                        </div>
                    </a>
            <?php
                }
            }


            ?>


            <!-- <div class="searched-container">
                <div class="food-search">
                    <div class="search-res">
                    </div>
                    <h2>Item Name</h2>
                    <p>Price</p>
                </div>
            </div> -->

        </div>
    </div>

    </div>
    </section>


    <div id="filter" class="filter">
        <a href="javascript:void(0)" class="closebtnfliter" onclick="closeFilter()"><i
                class="fa-solid fa-xmark"></i></a>

        <div class="filtercont">
            <ul>
                <li><a href="#">Chinese</a></li>
                <li><a href="#">Chinese</a></li>
                <li><a href="#">Chinese</a></li>
                <li><a href="#">Chinese</a></li>
                <li><a href="#">Chinese</a></li>
                <li><a href="#">Chinese</a></li>



            </ul>
        </div>

    </div>
    <a class="blackcont" id="blackcont" href="<?php echo SITEURL; ?>menu.php"></a>
    <!-- Item view include -->
    <?php include('widgets/item-view.php') ?>


    <script type="text/Javascript" src="js/menu.js?v=<?php echo time(); ?>"></script>


</body>

</html>
<?php
if (isset($_GET['iid'])) {
    echo "<script>openorder()</script>";
}
if (isset($_GET['searchtxt'])) {
    echo "<script>openSearch()</script>";
}
?>
<?php include("../config/constant.php") ?>
<?php include("actions/login-redirect.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/admin.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js?v=<?php echo time() ?>"></script>


    <title>Dashboard</title>
</head>

<body>
    <!--Loader-login Success-->
    <?php
    if (isset($_SESSION['first-time'])) {
    ?>
        <div class="loader" id="loader">
            <div class="successfull-animation">
                <lottie-player src="https://lottie.host/bfa97d4b-b948-4baf-8ff7-7ba4021dce52/xMXcnnLKr2.json" background="##FFFFFF" speed="1" style="width: 750px; height: 750px" autoplay direction="1" mode="normal"></lottie-player><br>

                <h1 id="loader-text">Welcome <span><?php echo $_SESSION['admin-username'] ?></span></h1>



            </div>
        </div>
    <?php
        unset($_SESSION['first-time']);
    }
    ?>


    <!--Navigation bar-start-->

    <div class="header">
        <h1>Welcome <span><?php echo $_SESSION['admin-username'] ?></span></h1>
    </div>
    <div class="sidenavbtns">

        <div class="btnssides">
            <ul>
                <li><input type="button" value="Dashboard" onclick="opendash()" title="Shift + D"></li>
                <li><input type="button" value="Categories" onclick="opencats()"></li>
                <li><input type="button" value="Menu" onclick="openmenu()"></li>
                <li><input type="button" value="Orders" onclick="openorders()"></li>
                <li><input type="button" value="Promotions" onclick="openpromo()"></li>
                <li><input type="button" value="Events" onclick="openevents()"></li>
                <li><input type="button" value="Reservations" onclick="openreserv()"></li>
                <?php
                if ($_SESSION['admin-usertype'] == 'admin') {
                ?>
                    <li><input type="button" value="Users" onclick="openuser()"></li>
                <?php
                }
                ?>
                <li><input type="button" value="Settings" onclick="opensettings()"></li>
                <li class="logoutdash"><a href="actions/log-out.php">Log out <i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </div>
    </div>

    <!--Navigation bar-End-->

    <!--Dashboard- Start-->

    <?php include('widgets/dashboard.php') ?>

    <!--Categories- Start-->

    <?php include('widgets/category.php') ?>

    <!--Categories- End-->

    <!--Orders-Start-->

    <?php include('widgets/order.php') ?>

    <!--Orders- End-->

    <!--Menu-Start-->

    <?php include('widgets/menu.php') ?>

    <!--Menu- End-->

    <!--Promotion-Area-Start-->
    <?php include('widgets/promotion.php') ?>


    <!-- event area start -->
    <?php include('widgets/event.php') ?>

    <!--Event Area End-->

    <!--reservation area start-->
    <?php include('widgets/reservation.php') ?>

    <!-- Users Section Start-->
    <?php
    if ($_SESSION['admin-usertype'] == 'admin') {
    ?>
        <?php include('widgets/users.php') ?>
    <?php
    }
    ?>
    
    <!--Settings-Start-->

    <?php include('widgets/setting.php') ?>


    <!--Settings- End-->
    <!--delete Acc error-->
    <div class="glossy-effect" id="delete-acc-error">
        <div class="error-background">
            <h2>Are you sure to delete your account?</h2>
            <p>If you clicked yes, Your data will be erased from the system and you won't be able to access the system</p>
            <div class="action-buttons">
                <input type="submit" value="Yes">
                <input type="reset" value="No" onclick="closemsg()">
            </div>

        </div>

    </div>

    <!--Javascript-Start-->
    <script src="../js/admin.js?v=<?php echo time() ?>"></script>
    <script>
        let loading = document.getElementById('loader');
        var loadtext = document.getElementById('loader-text');

        setTimeout(function() {
            loadtext.style.opacity = "1";
        }, 700);
        setTimeout(function() {
            loadtext.style.display = "block";
        }, 500);
        setTimeout(function() {
            loading.style.opacity = 0;

            setTimeout(function() {
                loading.style.display = "none";

            }, 3000)


        }, 3000);
    </script>

</body>

</html>

<?php
// The command to run the Python script
$command = escapeshellcmd('python3 ./app.py');
// Execute the command
$output = shell_exec($command);

// // Display the output from the Python script

?>
<?php
if (isset($_SESSION['cat'])) {
    echo "<script>opencats()</script>";
    unset($_SESSION["cat"]);
}
if (isset($_SESSION['eve'])) {
    echo "<script>openevents()</script>";
    unset($_SESSION["eve"]);
}
if (isset($_SESSION['menu'])) {
    echo "<script>openmenu()</script>";
    unset($_SESSION["menu"]);
}
if (isset($_SESSION['prom'])) {
    echo "<script>openpromo()</script>";
    unset($_SESSION["prom"]);
}

if (isset($_SESSION['order-view'])) {
    echo "<script>openorders()</script>";
    unset($_SESSION["order-view"]);
}
if (isset($_SESSION['res-view'])) {
    echo "<script>openreserv()</script>";
    unset($_SESSION["res-view"]);
}
if (isset($_SESSION["user"])) {
    echo "<script>openuser()</script>";
    unset($_SESSION["user"]);
}
if (isset($_GET['searchmenu'])) {
    echo "<script>openmenu()</script>";
}
?>
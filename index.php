<?php
include("config/constant.php");
ob_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>The Gallery Cafe</title>
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1.00001,viewport-fit=cover">
  <meta name="mobile-web-app-capable" content="yes">
  <style id="expo-generated-fonts" type="text/css">
    @font-face {
      font-family: material;
      src: url(/static/media/MaterialIcons.f20305dee9d396fea5c7.ttf);
      font-display: auto
    }

    @font-face {
      font-family: Flame-Bold;
      src: url(/static/media/FlameBold.28425e3e58c6f1505f70.ttf);
      font-display: auto
    }

    @font-face {
      font-family: Flame-Regular;
      src: url(/static/media/FlameRegular.c3f0a4689c31d16329b5.ttf);
      font-display: auto
    }

    @font-face {
      font-family: Flame-RegularSans;
      src: url(/static/media/FlameRegularSans.ac1ee8a48cb61a7b6848.ttf);
      font-display: auto
    }
  </style>
  <link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="style/Responsive.css?v=<?php echo time(); ?>">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link href="https://db.onlinewebfonts.com/c/565a681be0eb6f1d92c6bc57c629ea35?family=Flame+Bold" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/insaniburger" rel="stylesheet">
  <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"-->

  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js?v=<?php echo time() ?>"></script>
  <script src="js/script.js?v=<?php echo time() ?>"></script>

</head>

<body>
  <section class="container">
    <div class="logo">
      <h1>Gallery Cafe <span>®</span></h1>

    </div>
    <div class="resnav"><button>...</button></div>
    <div class="navbar">
      <ul>
        <li><a href="#">Home</a></li>
        <?php
        if (isset($_SESSION['cus-login'])) {
        ?><li><a href="menu.php" style="cursor:pointer;">Exlpore</a></li><?php
                                                                                } else {
                                                                                  ?><li><a onclick="document.getElementById('id03').style.display='block'" style="cursor:pointer;">Exlpore</a></li><?php
                                                                                                                                }
                                                                                                                                  ?>
        <!-- onclick="document.getElementById('id03').style.display='block'" -->

        <li><a href="#reserv">Reservation</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <?php
        if (isset($_SESSION['cus-login'])) {
        ?><li class="login"><a href="logout.php">Logout</a></li><?php
                                                                      } else {
                                                                        ?><li class="login"><a onclick="document.getElementById('id01').style.display='block'">Login/SignUp</a></li><?php
                                                                                                                          }
                                                                                                                            ?>


      </ul>
    </div>
   <div class="loader" id="loader">
    <div class="loading-screen" id="loading-screen">
   <lottie-player src="https://lottie.host/664535af-e3c6-459f-90c9-30a0c0e33247/3qsr1IqLMK.json" background="##FFFFFF" speed="1" style="width: 200px; height: 200px" loop  autoplay direction="1" mode="normal"></lottie-player><br>
   <h1>Loading...</h1>
  </div>
  </div>
  </section>
  <section class="home">
    <div class="texture">
      <img src="images/texture.png" alt="texture">
    </div>
    <div class="background">
      <div class="welcome">
        <h1>It's not just foods...</h1>
        <h2>It's the</h2>
        <h1 class="exp">Experience<span>!</span></h1>
      </div>
      

    </div>
    <div class="imgcontainer">
      <div class="image">
        <img src="images/delicious-burger-with-many-ingredients-isolated-white-background-tasty-cheeseburger-splash-sauce (2).png" width="1200" height="1193" class="imager">
      </div>
      <div class="subtext">
        <p>Welcome to The Gallery Café, a renowned culinary destination in the heart of Colombo. Our restaurant is celebrated for its vibrant atmosphere, exquisite dishes, and dedication to providing an unforgettable dining experience
        </p>
      </div>

    </div>
    <div class="learn">
      <?php
      if (isset($_SESSION['cus-login'])) {
      ?>
        <a href="menu.php">Exlpore&nbsp;<i class="fa-solid fa-arrow-right"></i></a>
      <?php
      } else {
      ?>
        <a onclick="document.getElementById('id03').style.display='block'">Exlpore&nbsp;<i class="fa-solid fa-arrow-right"></i></a>
      <?php
      }
      ?>

    </div>

    </div>


  </section>
  <?php include('widgets/login.php'); ?>
  <div class="message">
    <div id="id03" class="modal2" onclick="document.getElementById('id03').style.display='none'">

      <form class="containcolor"></form>

      <div class="container3">
        <h2><a onclick="document.getElementById('id03').style.display='none'"><i class="fa-solid fa-xmark"></i></a></h2>


        <h1>:&#41;Hmm, We Can't Show the Menu right now <br> <span>Please Login or Signup</span></h1>

        <div class="clearfix2">
          <!--button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button-->
          <button type="submit" class="signupbtn" onclick="document.getElementById('id01').style.display='block'">Login/Sign Up</button>
        </div>

      </div>





      </form>
    </div>
    </form>
  </div>
  <div class="foodbanner">
    <h2>Events and Promotions</h2>
    <div class="banner1">
      <img src="images/banner1.jpg" atl="banner1" width="600" height="355.38" class="bannerimg">
    </div>
    <div class="banner2">
      <img src="images/banner1.jpg" atl="banner1" width="600" height="355.38" class="bannerimg1">
    </div>
  </div>

  <section class="" id="foof-menu">
    <div class="menu-text">
    <h2>Today's Menu</h2>
    </div>
    <div class="menu-container">
        <div class="menu-item">
            <img src="images/pizzam.jpeg" alt="Margherita Pizza">
            <div class="menu-item-content">
                <h2>Margherita Pizza</h2>
                <p>Classic pizza with tomato sauce, fresh mozzarella, and basil</p>
                <span class="price">LKR 1500</span>
            </div>
        </div>
        <div class="menu-item">
            <img src="images/grilled salmon.jpeg" alt="Grilled Salmon">
            <div class="menu-item-content">
                <h2>Grilled Salmon</h2>
                <p>Fresh salmon fillet grilled to perfection, served with roasted vegetables</p>
                <span class="price">LKR 550</span>
            </div>
        </div>
        <div class="menu-item">
            <img src="images/salad.jpg" alt="Caesar Salad">
            <div class="menu-item-content">
                <h2>Caesar Salad</h2>
                <p>Crisp romaine lettuce, croutons, parmesan cheese, and Caesar dressing</p>
                <span class="price">LKR 650</span>
            </div>
        </div>
        <div class="menu-item">
            <img src="images/bburger.jpg" alt="Beef Burger">
            <div class="menu-item-content">
                <h2>Beef Burger</h2>
                <p>Juicy beef patty with lettuce, tomato, cheese, and special sauce</p>
                <span class="price">LKR 700</span>
            </div>
        </div>
        <div class="menu-item">
            <img src="images/pasta.jpg" alt="Pasta Carbonara">
            <div class="menu-item-content">
                <h2>Pasta Carbonara</h2>
                <p>Spaghetti with crispy pancetta, egg, pecorino cheese, and black pepper</p>
                <span class="price">LKR 1200</span>
            </div>
        </div>
        <div class="menu-item">
            <img src="images/tikka.jpg" alt="Chicken Tikka Masala">
            <div class="menu-item-content">
                <h2>Chicken Tikka Masala</h2>
                <p>Tender chicken in a creamy tomato-based sauce, served with basmati rice</p>
                <span class="price">LKR 600</span>
            </div>
        </div>
        <div class="menu-item">
            <img src="images/stir.jpg" alt="Vegetable Stir Fry">
            <div class="menu-item-content">
                <h2>Vegetable Stir Fry</h2>
                <p>Assorted fresh vegetables stir-fried in a savory sauce, served with rice</p>
                <span class="price">LKR 450</span>
            </div>
        </div>
        <div class="menu-item">
            <img src="images/lava.jpeg" alt="Chocolate Lava Cake">
            <div class="menu-item-content">
                <h2>Chocolate Lava Cake</h2>
                <p>Warm chocolate cake with a gooey center, served with vanilla ice cream</p>
                <span class="price">LKR 380</span>
            </div>
        </div>
        <div class="menu-item">
            <img src="images/gsalad.jpg" alt="Greek Salad">
            <div class="menu-item-content">
                <h2>Greek Salad</h2>
                <p>Fresh cucumbers, tomatoes, olives, feta cheese, and red onions with olive oil dressing</p>
                <span class="price">LKR 270</span>
            </div>
        </div>
        <div class="menu-item">
            <img src="images/sushi.avif" alt="Sushi Platter">
            <div class="menu-item-content">
                <h2>Sushi Platter</h2>
                <p>Assorted sushi rolls and sashimi, served with wasabi, ginger, and soy sauce</p>
                <span class="price">LKR 550</span>
            </div>
        </div>
    </div>
  </section>
  <section class="reservation-section" id="reserv">
    <h2>Table Reservation</h2>
    <img src="images/table-reserve.png" alt="" class="pizza-image">
    <div class="container-reserve">

      <form class="reservation-form" action="add-reservation.php" method="POST">
        <div class="form-group">
          <label for="date">Reservation Date:</label>
          <input type="date" id="date" name="reservation-date" required>
        </div>

        <div class="form-group">
          <label for="time">Reservation Time:</label>
          <input type="time" id="time" name="reservation-time" required>
        </div>

        <div class="form-group">
          <label for="guests">Number of Guests:</label>
          <select id="guests" name="number-of-guests" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8+</option>
          </select>
        </div>

        <div class="form-group">
          <label for="name">Your Name:</label>
          <input type="text" id="name" name="name" class="your-name" placeholder="Enter your name" required>
        </div>

        <div class="form-group">
          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>

        <div class="form-group">
          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
          <button type="submit" name="add-reservation" class="btn-submit">Book Now</button>
        </div>
      </form>
    </div>
  </section>
  <!--Testimonials-->
  <div class="responsive-container-block big-container">
    <div class="responsive-container-block bg">
      <p class="text-blk title">
        Testimonials
      </p>
      <p class="text-blk desc">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Velit massa ante viverra non maecenas. Faucibus amet quis duis egestas.
      </p>
      <div class="responsive-container-block blocks">
        <div class="responsive-cell-block wk-desk-1 wk-tab-1 wk-mobile-1 wk-ipadp-1 content">
          <p class="text-blk info-block">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus elementum magna ut duis pulvinar tincidunt vivamus adipiscing quam. Eget dui quis etiam sed eget sed est.
          </p>
          <div class="responsive-container-block person">
            <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 icon-block">
              <img class="profile-img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eourInstructors1.svg">
            </div>
            <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 text-block">
              <p class="text-blk name">
                Jane Doe
              </p><br>
              <p class="text-blk desig">
                CEO
              </p>
            </div>
          </div>
        </div>
        <div class="responsive-cell-block wk-desk-1 wk-tab-1 wk-mobile-1 wk-ipadp-1 content">
          <p class="text-blk info-block">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus elementum magna ut duis pulvinar tincidunt vivamus adipiscing quam. Eget dui quis etiam sed eget sed est.
          </p>
          <div class="responsive-container-block person">
            <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 icon-block">
              <img class="profile-img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eourInstructors1.svg">
            </div>
            <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 text-block">
              <p class="text-blk name">
                Jane Doe
              </p><br>
              <p class="text-blk desig">
                CEO
              </p>
            </div>
          </div>
        </div>
        <div class="responsive-cell-block wk-desk-1 wk-tab-1 wk-mobile-1 wk-ipadp-1 content bottom">
          <p class="text-blk info-block">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus elementum magna ut duis pulvinar tincidunt vivamus adipiscing quam. Eget dui quis etiam sed eget sed est.
          </p>
          <div class="responsive-container-block person">
            <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 icon-block">
              <img class="profile-img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/eourInstructors1.svg">
            </div>
            <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12 text-block">
              <p class="text-blk name">
                Jane Doe
              </p><br>
              <p class="text-blk desig">
                CEO
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="about" id="about">
    <p class="hd">
      About Us
    </p>
    <p class="des">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Velit massa ante viverra non maecenas. Faucibus amet quis duis egestas.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Velit massa ante viverra non maecenas. Faucibus amet quis duis egestas.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Velit massa ante viverra non maecenas. Faucibus amet quis duis egestas.
    </p>

  </div>

  <!--Footer-->
  <div class="footer" id="contact">
    <div class="footerlogo">
      <h3>Gallery Cafe</h3>
      <p class="address-text">25th Floor, World Trade Center, Colombo</p>
      <ul>
        <li>
          <span>Phone: </span> +123 456 7890
        </li>
        <li class="email1">
          <span>Email: support@gallerycafe.com</span>
        </li>
      </ul>
    </div>
    <div class="social">
      <ul>
        <li><i class="fa-brands fa-facebook"></i></li>
        <li><i class="fa-brands fa-instagram"></i></li>
        <li><i class="fa-brands fa-x-twitter"></i></li>
        <li><i class="fa-brands fa-behance"></i></li>
      </ul>
    </div>
    <div class="open">
      <p><b>Opening Hours:</b> Mon - Saturday @ 9.00AM to 10.30 PM</p>
      <p class="closed-date"><b>Sunday: </b><span>Closed</span></p>
    </div>

    <div class="footerlist3">

      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Explore</a></li>
        <li><a href="#reserv">Reservation</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="admin/index.php">Careers</a></li>
      </ul>
    </div>
    <div class="vr"></div>
    <div class="imagesinsta">
      <h1>Gallary</h1>
      <ul>
        <li><img src="images/insta.jpg" alt="" width="50px" height="50px"></li>
        <li><img src="images/insta2.jpg" alt="" width="50px" height="50px"></li>
        <li><img src="images/insta3.jpg" alt="" width="50px" height="50px"></li>
      </ul>
      <ul>
        <li><img src="images/insta.jpg" alt="" width="50px" height="50px"></li>
        <li><img src="images/insta.jpg" alt="" width="50px" height="50px"></li>
        <li><img src="images/insta.jpg" alt="" width="50px" height="50px"></li>
      </ul>
      <ul>
        <li><img src="images/insta.jpg" alt="" width="50px" height="50px"></li>
        <li><img src="images/insta.jpg" alt="" width="50px" height="50px"></li>
        <li><img src="images/insta.jpg" alt="" width="50px" height="50px"></li>
      </ul>
    </div>
    <div class="newsletter">
      <input type="text" name="name" placeholder="Name" class="textfield1" style="height:10px;" id="text">
      <input type="text" name="email" placeholder="Email" class="textfield1" style="height:10px; margin-top: -3px;" id="text">
      <input type="text" name="msg" placeholder="Message" rows="5" style="height: 75px;margin-top: -3px; padding-top: -20%;" id="text">
      <div class="newsbtn"><a href="#" class="nwsbtn">Submit</a></div>

    </div>
  </div>
  <div class="copyright">
    <h2>Copyright © 2024 the Gallary Cafe.All rights reserved!</h2>
  </div>
  <script>
     let loading = document.getElementById('loader');
       setTimeout(function (){
    loading.style.opacity=0;
    setTimeout(function(){
      loading.style.display= "none";

    },3001)
     },3000);
  </script>
  
</body>

</html>
<?php
if (isset($_SESSION['cus-log-f'])) {
  echo "
    <script>document.getElementById('id01').style.display='block';</script>";
  unset($_SESSION['cus-log-f']);
}
if (isset($_SESSION['sign-f'])) {
  echo "<script>showSignUp()</script>";
}
?>
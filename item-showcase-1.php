<!-- /*
* Template Name: Minimal
* Template Author: Untree.co
* Author URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->


<!doctype html>
<html lang="en">
<?php
$itemName = $_GET["itemName"];
$clientName = "Roblox";
if ($itemName) {
    if ($itemName == "CursedCabin") {
        $projectName = "Roblox Game - Cursed Cabin";
        $projectDate = "April 2024 - July 2024";
        $description = "Cursed Cabin is a round-based horror game where players must survive demonic events in a cabin deep in the woods. Events occur at every chime of a grandfather clock, growing more intense as time progresses.";
        $description .= "<br><br>";
        $description .= '<a  target="_blank" class="primary" href="https://www.roblox.com/games/17275401603/Cursed-Cabin-Beta">Project Link</a>';

    } elseif ($itemName == "WhisperingPines") {
        $clientName = "Michael Dezayas";
        $projectName = "Roblox Game - Whispering Pines";
        $projectDate = "January 2024 - July 2024";
        $description = "Whispering Pines is an eerie adventure game set in a haunted forest. Players must uncover the mysteries hidden within the pines while avoiding supernatural entities.";
        $description .= "(I made this for a client to help them create their first game on Roblox!)";
        $description .= "<br><br>";
        $description .= '<a target="_blank" class="primary" href="https://www.roblox.com/games/13270057535/Whispering-Pines">Project Link</a>';

    } elseif ($itemName == "FantasyVillageRP") {
        $projectName = "Roblox Game - Fantasy Village RP";
        $projectDate = "May 2024 - Present";
        $description = "Fantasy Village RP is a medieval-themed role-playing game where players can buy and upgrade houses, customize furniture, and take on various roles like thieves, guards, blacksmiths, and bakers in a village surrounded by castle walls.";
        $description .= "<br>";
        $description .= "(In Progress)";

    } elseif ($itemName == "LightsOutDemo") {
        $projectName = "Roblox Game - Lights Out Demo";
        $projectDate = "June 2017 - February 2018";
        $description = "Lights Out Demo is a thrilling horror experience where players navigate through dark environments, solving puzzles and avoiding terrifying creatures.";

    } elseif ($itemName == "JanitorSimulator") {
        $projectName = "Roblox Game - Janitor Simulator";
        $projectDate = "2021-07-01";
        $description = "Janitor Simulator is a strategic game where players take on the role of a janitor, cleaning up messes, upgrading their tools, and managing time to keep the environment spotless.";
        //$description .= "<br>";
        //$description .= '<a class="primary" href="https://www.roblox.com/games/5416046650/Janitor-Simulator-UPDATE-Multiplayer">Project Link</a>';

    } elseif ($itemName == "Revelary") {
      $projectName = "Roblox Game - Revelary";
        $projectDate = "2019-06-01";
        $description = "Revelary is a captivating mystery game that challenges players to unravel complex stories and solve puzzles in an immersive narrative setting.";

    } elseif ($itemName == "DanielsApartment") {
        $projectName = "Roblox Game - Daniels Apartment";
        $projectDate = "May 2021 - June 2021";
        $description = "Daniels Apartment, also known as 11 Days, is a suspenseful game where players explore an apartment over the course of 11 days, uncovering secrets and facing psychological challenges.";
        $description .= "<br><br>";
        $description .= '<a  target="_blank" class="primary" href="https://www.roblox.com/games/6752394768/Daniels-Apartment">Project Link</a>';

    } elseif ($itemName == "FutureRNG") {
        $projectName = "Roblox Game - Future RNG";
        $projectDate = "July 2024 - Present";
        $description = "Future RNG is a random number generator (RNG) game for cards. Players can PVE, PVP, craft new cards, gather a collection of rare and unique cards, etc.";
        $description .= "<br><br>";
        $description .= '<a  target="_blank" class="primary" href="https://www.roblox.com/games/18610939216/Future-RNG-UPDATE-3-0">Project Link</a>';

    } elseif ($itemName == "TelephoneEscape") {
        $clientName = "Sean Herman";
        $projectName = "Roblox Game - Telephone Escape";
        $projectDate = "July 2024 - August 2024";
        $description = "Telephone Escape is a creative and fun parkour obby with multiple mind-boggling puzzles. ";
        $description .= "<br>";
        $description .= "(I made this for a client to use to help spread awareness about his company's mission!)";
        $description .= "<br><br>";
        $description .= '<a  target="_blank" class="primary" href="https://www.roblox.com/games/18722620510/Telephone-Escape-by-Kinzoo">Project Link</a>';

    }
}

 ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=PT+Mono&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Nathaniel Merck</title>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="100">

  <style>
      .owl-carousel .carousel-image {
          width: 100px;
          height: fit-content;
          object-fit: cover;

      }
  </style>
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav dark mb-5 site-navbar-target">
    <div class="container">
      <div class="site-navigation">
        <a href="index.html" class="logo m-0">Space<span class="text-primary">.</span></a>

        <ul class="js-clone-nav d-none d-lg-inline-none site-menu float-right">
          <li><a href="#home-section" class="nav-link active">Home</a></li>
          <li><a href="#portfolio-section">Portfolio</a></li>

          <li > <!-- class="has-children" -->
            <a href="#about-section">About</a>
            <!--
            <ul class="dropdown">

              <li><a href="elements.html" class="nav-link">Elements</a></li>
              <li class="has-children">
                <a href="#">Menu Two</a>
                <ul class="dropdown">
                  <li><a href="#" class="nav-link">Sub Menu One</a></li>
                  <li><a href="#" class="nav-link">Sub Menu Two</a></li>
                  <li><a href="#" class="nav-link">Sub Menu Three</a></li>
                </ul>
              </li>
              <li><a href="#" class="nav-link">Menu Three</a></li>

            </ul>
            -->
          </li>
          <li><a href="services.html">Services</a></li>
        </ul>

        <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-inline-block" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>

      </div>
    </div>
  </nav>






  <div class="untree_co-section untree_co-section-4 pb-0"  id="portfolio-section">
    <div class="container">
      <div class="portfolio-single-wrap unslate_co--section" id="portfolio-single-section">

        <div class="portfolio-single-inner">
          <h2 class="heading-portfolio-single-h2 text-black"><?php echo $projectName; ?></h2>

          <div class="row justify-content-between mb-5">
            <div class="col-12 mb-4">
              <div class="owl-carousel single-slider">
                  <?php
                  $projectFolderName = $itemName . "Project";
                  $imageDirectory = "images/projects/" . $projectFolderName . "/";
                  // Check if the directory exists
                  if (is_dir($imageDirectory)) {
                      // Get all image files in the directory
                      $images = glob($imageDirectory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
                      // Loop through each image and print it
                      foreach ($images as $image) {
                          echo '  <figure class="mb-4" style="width: 100%; height: 100%; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; background-color: #f0f0f0;">
                                      <img src="' . $image . '" alt="Image" style="max-width: 100%; max-height: 300px; width: auto; height: auto; object-fit: contain; display: block;">
                                  </figure>';
                      }
                  } else {
                      echo 'Directory does not exist.';
                  }
                  ?>
              </div>
            </div>
            <div class="col-12 my-12">
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="detail-v1">
                    <span class="detail-label">Project Date</span>
                    <span class="detail-val"><?php echo $projectDate; ?></span>
                  </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="detail-v1">
                    <span class="detail-label">Client</span>
                    <span class="detail-val"><?php echo $clientName; ?></span>
                  </div>
                </div>
                <!--
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="detail-v1">
                    <span class="detail-label">Visit</span>
                    <span class="detail-val"><a href="https://untree.co">https://untree.co/</a></span>
                  </div>
                </div>
              -->
              </div>
            </div>
            <div class="col-md-12">
              <?php echo $description; ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <div class="site-footer">
    <div class="container">

      <div class="row">
        <div class="col-lg-3">
          <div class="widget">
            <h3>Home</h3>
            <ul class="list-unstyled float-left links">
              <li><a href="#">Untree.co</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-3">
          <div class="widget">
            <h3>Projects</h3>
            <ul class="list-unstyled float-left links">
              <li><a href="#">HTML5</a></li>
              <li><a href="#">CSS3</a></li>
              <li><a href="#">Untree.co</a></li>
              <li><a href="#">Free Templates</a></li>
              <li><a href="#">WordPress Themes</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-3">
          <div class="widget">
            <h3>Services</h3>
            <ul class="list-unstyled float-left links">
              <li><a href="#">Untree.co</a></li>
              <li><a href="#">jQuery</a></li>
              <li><a href="#">Bootstrap</a></li>
              <li><a href="#">Freebies</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->


        <div class="col-lg-3">
          <div class="widget">
            <h3>Contact</h3>
            <address>43 Raymouth Rd. Baltemoer, London 3910</address>
            <ul class="list-unstyled links mb-4">
              <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
              <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
              <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
            </ul>

            <h3>Connect</h3>
            <ul class="list-unstyled social">
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
              <li><a href="#"><span class="icon-dribbble"></span></a></li>
            </ul>

          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

      </div> <!-- /.row -->





      <div class="row mt-5">
        <div class="col-12 text-center">
          <p class=" mb-0">&copy; 2020. All Rights Reserved. Design by <a href="https://untree.co/" target="_blank" class=""><strong>Untree.co</strong></a> Distributed By <a href="https://themewagon.com">ThemeWagon</a> </p>
          <p class="">
            <span class="mx-2">Twitter <a href="https://twitter.com/untree_co">@Untree_co</a></span>
            <span>&bullet;</span>
            <span class="mx-2">Facebook <a href="https://web.facebook.com/Untree.co">@Untree.co</a></span>
          </p>

        </div>
      </div>
    </div> <!-- /.container -->
  </div> <!-- /.site-footer -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/wave-animate.js"></script>
  <script src="js/circle-progress.js"></script>
  <script src="js/imagesloaded.pkgd.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/TweenMax.min.js"></script>
  <script src="js/ScrollMagic.min.js"></script>
  <script src="js/scrollmagic.animation.gsap.min.js"></script>

  <script src="js/custom.js"></script>

</body>

</html>

<?php

 ?>

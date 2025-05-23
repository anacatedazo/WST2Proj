<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Platform 9¾ Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
  <link href="style.css" rel="stylesheet"/>
</head>
<body>

<?php include 'navbar.php'; ?> <!--nav bar-->
     

<!-- Hero Section -->
<section id="home" class="hero-section">
  <div class="hero-overlay-text bg-white bg-opacity-75 p-4">
    <h1 class="text-uppercase text-dark">Wizard Shop</h1>
    <p class="text-dark">
      Step into the magical world of our best-selling collections, where
      enchantment meets style. These house-inspired picks — from the brave
      Gryffindor to the wise Ravenclaw — have captured the hearts of fans far
      and wide. Crafted for loyalty, ambition, courage, and intellect, these
      items bring the spirit of your favorite house to life. Claim yours before
      they vanish — these legendary pieces don’t stay in stock for long!
    </p>
  </div>
  <div
    class="hero-houses d-flex justify-content-center flex-wrap gap-3 mt-4"
  >
    <div class="hero-house">
      <img src="images/gryffindor.jpg" alt="Gryffindor" />
    </div>
    <div class="hero-house">
      <img src="images/slytherin.jpg" alt="Slytherin" />
    </div>
    <div class="hero-house">
      <img src="images/ravenclaw.jpg" alt="Ravenclaw" />
    </div>
    <div class="hero-house">
      <img src="images/hufflepuff.jpg" alt="Hufflepuff" />
    </div>
  </div>
</section>

<!-- Parallax Divider Section -->
<section class="parallax-divider bg-middle"></section>


<!-- Must-Haves Carousel -->
<section class="must-haves-section position-relative py-5">
  <div class="must-haves-overlay">
    <div class="container">
      <h2 class="must-haves-title">DISCOVER MAGICAL MUST HAVES</h2>
    <div id="mustHavesCarousel" class="carousel slide carousel-dark" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="robes.php" class="carousel-card"><img src="images/robes.jpg"><span class="carousel-title">Robes</span></a>
            <a href="wands.php" class="carousel-card"><img src="images/wands.jpg"><span class="carousel-title">Wands</span></a>
            <a href="tshirt.php" class="carousel-card"><img src="images/clothes.jpg"><span class="carousel-title">Clothes</span></a>
            <a href="toys.php" class="carousel-card"><img src="images/toys.jpg"><span class="carousel-title">Toys</span></a>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" id="carouselPrev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" id="carouselNext">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
</section>

<!-- End Message -->
<section class="end-message text-white text-center">
  <div class="overlay">
    <div class="container py-5">
      <h2 class="display-3 fw-bold">LET THE MAGIC BEGIN!</h2>
    </div>
  </div>
</section>

<!--footer-->
<footer id="about" class="footer-section text-white py-4">
  <div class="container">
    <div class="row align-items-center text-center text-lg-start">
      <div class="col-lg-4 mb-3 mb-lg-0">
        <p class="mb-3 fw-bold">About Us</p>
        <p class="mb-0">Platform 9 ¾ Shopping was created for every witch, wizard, and curious Muggle who dreams of a life filled with adventure. Inspired by the legendary Hogwarts Express departure point, our shop brings the wonder of the wizarding world directly to your doorstep.</p>
      </div>
      <div class="col-lg-4 mb-3 mb-lg-0 text-center">
        <p class="mb-1 fw-bold">© 2025 Platform 9¾ Shop</p>
        <p class="mb-0">All Rights Reserved.</p>
      </div>
      <div class="col-lg-4 text-lg-end">
        <p class="mb-1 fw-bold">Follow us:</p>
        <a href="#" class="text-white me-2"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
</footer>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

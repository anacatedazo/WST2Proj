<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harry Potter Robes</title>

    <link rel="stylesheet" href="products.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>


</head>
<body>

<?php include 'navbar.php'; ?> <!--nav bar-->

    <div class="mt-5">
        <div class="wands d-flex flex-column text-center align-items-center">
        <h1>Hogwarts House Robes</h1>
        <p>Feel like a true member of your chosen house in these replica Harry Potter Robes, true to those seen in the films. 
Wear the iconic colours and emblems of Gryffindor, Slytherin, Ravenclaw or Hufflepuff with pride!</p>
        </div>
    </div>

    <div class="mt-2 ms-5 d-flex flex-row">

    <div class="options d-inline-block">
        <a href="wands.php">Wands</a><br>
        <hr>
        <a href="robes.php">Robes</a><br>
        <hr>
        <a href="tshirt.php">Shirts&#47;Hoodies</a><br>
        <hr>
        <a href="books.php">Books</a><br>
        <hr>
        <a href="toys.php">Toys</a><br>
        <hr>
        <a href="pins.php">Pins</a><br>
    </div>

    <div class="prod">
        <div class="grid-container">

            <div class="grid-set active" id="grid-set-1">

                <div class="grid-item" data-description="Celebrate your Hogwarts house pride with this replica Gryffindor robe, as seen in the Harry Potter film series. The Gryffindor robe features contrasting scarlet lining, pockets (there's even a hidden pocket for your wand!), and embroidered Gryffindor crest.">
                    <img src="Clothes_image/Robes/Gryffindor-robe.png" alt="">
                    <p>Gryffindor Robe</p>
                </div>
                
                <div class="grid-item" data-description="Celebrate your Hogwarts house pride with this replica Slytherin robe, as seen in the Harry Potter film series. The Personalised Slytherin Robe features contrasting green lining, pockets (there's even a hidden pocket for your wand!), and embroidered Slytherin crest.">
                    <img src="Clothes_image/Robes/Slytherin-robe.png" alt="">
                    <p>Slytherin Robe</p>
                </div>

                <div class="grid-item" data-description="Celebrate your Hogwarts house pride with this replica Personalised Ravenclaw robe, as seen in the Harry Potter film series. The Ravenclaw robe features contrasting blue lining, pockets (there's even a hidden pocket for your wand!), and embroidered Ravenclaw crest.">
                    <img src="Clothes_image/Robes/Ravenclaw-robe.png" alt="">
                    <p>Ravenclaw</p>
                </div>

                <div class="grid-item" data-description="Celebrate your Hogwarts house pride with this replica Personalised Hufflepuff robe, as seen in the Harry Potter film series. The Hufflepuff robe features contrasting yellow lining, pockets (there's even a hidden pocket for your wand!), and embroidered Hufflepuff crest.">
                    <img src=Clothes_image/Robes/Hufflepuff-robe.png" alt="">
                    <p>Hufflepuff Robe</p>
                </div>
            </div>
          <!-- Pagination -->
          <div class="pagination">
            <button onclick="changeSlide(-1)">&#60;</button>
            <button class="page-btn active" onclick="showSlide(1)">1</button>
            <button class="page-btn" onclick="showSlide(2)">2</button>
            <button class="page-btn" onclick="showSlide(3)">3</button>
            <button onclick="changeSlide(1)">&#62;</button>
        </div>


    </div>
    
    <!-- Product Modal -->
    <div id="productModal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" style="background-color: #0D1B2A; color: white; border: 5px solid #541212; border-radius: 0;">
      <div class="modal-header border-0">
        <button type="button" class="btn-close btn-close-white ms-auto" id="modalCloseBtn"></button>
      </div>
      <div class="modal-body d-flex gap-4 px-4 py-3">
        <img id="modalProductImage" src="" alt="Product" class="img-fluid" style="max-width: 300px;" />
        <div>
          <h5 id="modalProductName" style="font-family: 'Inika', serif;"></h5>
          <h6 id="modalProductPrice">2,500.00 PHP</h6>
          <p id="modalProductDescription" style="font-size: 14px;"> </p>

          <div class="d-flex align-items-center mb-3">
            <label class="me-3">Quantity</label>
            <button class="btn btn-sm btn-light me-2" id="decreaseQty">-</button>
            <span id="quantityValue" class="mx-2">1</span>
            <button class="btn btn-sm btn-light ms-2" id="increaseQty">+</button>
          </div>

          <button id="addToCartBtn" class="btn btn-danger w-50" style="background-color: #7B1E1E;">ADD TO CART</button>
          <button id="addToWishlistBtn" class="btn btn-light w-50 mt-2">ADD TO WISHLIST</button>

        </div>
      </div>
    </div>
  </div>
</div>

   <script src="script.js"></script>

</body>
</html>
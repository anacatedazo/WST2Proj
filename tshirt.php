<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Shirts & Hoodies</title>

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
        <h1>T-Shirts & Hoodies</h1>
        <p>Perfect for any Potterhead's wardrobe! Indulge in the spellbinding charm of these t-shirts and hoodies, 
featuring captivating designs inspired by iconic scenes, spells, houses and characters.</p>
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

                <div class="grid-item" data-description="Show off your bold Gryffindor spirit with this maroon t-shirt, featuring a stunning puff-print Gryffindor crest that looks just like embroidery! Made from 100% cotton jersey, it’s as comfortable as it is magical. Details like the embroidered accents on the cuff and back neck and the cotton metallic print tape at the neckline (complete with the school motto!) add an extra touch of wizarding finesse.">
                    <img src="Clothes_image/Shirt/Gryffindor-shirt.png" alt="">
                    <p>Gryffindor T-shirt</p>
                </div>
                
                <div class="grid-item" data-description="Show off your cunning Slytherin spirit with this deep green t-shirt, featuring a striking puff-print Slytherin crest that looks just like embroidery! Made from 100% cotton jersey, it’s as sleek as it is comfortable. Thoughtful details like the embroidered accents on the cuff and back neck, along with the cotton metallic print tape at the neckline (complete with the school motto!), add a touch of wizarding sophistication.">
                    <img src="Clothes_image/Shirt/Slytherin-shirt.png" alt="">
                    <p>Slytherin T-shirt</p>
                </div>

                <div class="grid-item" data-description="Show off your sharp Ravenclaw wit with this deep-blue t-shirt, featuring a stunning puff-print Ravenclaw crest that looks just like embroidery! Made from 100% cotton jersey, it’s as smart as it is comfortable. Thoughtful details like the embroidered accents on the cuff and back neck, paired with the cotton metallic print tape at the neckline (complete with the school motto!), add an extra touch of magical elegance.">
                    <img src="Clothes_image/Shirt/Ravenclaw-shirt.png" alt="">
                    <p>Ravenclaw T-shirt</p>
                </div>

                <div class="grid-item" data-description="Celebrate your loyal Hufflepuff spirit with this classic black t-shirt, featuring a stunning puff-print Hufflepuff crest that looks just like embroidery! Made from 100% cotton jersey, it’s as warm and comfortable as the house it represents. Thoughtful details like the embroidered accents on the cuff and back neck, along with the cotton metallic print tape at the neckline (complete with the school motto!), add a touch of magical charm.  ">
                    <img src="Clothes_image/Shirt/Hufflepuff-shirt.png" alt="">
                    <p>Hufflepuff T-shirt</p>
                </div>

                <div class="grid-item" data-description="Add some magic to your wardrobe with this unisex Gryffindor hooded sweatshirt. The scarlet red hoodie features a yellow lion, the traditional symbol of the Gryffindor house, and is complete with the lion icon and crown printed in the lining of the hood. The house name is screen-printed along the sleeve in yellow. The hoodie also includes a full tunnel pocket in front, a yellow zip and two yellow strings which can be adjusted for a suitable and comfortable fit.">
                    <img src="Clothes_image/Hoodie/Griffyndor-hoodie.png" alt="">
                    <p>Gryffindor Hoodie</p>
                </div>

                <div class="grid-item" data-description="Refresh your wardrobe with this unisex Slytherin fleece hoodie. The emerald green hoodie features a white serpent embroidered into the right-hand side of the chest. The hoodie is complete with the Slytherin house motto ‘Ambition’, ‘Pride’ and ‘Cunning’ printed in white.">
                    <img src="Clothes_image/Hoodie/Slytherin-hoodie.png" alt="">
                    <p>Slytherin Hoodie</p>
                </div>
            </div>

            <div class="grid-set" id="grid-set-2">

                <div class="grid-item" data-description="Add a dash of magic to your wardrobe with this unisex Ravenclaw sweatshirt. The blue hoodie features a black design of a raven, the traditional symbol of the Ravenclaw house, and is complete with the raven icon printed in the lining of the hood.">
                    <img src="Clothes_image/Hoodie/Ravenclaw-hoodie.png" alt="">
                    <p>Ravenclaw Hoodie</p>
                </div>
                
                <div class="grid-item" data-description="Add some Wizarding World magic to your wardrobe with this unisex Hufflepuff sweatshirt. The grey hoodie features a black and yellow badger, the traditional symbol of the Hufflepuff house, and is complete with the badger icon printed in the lining of the hood.">
                    <img src="Clothes_image/Hoodie/Hufflepuff-hoodie.png" alt="">
                    <p>Hufflepuff Hoodie</p>
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
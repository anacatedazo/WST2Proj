<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soft Toys</title>

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
        <h1>Soft Toys</h1>
        <p>Explore our selection of must-have Harry Potter soft toys and create your own magical menagerie with enchanting creatures, including the adorable Pygmy Puff, the mischievous Niffler, Harry Potter&#39;s loyal owl Hedwig, house-elf Dobby and more!</p>
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

                <div class="grid-item" data-description="Take flight with your very own Hippogriff soft toy, Buckbeak. First seen in Harry Potter and the Prisoner of Azkaban during Rubeus Hagrid's Care of Magical Creatures class, Harry forms a close bond with this magical beast. The Hippogriff is half eagle and half horse, and this soft toy version stands at approximately 33cm high. The plush is made from 100% Polyester with a soft and fluffy feel.">
                    <img src="Plush_image/Buckbeak Soft Toy.png" alt="">
                    <p>Buckbeak Soft Toy</p>
                </div>
                
                <div class="grid-item" data-description="Take home your own plush version of Dobby, the loveable House Elf, first seen in Harry Potter and the Chamber of Secrets. This soft toy version of Dobby the House Elf is highly detailed with textured arms, legs, and ears, and has posable arms and legs.">
                    <img src="Plush_image/Dobby Soft Toy.png" alt="">
                    <p>Dobby Soft Toy</p>
                </div>

                <div class="grid-item" data-description="This Fang Boarhound Soft Toy is the perfect addition to your magical menagerie. Fang was one of Rubeus Hagrid's pets who lived in his hut with him and accompanied Hagrid to many places, such as the Forbidden Forest.">
                    <img src="Plush_image/Fang Boarhound Soft Toy.png" alt="">
                    <p>Fang Boarhound Soft Toy</p>
                </div>

                <div class="grid-item" data-description="Add this beautiful recreation of Harry Potter's loyal snowy owl Hedwig to your Harry Potter collection, the perfect gift for any aspiring witch or wizard. Crafted in high quality fabrics this wonderfully soft Hedwig plush puppet includes movable head and, with the touch of a button, chirps with lifelike owl sounds.">
                    <img src="Plush_image/Hedwig Soft Toy.png" alt="">
                    <p>Hedwig Soft Toy</p>
                </div>

                <div class="grid-item" data-description="A magical sentient plant, the Mandrake, or Mandragora, was studied in Professor Pomona Sprout's Herbology class in Harry Potter and the Chamber of Secrets. A highly prized component to spells, the root of the plant resembled a small human, and was dangerous to handle due to the fatal cries it made when pulled from the ground.">
                    <img src="Plush_image/Mandrake Screaming Soft Toy.png" alt="">
                    <p>Mandrake Screaming Soft Toy</p>
                </div>

                <div class="grid-item" data-description="The Hungarian Horntail dragon was first introduced to Harry Potter in the Goblet of Fire, and was considered one of the most dangerous dragon breeds in the world. This cuddly recreation of the ferocious fire-breathing dragon, while retaining much of its original features, is much less terrifying!">
                    <img src="Plush_image/Hungarian Horntail Dragon Plush.png" alt="">
                    <p>Hungarian Horntail Dragon Plush</p>
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
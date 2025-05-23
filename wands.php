<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
        <h1>Wands</h1>
        <p>Explore the exclusive selection of Harry Potter wands at The Wand Shop, featuring bespoke designs, unique replicas and hand-crafted celebratory pieces. 
    Discover treasures inspired by your favourite characters, locations and landmarks — the perfect addition to your collection.</p>
        </div>
    </div>

    <div class="mt-5 ms-5 d-flex flex-row">

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

                <div class="grid-item" data-description="The unique wand is the perfect gift for any aspiring witch or wizard to add to their collection and is available in a sleek, collectible wand box for you to display anywhere in your home. The wand is sculpted from resin and measures at approximately 35.5 cm (14”) in length. Please note, this wand is a collectible item and not a toy">
                    <img src="Wands_image/Harry potters wand.png" alt="">
                    <p>Harry Wand</p>
                </div>
                
                <div class="grid-item" data-description="This new design features a striking lion sculpt proudly set atop the wand, with a gold banner flowing down its length inscribed with Gryffindor House traits: Their daring, nerve, and chivalry set Gryffindors apart. The detailed craftsmanship captures the fearless spirit of Gryffindor’s noble lion, embodying the House’s commitment to facing challenges with boldness and valour.">
                    <img src="Wands_image/GryffindorMascot_TraitsWand.png" alt="">
                    <p>Gryffindor Mascot Traits Wand</p>
                </div>

                <div class="grid-item" data-description="This new design features a badger sculpted proudly at the top, surrounded by a bed of climbing ivy. A gold banner flowing down the length of the wand is inscribed with Hufflepuff house traits: Those patient Hufflepuffs are true and unafraid of toil. The detailed badger represents the steadfast and industrious spirit that Hufflepuff is celebrated for.">
                    <img src="Wands_image/HufflepuffMascot_TraitsWand.png" alt="">
                    <p>Hufflepuff Mascot Traits Wand</p>
                </div>

                <div class="grid-item"  data-description="Designed for those who seek the wisdom and power of ancient magic, this unique wand is the perfect keepsake for collectors and fans alike, whether you're captivated by the secrets of alchemy or simply wish to enhance your collection.">
                    <img src="Wands_image/Stone Wand.png" alt="">
                    <p>Philosophers Stone Wand</p>
                </div>

                <div class="grid-item" data-description="This exquisite new design features a full sculpt of the Ravenclaw animal mascot perched regally atop the wand, stardust falling from its wings. A gold banner flowing down its length proudly displays a descriptor of Ravenclaw house: "Where those of wit and learning, will always find their kind". The detailed craftsmanship captures the essence of Ravenclaw's iconic animal, symbolizing the pursuit of knowledge and intellectual achievement.">
                    <img src="Wands_image/RavenclawMascot_TraitsWand.png" alt="">
                    <p>Ravenclaw Mascot Traits Wand</p>
                </div>

                <div class="grid-item" data-description="This new design showcases a realistic serpent winding its way along the wand, with a flowing silver banner inscribed with text best describing Slytherin house: "Those cunning folk use any means to achieve their ends." The detailed craftsmanship captures the sleek and powerful nature of the serpent, symbolizing the drive and determination that define Salazar Slytherin’s legacy.">
                    <img src="Wands_image/SlytherinMascot_TraitsWand.png" alt="">
                    <p>Slytherin Mascot Traits Wand</p>
                </div>
            </div>

            <div class="grid-set" id="grid-set-2">

                <div class="grid-item" data-description="This wand draws its inspiration from the intricate designs of the Time-Turner, echoing the elegant details of this magical device that bends time itself. With a design reminiscent of the Time-Turner's delicate hourglass and spinning rings, the Time-Turner Wand makes an enchanting gift for those fascinated by the mysteries of this arcane trinket.">
                    <img src="Wands_image/Timeturner_Wand_Box.png" alt="">
                    <p>Time turner Wand Box</p>
                </div>
                
                <div class="grid-item" data-description="This wand is inspired by elements of house-founder, Godric Gryffindor’s sword, known to be “the best duelist of his time”. It is a sublime choice for Gryffindor students seeking a connection with their house history and ancestry, and for those who possess the traits of courage and bravery, like Godric Gryffindor. ">
                    <img src="Wands_image/Wand-SwordofGriffindor.png" alt="">
                    <p>Sword of Griffindor</p>
                </div>

                <div class="grid-item" data-description="This wand is inspired by a Bowtruckle, a favourite beast of famous Hufflepuff, Newt Scamander. The Bowtruckle is mostly known for only inhabiting trees that are wand-worthy, which makes this wand special for wizards who have an affinity for the natural world. ">
                    <img src="Wands_image/Wand-TheBowtruckle.png" alt="">
                    <p>The Bowtruckle</p>
                </div>

                <div class="grid-item" data-description="A design is inspired by elements of Helga Hufflepuff’s cup, with a gold fluted handle and topped by a relief sculpture of a badger, the House mascot. This wand is for Hufflepuff students who cherish the history of their house-founder and always seeks to emulate her kind and fair demeanour. ">
                    <img src="Wands_image/Wand-TheCupofHufflepuff.png" alt="">
                    <p>The Cup of Huffle puff</p>
                </div>

                <div class="grid-item" data-description="This handle of this wand features the skull of the Basilisk, the famed serpent and guardian of The Chamber of Secrets. The skull sits on top a mound of ominous Death Eater masks, indicating its power to kill anyone that looks in its eyes. This wand is for the Slytherin who openly embraces the Dark Arts and is proud to show it. ">
                    <img src="Wands_image/Wand-TheDarkArts.png" alt="">
                    <p> The Dark Arts</p>
                </div>

                <div class="grid-item" data-description="Inspired by the powerful and famed Diadem of the Ravenclaw House is this bespoke Diadem of Ravenclaw Wand. This ornate wand features decorative detailing of the lost Diadem including pristine sapphire-like stones, and unique metalwork on its handle. Created with the Ravenclaw house in mind, this unique wand is designed for a Ravenclaw who finds guidance in her wise words. The wand measures approximately 18 inches long and is complete with a deluxe collector’s box.">
                    <img src="Wands_image/Wand-TheDiademofRavenclaw.png" alt="">
                    <p>The Diadem of Ravenclaw</p>
                </div>
            </div>

            <div class="grid-set" id="grid-set-3">

                <div class="grid-item" data-description="Inspired by the delicate, winged Quidditch ball is this Golden Snitch Wand. The wand features intricate gold detailing of the iconic winged ball and is complete with a metallic gold finish. The unique wand is designed for those always on the move and is the perfect souvenir for those who dream of competing in a Quidditch match, or for Harry Potter fans to add to their collection.">
                    <img src="Wands_image/Wand-TheGoldenSnitch.png" alt="">
                    <p> The Golden Snitch</p>
                </div>
                
                <div class="grid-item" data-description="This new design features a striking lion sculpt proudly set atop the wand, with a gold banner flowing down its length inscribed with Gryffindor House traits. Their daring, nerve, and chivalry set Gryffindors apart. The detailed craftsmanship captures the fearless spirit of Gryffindor’s noble lion, embodying the House’s commitment to facing challenges with boldness and valour.">
                    <img src="Wands_image/Wand-TheGriffindorMascot.png" alt="">
                    <p>The Griffindor Mascot</p>
                </div>

                <div class="grid-item" data-description="A wand inspired by the Slytherin Locket artefact, with an octagonal handle like the eight-sided locket. The wand is embellished with etched runes and includes an emerald-like stone, evocative of the locket's decorative features. A proud Slytherin who seeks artefacts from the House's past will not resist this wand.">
                    <img src="Wands_image/Wand-TheLocketofSlytherin.png" alt="">
                    <p>The Locket of Slytherin</p>
                </div>

                <div class="grid-item" data-description="This wand is inspired by the noble Phoenix, particularly the brave and loyal Fawkes. First seen on screen in Harry Potter and the Chamber of Secrets, Fawkes resides in Albus Dumbledore office as an ever loyal companion to the headmaster. ">
                    <img src="Wands_image/Wand-ThePhoenix.png" alt="">
                    <p>The Phoenix</p>
                </div>

                <div class="grid-item" data-description="Inspired by the House of Rowena Ravenclaw, the Ravenclaw Mascot Wand evokes the animal's likeness, with its wings forming the top of the handle. Symbolic of one of the most intelligent animals in existence, this wand is designed for those with a love of learning. ">
                    <img src="Wands_image/Wand-TheRavenclawMascot.png" alt="">
                    <p> The Ravenclaw Mascot</p>
                </div>

                <div class="grid-item" data-description="This wand is inspired by the Thestral, a creature with a gentle spirit, though with an eerie look and visible only to those who have witnessed death. These statuesque animals pull the carriages which deliver students to the doors of Hogwarts and are also ridden members of Dumbledore's Army in Harry Potter and the Order of the Phoenix. ">
                    <img src="Wands_image/Wand-TheThestral.png" alt="">
                    <p>The Thestral</p>
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
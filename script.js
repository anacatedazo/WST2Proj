//Function for pagination scroll
 let currentSlide = 1;
        const totalSlides = 3;

        function showSlide(slideIndex) {
        const sets = document.querySelectorAll('.grid-set');
        const pageButtons = document.querySelectorAll('.page-btn');
        sets.forEach(set => set.classList.remove('active'));
        pageButtons.forEach(btn => btn.classList.remove('active'));

        if (slideIndex < 1) slideIndex = 1;
        if (slideIndex > totalSlides) slideIndex = totalSlides;

        sets[slideIndex - 1].classList.add('active');
        pageButtons[slideIndex - 1].classList.add('active');
        currentSlide = slideIndex;
        }

        function changeSlide(direction) {
        showSlide(currentSlide + direction);
        }
 
 
 // Function when u click on the product image 
  const modal = new bootstrap.Modal(document.getElementById('productModal'));
  const modalImage = document.getElementById('modalProductImage');
  const modalDescription = document.getElementById('modalProductDescription');
  const modalName = document.getElementById('modalProductName');
  const quantityDisplay = document.getElementById('quantityValue');
  const addToCartBtn = document.getElementById('addToCartBtn');
    const addToWishlistBtn = document.getElementById('addToWishlistBtn');
  const modalProductName = document.getElementById('modalProductName');
  const modalProductImage = document.getElementById('modalProductImage');
  const quantityValue = document.getElementById('quantityValue');

  let currentQuantity = 1;
  
  document.querySelectorAll('.grid-item').forEach(item => {
  item.addEventListener('click', () => {
    const imgSrc = item.querySelector('img').src;
    const name = item.querySelector('p').textContent;
    const description = item.getAttribute('data-description');

    modalImage.src = imgSrc;
    modalName.textContent = name;
    modalDescription.textContent = description || "No description available.";
    currentQuantity = 1;
    quantityDisplay.textContent = currentQuantity;
    modal.show(); 
  });
});

  document.getElementById('modalCloseBtn').addEventListener('click', () => {
  modal.hide();
  });


  document.getElementById('increaseQty').addEventListener('click', () => {
    currentQuantity++;
    quantityDisplay.textContent = currentQuantity;
  });

  document.getElementById('decreaseQty').addEventListener('click', () => {
    if (currentQuantity > 1) {
      currentQuantity--;
      quantityDisplay.textContent = currentQuantity;
    }
  });

  addToCartBtn.addEventListener('click', () => {
    const product = {
      name: modalName.textContent,
      image: modalImage.src,
      quantity: currentQuantity
    };
    
    if (typeof addToCart === "function") {
      addToCart(product);
    } else {
      console.log("Add to cart:", product);
    }
 modal.hide();
});

//Funtion to add the product to the cart
window.addEventListener('DOMContentLoaded', renderCart);

function addToCart(product) {
  let cart = JSON.parse(localStorage.getItem('cart')) || [];

  const existingItem = cart.find(item => item.name === product.name);
  if (existingItem) {
    existingItem.quantity += product.quantity;
  } else {
    cart.push(product);
  }

  localStorage.setItem('cart', JSON.stringify(cart));
  renderCart(); 
}

function updateCartTotals() {
  const rows = document.querySelectorAll('#cart-items-body tr');
  let total = 0;

  rows.forEach(row => {
    const amountCell = row.children[1];
    const amount = parseFloat(amountCell.textContent.replace(' PHP', ''));
    total += amount;
  });

  document.getElementById('items-total').textContent = `${total.toFixed(2)} PHP`;
  const shipping = total > 0 ? 50 : 0;
  document.getElementById('shipping-cost').textContent = `${shipping.toFixed(2)} PHP`;
  document.getElementById('order-total').textContent = `${(total + shipping).toFixed(2)} PHP`;
}


function renderCart() {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  const tbody = document.getElementById('cart-items-body');
  tbody.innerHTML = ''; 

  cart.forEach((product, index) => {
    const row = document.createElement('tr');
    row.innerHTML = `
      <td>
        <img src="${product.image}" alt="${product.name}" width="50"> 
        ${product.name}
      </td>
      <td>${(product.quantity * 100).toFixed(2)} PHP</td>
      <td>${product.quantity}</td>
      <td>
        <button class="remove-btn" data-index="${index}" style="color:red; font-weight:bold; border:none; background:transparent; cursor:pointer;">✖</button>
      </td>
    `;
    tbody.appendChild(row);
  });

  updateCartTotals();

  // Add click listeners to all remove buttons
  document.querySelectorAll('.remove-btn').forEach(button => {
    button.addEventListener('click', (e) => {
      const index = e.target.getAttribute('data-index');
      removeFromCart(index);
    });
  });
}

function removeFromCart(index) {
  let cart = JSON.parse(localStorage.getItem('cart')) || [];
  cart.splice(index, 1); 
  localStorage.setItem('cart', JSON.stringify(cart));
  renderCart(); 
}

//add to wishlist
  addToWishlistBtn.addEventListener('click', () => {
    const product = {
      name: modalProductName.textContent.trim(),
      image: modalProductImage.src,
      quantity: parseInt(quantityValue.textContent)
    };

    let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
    const exists = wishlist.some(item => item.name === product.name);

    if (!exists) {
      wishlist.push(product);
      localStorage.setItem('wishlist', JSON.stringify(wishlist));
      alert(`${product.name} added to wishlist!`);
      renderWishlist();
    } else {
      alert(`${product.name} is already in wishlist.`);
    }
     modal.hide();
  });

  function renderWishlist() {
    const wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
    const wishlistBody = document.getElementById('wishlist-body');
    wishlistBody.innerHTML = '';

    wishlist.forEach((item, index) => {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>
          <div class="d-flex align-items-center gap-2">
            <img src="${item.image}" alt="${item.name}" width="50" height="50" class="rounded" />
            <span>${item.name}</span>
          </div>
        </td>
        <td>${item.quantity}</td>
        <td>
          <i class="fas fa-times text-danger" style="cursor: pointer;" onclick="removeFromWishlist(${index})"></i>
        </td>
      `;
      wishlistBody.appendChild(row);
    });
  }

  window.removeFromWishlist = function(index) {
    let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
    wishlist.splice(index, 1);
    localStorage.setItem('wishlist', JSON.stringify(wishlist));
    renderWishlist();
  };

  renderWishlist(); 


  

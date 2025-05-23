<!-- navbar.php -->
<nav class="navbar navbar-expand-lg custom-navbar navbar-dark sticky-top">
    <div class="container-fluid px-4">
        <a class="navbar-brand d-flex align-items-center me-3" href="frontpage.php">
        <img src="images/logo.jpg" alt="Logo" class="logo-img" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="frontpage.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
        </ul>
        <div class="d-flex align-items-center">
            <form class="d-flex me-3 search-bar" role="search">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
            </form>
            <div class="d-flex align-items-center gap-3">
           <a href="#" data-bs-toggle="modal" data-bs-target="#wishlistModal" class="nav-link">
           <i class="fa fa-heart" style="cursor: pointer; color: #ccc;"></i> </a>
           <a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" class="nav-link"> <i class="fas fa-shopping-cart"></i> </a>

            <a href="#" class="text-white"><i class="fas fa-bell"></i></a>
            <a href="#" class="text-white"><i class="fas fa-user-circle fa-lg"></i></a>
            </div>
        </div>
        </div>
    </div>
    </nav>


<!-- Cart Modal -->
<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="cartModalLabel">Your Shopping Cart</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <div class="cart-container row">
      <div class="cart-items-section col-md-8 mb-3">
            <div class="cart-table bg-light p-3 rounded">
              <table class="table mb-0">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Amount</th>
                    <th>Quantity</th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <tbody id="cart-items-body">
                </tbody>
              </table>
            </div>
          </div>

          <div class="cart-summary-section col-md-4">
            <h5 class="fw-bold mb-3">ORDER SUMMARY</h5>
            <div class="d-flex justify-content-between">
            <span>Item(s) Total</span>
            <span id="items-total">0.00 PHP</span>
          </div>
        <div class="d-flex justify-content-between">
           <span>Shipping</span>
           <span id="shipping-cost">0.00 PHP</span>
        </div>
        <hr />
      <div class="d-flex justify-content-between fw-bold">
         <span>Total:</span>
         <span id="order-total">0.00 PHP</span>
      </div>
            <button class="btn btn-dark w-100 mt-3">CHECKOUT</button>
          </div>
        </div>
      </div> 
    </div>   
  </div>     
</div>  


<!-- Wishlist Modal -->
<div class="modal fade" id="wishlistModal" tabindex="-1" aria-labelledby="wishlistModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="wishlistModalLabel">Your Wishlist</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="wishlist-table bg-light p-3 rounded">
          <table class="table mb-0 align-middle">
            <thead>
              <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Remove</th>
              </tr>
            </thead>
            <tbody id="wishlist-body">
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



</div>

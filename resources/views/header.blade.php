<div class="loader">
      <i class="fas fa-utensils loader-icone"></i>
      <p>Restoran</p>
      <div class="loader-ellipses">
        <span></span>
        <span></span>
        <span></span>
      </div>
</div>
<header>
    <div class="container header my-3 d-none d-lg-flex">
        <div class="logo">
            <a href="/home">
                <i class="fa fa-utensils me-3"></i>
                <h1 class="mb-0">Restoran</h1>
            </a>
        </div>

        <div class="menus">
            <ul class="d-flex mb-0">
                <li class="list-unstyled py-2">
                    <a class="text-decoration-none text-uppercase p-2" href="/home">Home</a>
                </li>
                <li class="list-unstyled py-2">
                    <a class="text-decoration-none text-uppercase p-2" href="/about">About</a>
                </li>
                <li class="list-unstyled py-2">
                    <a class="text-decoration-none text-uppercase p-2" href="/reservation">Reservation</a>
                </li>
                <li class="list-unstyled py-2">
                    <a class="text-decoration-none text-uppercase p-2" href="/menu">Menu</a>
                </li>
                <li class="list-unstyled py-2">
                    <a class="text-decoration-none text-uppercase p-2" href="/contact">Contact</a>
                </li>
            </ul>
        </div>

        <div class="icons" style="display: flex; align-items: center; gap: 8px;">
            <div class="search" id="searchBtn">
                <input type="text" placeholder="Enter foods..." />
                <i class="fa fa-search"></i>
                
            </div>
  
            <a class="text-decoration-none" id="shoppingbutton" href="#">
                <i class="fa fa-shopping-bag me"></i>
            </a>
            @if(Session::has('user'))
                <li class="nav">
                    <a class="nav-link dropdown-toggle" d-flex align-items-center href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user" style="color:white;"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li class="dropdown-item text-center">{{ Session('user')->username }}</li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-center" href="{{ route('logout') }}">Log out</a></li>
                    </ul>
                </li>
            @else
                <a class="sign-in" href="{{ route('register') }}">Sign up /</a>
                <a class="sign-in" href="{{ route('login') }}" >Sign in</a>
            @endif
           
            <!-- <a class="text-decoration-none" href="/signup" style="color: white; font-size: 20px; font-weight: bold;" >Sign up /</a>
            <a class="text-decoration-none" href="/login" style="color: white; font-size: 20px; font-weight: bold;">Sign in</a> -->
        </div>
    </div>
    

    <div class="d-flex justify-content-around py-3 align-items-center d-lg-none">
        <div id="hamburger">
            <i class="fa fa-2x fa-bars me-3 text-white"></i>
        </div>

        <div class="mobile-nav-logo">
            <div class="logo">
                <a href="/home">
                    <i class="fa fa-utensils me-3"></i>
                    <h1 class="mb-0">Restoran</h1>
                </a>
            </div>
        </div>

        <div class="mobile-nav-icons">
            <div class="icons" style="display: flex; align-items: center; gap: 8px;">
                <div class="search" id="searchBtnMobile">
                    <input type="search" placeholder="Enter foods..." />
                    <i class="fa fa-search"></i>
                </div>
                
                <a class="text-decoration-none" id="shoppingbuttonMobile" href="#">
                    <i class="fa fa-shopping-bag"></i>
                </a>
            
                <a class="sign-in" href="/signup">Sign up /</a>
                <a class="sign-in" href="/login" >Sign in</a>
            </div>
        </div>

        <div class="position-fixed w-75 bg-white h-100 top-0 start-0" id="mobile-menu">
            <div id="hamburger-cross" class="d-flex justify-content-end align-items-center py-2">
                <i class="fa fa-2x fa-plus me-3 "></i>
            </div>
            <div class="menus">
                <ul class="d-flex flex-column ps-2 mb-0 mt-4">
                    <li class="list-unstyled py-2">
                        <a class="text-dark text-decoration-none text-uppercase p-2" href="/home">Home</a>
                    </li>
                    <li class="list-unstyled py-2">
                        <a class="text-dark text-decoration-none text-uppercase p-2" href="/about">About</a>
                    </li>
                    <li class="list-unstyled py-2">
                        <a class="text-dark text-decoration-none text-uppercase p-2" href="/reservation">Reservation</a>
                    </li>
                    <li class="list-unstyled py-2">
                        <a class="text-dark text-decoration-none text-uppercase p-2" href="/menu">Menu</a>
                    </li>
                    <li class="list-unstyled py-2">
                        <a class="text-dark text-decoration-none text-uppercase p-2" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="shopping-cart">
  <div class="shopping-cart-header d-flex justify-content-between">
    <h2>Review your Cart</h2>
    <i class="fa fa-close"></i>
  </div>
  <div class="shopping-cart-body">
    <div class="row shopping-cart-item d-flex justify-content-between">
      <div class="col-2 d-flex align-items-center">
        <img src="source/assets/images/product-2a.jpg" alt="">
      </div>
      <div class="col-8">
        <h3>The Cracker Barrel's Country Boy Breakfast</h3>
        <div class="shopping-cart-counter">
          <i class="fa fa-minus"></i>
          <span>1</span>
          <i class="fa fa-plus"></i>
        </div>
      </div>
      <div class="col-2 item-price d-flex align-items-end">
        <p class="mb-0 text-center">$ 25.0</p>
      </div>
    </div>
    <div class="row shopping-cart-item d-flex justify-content-between">
      <div class="col-2 d-flex align-items-center">
        <img src="source/assets/images/product-2b.jpg" alt="">
      </div>
      <div class="col-8">
        <h3>Old Timer's Meat Breakfast</h3>
        <div class="shopping-cart-counter">
          <i class="fa fa-minus"></i>
          <span>1</span>
          <i class="fa fa-plus"></i>
        </div>
      </div>
      <div class="col-2 item-price d-flex align-items-end">
        <p class="mb-0 text-center">$ 12.0</p>
      </div>
    </div>
    <div class="row shopping-cart-item d-flex justify-content-between">
      <div class="col-2 d-flex align-items-center">
        <img src="source/assets/images/product-2c.jpg" alt="">
      </div>
      <div class="col-8">
        <h3>Uncle Herschel's Favorite</h3>
        <div class="shopping-cart-counter">
          <i class="fa fa-minus"></i>
          <span>1</span>
          <i class="fa fa-plus"></i>
        </div>
      </div>
      <div class="col-2 item-price d-flex align-items-end">
        <p class="mb-0 text-center">$ 25.0</p>
      </div>
    </div>
    <div class="row shopping-cart-item d-flex justify-content-between">
      <div class="col-2 d-flex align-items-center">
        <img src="source/assets/images/product-2d.jpg" alt="">
      </div>
      <div class="col-8">
        <h3>Grandpa's Country Fried Breakfast</h3>
        <div class="shopping-cart-counter">
          <i class="fa fa-minus"></i>
          <span>1</span>
          <i class="fa fa-plus"></i>
        </div>
      </div>
      <div class="col-2 item-price d-flex align-items-end">
        <p class="mb-0 text-center">$ 30.0</p>
      </div>
    </div>
  </div>
  <div class="shopping-cart-footer">
    <div class="d-flex justify-content-between px-3 py-2">
      <div>
        <h2 class="mb-0">Subtotal</h2>
        <p class="mb-0">Shipping & taxes calculated at checkout</p>
      </div>
      <div class="d-flex align-items-end">
        <p class="footet-total-price mb-0">$ 92.0</p>
      </div>
    </div>
    <div class="d-flex justify-content-between px-2">
      <div class="footer-checkout">
        <div class="anim-layer"></div>
        <a href="/bookingtable">Reservation</a>
      </div>
      <div class="footer-shopping">
        <div class="anim-layer"></div>
        <a href="/menu">Continue Shopping</a>
      </div>
    </div>
  </div>
</div>
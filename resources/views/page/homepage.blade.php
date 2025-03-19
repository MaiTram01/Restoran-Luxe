@extends('master')
@section('content')
<div class="loader">
  <i class="fas fa-utensils loader-icone"></i>
  <p>Restoran</p>
  <div class="loader-ellipses">
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
<div class="search-bar d-none" id="search-container">
  <div class="close-btn" id="search-close-btn">
    <i class="fa fa-close"></i>
  </div>
  <div class="search-bar-wrapper">
    <input type="search" placeholder="Enter any text here..." />
    <div class="search-button">
      <a href="#"><i class="fa fa-search"></i></a>
    </div>
  </div>
</div>
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
        <a href="#">Checkout</a>
      </div>
      <div class="footer-shopping">
        <div class="anim-layer"></div>
        <a href="#">Continue Shopping</a>
      </div>
    </div>
  </div>
</div>

<main>
  <section class="banner py-5">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-6 banner-content pe-5" data-aos="fade-right" data-aos-delay="3000">
          <h1 class="display-2">Enjoy Our <br> Delicious Meal</h1>
          <p>
            Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
          </p>
          <div class="book-a-table">
            <div class="anim-layer"></div>
            <a href="#">Book a table</a>
          </div>
        </div>
        <div class="col-md-6 banner-img" data-aos="fade-left" data-aos-delay="3000">
          <img class="img img-fluid mt-5 mt-lg-0" src="source/assets/images/banner-img.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="services my-5 py-5">
    <div class="container">
      <div class="row gy-4">
        <div class="col-md-3">
          <div class="cards px-4 py-5" data-aos="fade-right">
            <div class="anim-layer"></div>
            <div class="icon">
              <i class="fa fa-3x fa-user-tie mb-4"></i>
            </div>
            <div class="heading">
              <h5>Master Chefs</h5>
            </div>
            <div class="para">
              <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="cards px-4 py-5" data-aos="fade-down">
            <div class="anim-layer"></div>
            <div class="icon">
              <i class="fa fa-3x fa-utensils mb-4"></i>
            </div>
            <div class="heading">
              <h5>Quality Food</h5>
            </div>
            <div class="para">
              <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="cards px-4 py-5" data-aos="fade-up">
            <div class="anim-layer"></div>
            <div class="icon">
              <i class="fa fa-3x fa-cart-plus mb-4"></i>
            </div>
            <div class="heading">
              <h5>Online Order</h5>
            </div>
            <div class="para">
              <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="cards px-4 py-5" data-aos="fade-left">
            <div class="anim-layer"></div>
            <div class="icon">
              <i class="fa fa-3x fa-headset mb-4"></i>
            </div>
            <div class="heading">
              <h5>24/7 Service</h5>
            </div>
            <div class="para">
              <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-us py-5 my-5">
    <div class="container">
      <div class="row gy-5 g-lg-5 align-items-center">
        <div class="col-lg-6 about-img-box">
          <div class="row g-3">
            <div class="col-6" data-aos="fade-right">
              <img class="img-fluid rounded w-100" src="source/assets/images/about-1.jpg">
            </div>
            <div class="col-6 text-right" data-aos="fade-down">
              <img class="img-fluid rounded w-75" src="source/assets/images/about-2.jpg">
            </div>
            <div class="col-6 text-end" data-aos="fade-right">
              <img class="img-fluid rounded w-75" src="source/assets/images/about-3.jpg">
            </div>
            <div class="col-6 text-end" data-aos="fade-up">
              <img class="img-fluid rounded w-100" src="source/assets/images/about-4.jpg">
            </div>
          </div>
        </div>
        <div class="col-lg-6 about-content" data-aos="fade-left">
          <h5 class="section-title">About Us</h5>
          <h2 class="mb-4 dis">Welcome to <i class="fa fa-utensils  me-2"></i>Restoran</h2>
          <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
          <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
          <div class="row g-4 mb-4 about-extra">
            <div class="col-sm-6">
              <div class="d-flex align-items-center px-3 about-experience">
                <h1 class="flex-shrink-0  mb-0">15</h1>
                <div class="ps-4">
                  <p class="mb-0">Years of</p>
                  <h6 class="text-uppercase mb-0">Experience</h6>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="d-flex align-items-center px-3 about-popular">
                <h1 class="flex-shrink-0  mb-0">50</h1>
                <div class="ps-4">
                  <p class="mb-0">Popular</p>
                  <h6 class="text-uppercase mb-0">Master Chefs</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="book-a-table">
            <div class="anim-layer"></div>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-menu py-5 my-5">
    <div class="container">
      <div class="row" data-aos="fade-right">
        <div class="section-title text-center">
          <h5>Our Menu</h5>
          <h2 class="display-5 fw-bold">Tasty And Good Price</h2>
        </div>
      </div>
      <div class="row  position-relative">
        <div data-aos="fade-left" class="slider slider-indicators-wrapper justify-content-center">
          <div class="slider-indicators">
            <div class="indicators-icon active text-center">
              <i class="fas fa-coffee fa-2x"></i>
            </div>
            <div class="indicators-title text-center">
              <h5>
                Breakfast
              </h5>
            </div>
          </div>
          <div class="slider-indicators">
            <div class="indicators-icon text-center">
              <i class="fas fa-utensils fa-2x"></i>
            </div>
            <div class="indicators-title text-center">
              <h5>
                Lunch
              </h5>
            </div>
          </div>
          <div class="slider-indicators">
            <div class="indicators-icon text-center">
              <i class="fas fa-hamburger fa-2x"></i>
            </div>
            <div class="indicators-title text-center">
              <h5>
                Dinner
              </h5>
            </div>
          </div>
          <div class="slider-indicators">
            <div class="indicators-icon text-center">
              <i class="fas fa-ice-cream fa-2x"></i>
            </div>
            <div class="indicators-title text-center">
              <h5>
                Desserts
              </h5>
            </div>
          </div>
          <div class="slider-indicators">
            <div class="indicators-icon text-center">
              <i class="fas fa-cocktail fa-2x"></i>
            </div>
            <div class="indicators-title text-center">
              <h5>
                Drink
              </h5>
            </div>
          </div>
        </div>
      </div>
      <div id="our-menus" class="slider" data-aos="fade-up">
        <div>
          <div class="row my-5 py-3">
            <div class="col-lg-5">
              <div class="pb-5 pb-lg-0">
                <img width="90%" src="source/assets/images/menu-slider-dessert.png" alt="">
              </div>
            </div>
            <div class="col-lg-7">
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>The Cracker Barrel's Country Boy Breakfast</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    25.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>Uncle Herschel's Favorite</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    45.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>Grandpa's Country Fried Breakfast</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    30.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>Old Timer's Meat Breakfast</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    12.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>Chinese Chicken Bread Spicy Soup</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    12.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="row my-5 py-3 ">
            <div class="col-lg-5">
              <div class="pb-5 pb-lg-0">
                <img width="90%" src="source/assets/images/menu-slider-dinner.png" alt="">
              </div>
            </div>
            <div class="col-lg-7">
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>The Cracker Barrel's Country Boy Breakfast</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    25.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>Uncle Herschel's Favorite</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    45.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>Grandpa's Country Fried Breakfast</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    30.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>Old Timer's Meat Breakfast</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    12.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>Chinese Chicken Bread Spicy Soup</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    12.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="row my-5 py-3 ">
            <div class="col-lg-5">
              <div class="pb-5 pb-lg-0">
                <img width="90%" src="source/assets/images/menu-slider-dessert.png" alt="">
              </div>
            </div>
            <div class="col-lg-7">
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>The Cracker Barrel's Country Boy Breakfast</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    25.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>Uncle Herschel's Favorite</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    45.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>Grandpa's Country Fried Breakfast</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    30.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>Old Timer's Meat Breakfast</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    12.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>Chinese Chicken Bread Spicy Soup</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    12.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="row my-5 py-3 ">
            <div class="col-lg-5">
              <div class="pb-5 pb-lg-0">
                <img width="90%" src="source/assets/images/menu-slider-lunch.png" alt="">
              </div>
            </div>
            <div class="col-lg-7">
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>The Cracker Barrel's Country Boy Breakfast</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    25.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>Uncle Herschel's Favorite</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    45.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>Grandpa's Country Fried Breakfast</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    30.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>Old Timer's Meat Breakfast</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    12.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
              <div class="item-wrapper d-flex justify-content-between">
                <div class="item-left">
                  <h5>Chinese Chicken Bread Spicy Soup</h5>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
                <div class="item-right">
                  <span class="item-price">
                    <span class="price-symbol">$</span>
                    12.0</span>
                  <div class="item-btn">
                    <a href="#">Order</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials py-5 my-5">
    <div class="container py-5">
      <div class="row" data-aos="fade-right">
        <div class="section-title text-center">
          <h5>Testimonial</h5>
          <h2 class="display-5 fw-bold">Our Customer Says</h2>
        </div>
      </div>
      <div class="row">
        <div class="testimonial-slider-wrapper" data-aos="fade-up">
          <div class="slider-content pt-4 pb-4 mx-4">
            <div>
              <div class="testi-content">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto vel ipsa dolore sunt vitae, culpa, dolor reiciendis facilis sed blanditiis repellat incidunt impedit iusto? Odio veniam beatae veritatis adipisci a!</p>
              </div>
              <div class="testi-info">
                <span class="name">Timothy Doe</span>
                <span class="position">Customer</span>
              </div>
            </div>
            <div>
              <div class="testi-content">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto vel ipsa dolore sunt vitae, culpa, dolor reiciendis facilis sed blanditiis repellat incidunt impedit iusto? Odio veniam beatae veritatis adipisci a!</p>
              </div>
              <div class="testi-info">
                <span class="name">Sarah Ruiz</span>
                <span class="position">Director</span>
              </div>
            </div>
            <div>
              <div class="testi-content">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto vel ipsa dolore sunt vitae, culpa, dolor reiciendis facilis sed blanditiis repellat incidunt impedit iusto? Odio veniam beatae veritatis adipisci a!</p>
              </div>
              <div class="testi-info">
                <span class="name">Tracey Lewis</span>
                <span class="position">Designer</span>
              </div>
            </div>
            <div>
              <div class="testi-content">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto vel ipsa dolore sunt vitae, culpa, dolor reiciendis facilis sed blanditiis repellat incidunt impedit iusto? Odio veniam beatae veritatis adipisci a!</p>
              </div>
              <div class="testi-info">
                <span class="name">Jamie Erickson</span>
                <span class="position">Manager</span>
              </div>
            </div>
          </div>
          <div class="slider-nav-wrapper mx-5">
            <div class="slider-nav">
              <div class="slider-nav-img active">
                <img src="source/assets/images/testi-1.jpg" alt="">
              </div>
              <div class="slider-nav-img">
                <img src="source/assets/images/testi-2.jpg" alt="">
              </div>
              <div class="slider-nav-img">
                <img src="source/assets/images/testi-3.jpg" alt="">
              </div>
              <div class="slider-nav-img">
                <img src="source/assets/images/testi-4.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-chefs py-5">
    <div class="container">
      <div class="row" data-aos="fade-right">
        <div class="section-title text-center">
          <h5>Meet Our</h5>
          <h2 class="display-6 fw-bold">Awesome Master Chefs</h2>
        </div>
      </div>

      <div class="row our-chef-slider-wrapper py-5" data-aos="fade-left">
        <div class="col-lg-4">
          <div class="our-chef-slider d-flex flex-column align-items-center gap-4">
            <img width="200px" src="source/assets/images/team-1.png" alt="">
            <div class="chef-slider-content">
              <h5 class="text-center d-block">Teresa Doe</h5>
              <p class="text-center mb-0">Head Chef</p>
              <div class="d-flex justify-content-center">
                <hr class="w-25 my-2">
              </div>
              <ul class="list-unstyled d-flex justify-content-center">
                <li class="mx-2">
                  <a href="https://www.facebook.com" target="_blank" class="text-white">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="https://www.instagram.com" target="_blank" class="text-white">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="https://www.twitter.com" target="_blank" class="text-white">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="https://www.linkedin.com" target="_blank" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="our-chef-slider d-flex flex-column align-items-center gap-4">
            <img width="200px" src="source/assets/images/team-2.png" alt="">
            <div class="chef-slider-content">
              <h5 class="text-center d-block">Teresa Doe</h5>
              <p class="text-center mb-0">Head Chef</p>
              <div class="d-flex justify-content-center">
                <hr class="w-25 my-2">
              </div>
              <ul class="list-unstyled d-flex justify-content-center">
                <li class="mx-2">
                  <a href="https://www.facebook.com" target="_blank" class="text-white">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="https://www.instagram.com" target="_blank" class="text-white">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="https://www.twitter.com" target="_blank" class="text-white">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="https://www.linkedin.com" target="_blank" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="our-chef-slider d-flex flex-column align-items-center gap-4">
            <img width="200px" src="source/assets/images/team-3.png" alt="">
            <div class="chef-slider-content">
              <h5 class="text-center d-block">Teresa Doe</h5>
              <p class="text-center mb-0">Head Chef</p>
              <div class="d-flex justify-content-center">
                <hr class="w-25 my-2">
              </div>
              <ul class="list-unstyled d-flex justify-content-center">
                <li class="mx-2">
                  <a href="https://www.facebook.com" target="_blank" class="text-white">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="https://www.instagram.com" target="_blank" class="text-white">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="https://www.twitter.com" target="_blank" class="text-white">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="https://www.linkedin.com" target="_blank" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="our-chef-slider d-flex flex-column align-items-center gap-4">
            <img width="200px" src="source/assets/images/team-4.png" alt="">
            <div class="chef-slider-content">
              <h5 class="text-center d-block">Teresa Doe</h5>
              <p class="text-center mb-0">Head Chef</p>
              <div class="d-flex justify-content-center">
                <hr class="w-25 my-2">
              </div>
              <ul class="list-unstyled d-flex justify-content-center">
                <li class="mx-2">
                  <a href="https://www.facebook.com" target="_blank" class="text-white">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="https://www.instagram.com" target="_blank" class="text-white">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="https://www.twitter.com" target="_blank" class="text-white">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="https://www.linkedin.com" target="_blank" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="reservation">
    <img class="d-md-none d-lg-block" src="source/assets/images/find-a-table.png" alt="">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 py-5 reservation-content px-5" data-aos="fade-right">
          <div class="reservation-column py-5 px-3">
            <h2 class="text-center text-white display-6 fw-bold">Make A Reservation</h2>
            <p class="text-center text-white">You can call us directly at <span>225-88888</span></p>
            <div class="row mt-5 pt-3">
              <div class="col-12 col-lg-6">
                <div class="input d-flex align-items-center">
                  <i class="fa fa-phone py-2 px-3"></i>
                  <input class="form-control bg-transparent border-0 px-3" type="text" placeholder="Number">
                </div>
              </div>
              <div class="col-12 col-lg-6 mt-4 mt-lg-0">
                <div class="input d-flex align-items-center">
                  <i class="fa fa-person py-2 px-3"></i>
                  <select class="form-select bg-transparent border-0" name="" id="">
                    <option value="">1 Person</option>
                    <option value="">2 Person</option>
                    <option value="">3 Person</option>
                    <option value="">4 Person</option>
                    <option value="">5 Person</option>
                    <option value="">6 Person</option>
                    <option value="">7 Person</option>
                    <option value="">8 Person</option>
                    <option value="">9 Person</option>
                    <option value="">10 Person</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-12 col-lg-6">
                <div class="input d-flex align-items-center">
                  <i class="fa fa-calendar py-2 px-3"></i>
                  <input class="form-control datepicker bg-transparent border-0 px-3" type="date" placeholder="Number">
                </div>
              </div>
              <div class="col-12 col-lg-6 mt-4 mt-lg-0">
                <div class="input d-flex align-items-center">
                  <i class="fa fa-clock py-2 px-3"></i>
                  <select type="text" placeholder="Time" class="form-select bg-transparent border-0">
                    <option>7:00 AM</option>
                    <option>8:00 AM</option>
                    <option>9:00 AM</option>
                    <option>10:00 AM</option>
                    <option>11:00 AM</option>
                    <option>12:00 AM</option>
                    <option>1:00 PM</option>
                    <option>2:00 PM</option>
                    <option>3:00 PM</option>
                    <option>4:00 PM</option>
                    <option>5:00 PM</option>
                    <option>6:00 PM</option>
                    <option>7:00 PM</option>
                    <option>8:00 PM</option>
                    <option>9:00 PM</option>
                    <option>10:00 PM</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center mt-5 pt-3">
              <div class="book-a-table">
                <div class="anim-layer"></div>
                <a href="#">Find Table</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-none d-md-block reservation-bg" data-aos="fade-left"></div>
      </div>
    </div>
  </section>

  <section class="our-services py-5 my-5">
    <div class="container">
      <div class="row">
        <div class="section-title text-center" data-aos="fade-right">
          <h5>Our Service</h5>
          <h2 class="display-6 fw-bold">What We Focus On</h2>
        </div>
      </div>
      <div class="row pt-5">
        <div data-aos="fade-up-right" class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
          <div class="icon-box">
            <i class="fas fa-utensils fa-2x"></i>
            <span class="number">1</span>
          </div>
          <h4>Reservation</h4>
          <p class="text-center">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</p>
        </div>
        <div data-aos="fade-down" class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
          <div class="icon-box">
            <i class="fas fa-wine-glass-alt fa-2x"></i>
            <span class="number">2</span>
          </div>
          <h4>Private Event</h4>
          <p class="text-center">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</p>
        </div>
        <div data-aos="fade-up" class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
          <div class="icon-box">
            <i class="fas fa-laptop-house fa-2x"></i>
            <span class="number">3</span>
          </div>
          <h4>Online Order</h4>
          <p class="text-center">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</p>
        </div>
        <div data-aos="fade-up-left" class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
          <div class="icon-box">
            <i class="fas fa-motorcycle fa-2x"></i>
            <span class="number">4</span>
          </div>
          <h4>Fast Delivery</h4>
          <p class="text-center">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt utote labore et</p>
        </div>
      </div>
    </div>
  </section>

  <section class="our-gallery pt-5">
    <div class="container-fluid pt-5">
      <div class="row">
        <div class="section-title text-center" data-aos="fade-right">
          <h5>Our Gallery</h5>
          <h2 class="text-white display-6 fw-bold">Fooday Hot Dishes</h2>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-md-3 p-0">
          <div data-aos="fade-down-right" class="gallery-image gallery-image-one"></div>
        </div>
        <div class="col-md-6 p-0">
          <div class="row m-0">
            <div class="col-md-8 p-0">
              <div data-aos="fade-down" class="gallery-image-two"></div>
            </div>
            <div class="col-md-4 p-0">
              <div data-aos="fade-down" class="gallery-image-three"></div>
            </div>
          </div>
          <div class="row m-0">
            <div class="col-md-4 p-0">
              <div data-aos="fade-up" class="gallery-image-five"></div>
            </div>
            <div class="col-md-8 p-0">
              <div data-aos="fade-up" class="gallery-image-six"></div>
            </div>
          </div>
        </div>
        <div class="col-md-3 p-0">
          <div data-aos="fade-up-left" class="gallery-image gallery-image-four"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-blog pt-5 my-5">
    <div class="container">
      <div class="row">
        <div class="section-title text-center" data-aos="fade-right">
          <h5>Updated from</h5>
          <h2 class="display-6 fw-bold">Our Featured Blog</h2>
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="card" data-aos="fade-up-right">
            <div class="blog-info d-flex py-3">
              <div class="blog-view px-3">
                <i class="fas fa-eye"></i>
                <span>18</span>
              </div>
              <div class="blog-comment px-3">
                <i class="fas fa-comment"></i>
                <span>18</span>
              </div>
              <div class="blog-author">
                <p class="mb-0 ps-3">Post By Admin</p>
              </div>
            </div>
            <div class="blog-featured-img">
              <img class="w-100" src="source/assets/images/blog-grid-1.jpg" alt="">
            </div>
            <div class="blog-content px-4 pt-5 pb-4 position-relative">
              <div class="blog-date">
                <span class="day">12</span>
                <span class="month">Jun</span>
              </div>
              <h3 class="blog-title">
                <a href="javascript:void(0)">How To Cook The Spicy Chinese Noodle For Cold Weather</a>
              </h3>
              <p class="blog-description">
                Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <div class="blog-readmore text-end">
                <a class="text-black text-decoration-none" href="javascript:void(0)">
                  Read More
                  <i class="fa fa-angle-double-right">
                  </i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="card" data-aos="fade-down">
            <div class="blog-info d-flex py-3">
              <div class="blog-view px-3">
                <i class="fas fa-eye"></i>
                <span>18</span>
              </div>
              <div class="blog-comment px-3">
                <i class="fas fa-comment"></i>
                <span>18</span>
              </div>
              <div class="blog-author">
                <p class="mb-0 ps-3">Post By Admin</p>
              </div>
            </div>
            <div class="blog-featured-img">
              <img class="w-100" src="source/assets/images/blog-grid-1-1.jpg" alt="">
            </div>
            <div class="blog-content px-4 pt-5 pb-4 position-relative">
              <div class="blog-date">
                <span class="day">12</span>
                <span class="month">Jun</span>
              </div>
              <h3 class="blog-title">
                <a href="javascript:void(0)">How To Cook The Spicy Chinese Noodle For Cold Weather</a>
              </h3>
              <p class="blog-description">
                Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <div class="blog-readmore text-end">
                <a class="text-black text-decoration-none" href="javascript:void(0)">
                  Read More
                  <i class="fa fa-angle-double-right">
                  </i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="card" data-aos="fade-up-left">
            <div class="blog-info d-flex py-3">
              <div class="blog-view px-3">
                <i class="fas fa-eye"></i>
                <span>18</span>
              </div>
              <div class="blog-comment px-3">
                <i class="fas fa-comment"></i>
                <span>18</span>
              </div>
              <div class="blog-author">
                <p class="mb-0 ps-3">Post By Admin</p>
              </div>
            </div>
            <div class="blog-featured-img">
              <img class="w-100" src="source/assets/images/blog-grid-1-2.jpg" alt="">
            </div>
            <div class="blog-content px-4 pt-5 pb-4 position-relative">
              <div class="blog-date">
                <span class="day">12</span>
                <span class="month">Jun</span>
              </div>
              <h3 class="blog-title">
                <a href="javascript:void(0)">How To Cook The Spicy Chinese Noodle For Cold Weather</a>
              </h3>
              <p class="blog-description">
                Lorem ipsum dolor sit amet, consectetur, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <div class="blog-readmore text-end">
                <a class="text-black text-decoration-none" href="javascript:void(0)">
                  Read More
                  <i class="fa fa-angle-double-right">
                  </i>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="row pt-5">

      </div>
    </div>
  </section>
</main>
@endsection
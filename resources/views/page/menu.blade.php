@extends('master')
@section('content')
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

<main class="menu-page">
  <section class="page-banner d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="banner-content">
          <h2 class="text-white display-3 text-center" data-aos="fade-right" data-aos-delay="3000">Menu</h2>
          <div class="divider" data-aos="fade-up-right" data-aos-delay="3000">
            <div class="dot mb-2"></div>
          </div>
          <p class="text-center">The various dishes are waiting for your coming to enjoy its</p>
        </div>
      </div>
    </div>
  </section>

  <section class="our-menu pt-5 my-5">
    <div class="container">
      <div class="row" data-aos="fade-right">
        <h2 class="text-center display-6 fw-bold">Breakfast Time</h2>
        <div class="menu-line d-flex justify-content-center align-items-center">
          <span></span>
        </div>
      </div>
      <div class="row  position-relative" data-aos="fade-left">
        <div class="slider slider-indicators-wrapper justify-content-center">
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

  <section class="chef-choise pt-3 pb-5">
    <div class="container py-5">
      <div class="row" data-aos="fade-right">
        <div class="section-title text-center pb-5">
          <h5>Chef Choice</h5>
          <h2 class="text-white display-6 fw-bold">Daily Special</h2>
        </div>
      </div>
      <div class="row">
        <div class="d-none d-lg-block col-lg-6" data-aos="fade-right">
          <img class="img-fluid" src="source/assets/images/product-decorate.jpg" alt="">
        </div>
        <div class="col-12 col-lg-6" data-aos="fade-left">
          <div class="chef-choise-slider ps-3">
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left d-flex flex-row">
                <img class="rounded-circle" src="source/assets/images/product-2a.jpg" width="70px" height="70px" alt="">
                <div class="ps-3">
                  <h5 class="text-white">The Cracker Barrel's Country Boy Breakfast</h5>
                  <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">$</span>
                  25.0</span>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left d-flex flex-row">
                <img class="rounded-circle" src="source/assets/images/product-2b.jpg" width="70px" height="70px" alt="">
                <div class="ps-3">
                  <h5 class="text-white">Uncle Herschel's Favorite</h5>
                  <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">$</span>
                  45.0</span>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left d-flex flex-row">
                <img class="rounded-circle" src="source/assets/images/product-2c.jpg" width="70px" height="70px" alt="">
                <div class="ps-3">
                  <h5 class="text-white">Grandpa's Country Fried Breakfast</h5>
                  <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">$</span>
                  30.0</span>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left d-flex flex-row">
                <img class="rounded-circle" src="source/assets/images/product-2d.jpg" width="70px" height="70px" alt="">
                <div class="ps-3">
                  <h5 class="text-white">Old Timer's Meat Breakfast</h5>
                  <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                </div>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">$</span>
                  12.0</span>
              </div>
            </div>
          </div>
          <div class="chef-choise-icons ps-4 mt-3 mt-lg-0">
            <i class="fa fa-chevron-up" aria-hidden="true"></i>
            <i class="fa fa-chevron-down ms-4" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="lunch-time my-5 pb-0 pb-lg-5">
    <div class="container">
      <div class="row" data-aos="fade-right">
        <h2 class="text-center display-6 fw-bold">Lunch Time</h2>
        <div class="menu-line d-flex justify-content-center align-items-center">
          <span></span>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6" data-aos="fade-right">
          <div class="item-wrapper d-flex justify-content-between">
            <div class="item-left">
              <h5>The Cracker Barrel's Country Boy Breakfast</h5>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
            </div>
            <div class="item-right">
              <span class="item-price">
                <span class="price-symbol">$</span>
                25.0</span>
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
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <div class="item-wrapper d-flex justify-content-between">
            <div class="item-left">
              <h5>The Cracker Barrel's Country Boy Breakfast</h5>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
            </div>
            <div class="item-right">
              <span class="item-price">
                <span class="price-symbol">$</span>
                25.0</span>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
@extends('master')
@section('content')
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
                  <img width="90%" src="source/assets/images/menu-slider-breakfast.png" alt="">
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
                      <a href="#">Add to cart</a>
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
                      <a href="#">Add to cart</a>
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
                      <a href="#">Add to cart</a>
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
                      <a href="#">Add to cart</a>
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
                      <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
                    <img width="90%" src="source/assets/images/menu-slider-drink.png" alt="">
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
                        <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
                        <a href="#">Add to cart</a>
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
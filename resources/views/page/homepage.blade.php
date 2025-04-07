@extends('master')
@section('content')
<main>
  <section class="banner py-5">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-6 banner-content pe-5" data-aos="fade-right" data-aos-delay="3000">
          <h1 class="display-2">Enjoy Our <br> Delicious Meal</h1>
          <p>
             Savor mouthwatering dishes made with the finest ingredients, crafted to delight your taste buds.
          </p>
          <div class="book-a-table">
            <div class="anim-layer"></div>
            <a href="/infobooking">Book a table</a>
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
              <p> A place where culinary excellence meets creativity, offering exquisite dishes with a touch of elegance and sophistication.</p>
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
              <p>Serving delicious, carefully crafted dishes made from the finest ingredients for an exceptional dining experience.</p>
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
              <p> Effortlessly order your favorite meals anytime, and enjoy fast, convenient delivery straight to your doorstep.</p>
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
              <p>Always here for you, offering delicious meals anytime, day or night, for your convenience and satisfaction.</p>
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
          <p class="mb-4">Indulge in a remarkable dining experience where every dish is crafted with passion and the finest ingredients. Our inviting atmosphere, attentive service, and diverse menu promise to satisfy your cravings.</p>
          <p class="mb-4"> Whether for a casual meal or special occasion, we ensure every visit is unforgettable.</p>
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
          <div class="row position-relative">
                <div data-aos="fade-left" class="slider slider-indicators-wrapper justify-content-center">
                @if(isset($categories))
                   @foreach($categories as $category)
                        <div class="slider-indicators category-link" data-name="{{ $category->category_name }}" data-category="{{ $category->id }}"">
                            <div class="indicators-icon text-center">
                                <i class="{{ $category->icon ?? 'fas fa-question' }} fa-2x"></i> 
                            </div>
                            <div class="indicators-title text-center">
                                <h5 class="category-link" data-category="{{ $category->id }}" data-name="{{ $category->category_name }}" data-image="{{ $category->image }}">{{ $category->category_name }}</h5>
                            </div>
                        </div>
                    @endforeach
                @endif
                </div>
          </div>
          <div id="our-menus" class="slider" data-aos="fade-up"></div>
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
                <p>Discover why our guests love us—delicious meals, exceptional service, and a welcoming atmosphere. We’re proud to create memorable experiences that keep customers coming back.</p>
              </div>
              <div class="testi-info">
                <span class="name">Timothy Doe</span>
                <span class="position">Customer</span>
              </div>
            </div>
            <div>
              <div class="testi-content">
                <p>Hear what our satisfied guests have to say about our mouthwatering dishes, friendly service, and cozy ambiance. We strive to make every visit special, ensuring you leave with a smile and come back for more.</p>
              </div>
              <div class="testi-info">
                <span class="name">Sarah Ruiz</span>
                <span class="position">Director</span>
              </div>
            </div>
            <div>
              <div class="testi-content">
                <p> From the first bite to the last, our guests rave about our flavorful meals, attentive staff, and inviting environment. We focus on creating an exceptional dining experience that keeps our customers returning time and time again.</p>
              </div>
              <div class="testi-info">
                <span class="name">Tracey Lewis</span>
                <span class="position">Designer</span>
              </div>
            </div>
            <div>
              <div class="testi-content">
                <p>Our guests can't stop talking about the perfect blend of taste, service, and atmosphere. With every visit, we aim to exceed expectations, making each dining experience unforgettable and leaving our customers eager to return.</p>
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
              <h5 class="text-center d-block">Dragon Chef</h5>
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
              <h5 class="text-center d-block">Esaft</h5>
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
              <h5 class="text-center d-block">Bearn</h5>
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
            <p class="text-center text-white">You can call us directly at <span>+84 458 729 580</span></p>
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
          <p class="text-center">Book your table easily and enjoy a memorable dining experience with us.</p>
        </div>
        <div data-aos="fade-down" class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
          <div class="icon-box">
            <i class="fas fa-wine-glass-alt fa-2x"></i>
            <span class="number">2</span>
          </div>
          <h4>Private Event</h4>
          <p class="text-center">Host your special occasion with us, featuring exclusive service.</p>
        </div>
        <div data-aos="fade-up" class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
          <div class="icon-box">
            <i class="fas fa-laptop-house fa-2x"></i>
            <span class="number">3</span>
          </div>
          <h4>Online Order</h4>
          <p class="text-center">Enjoy your favorite dishes delivered fast and conveniently, right to your door.</p>
        </div>
        <div data-aos="fade-up-left" class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
          <div class="icon-box">
            <i class="fas fa-motorcycle fa-2x"></i>
            <span class="number">4</span>
          </div>
          <h4>Fast Delivery</h4>
          <p class="text-center">Get your meals quickly and fresh, delivered straight to your door in no time.</p>
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
              Cook spicy Chinese noodles with chili, garlic, ginger, soy sauce, and broth for warmth in cold weather.
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
                <a href="javascript:void(0)">How to Cook Spicy Lobster Noodles for Cold Weather</a>
              </h3>
              <p class="blog-description">
              Enjoy spicy lobster noodles with rich broth, perfect for warming up on chilly days and satisfying cravings.
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
                <a href="javascript:void(0)">How to Cook Spicy Rice Cake Soup for Cold Weather</a>
              </h3>
              <p class="blog-description">
                  Warm up with spicy rice cake soup, a comforting dish packed with flavor and perfect for cold weather.
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
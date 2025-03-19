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

<main class="about-page">
    <section class="page-banner d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h2 class="text-white display-6 fw-bold text-center" data-aos="fade-right" data-aos-delay="3000">About Us</h2>
                    <div class="divider" data-aos="fade-up-right" data-aos-delay="3000">
                        <div class="dot mb-2"></div>
                    </div>
                    <p class="text-white mb-0 text-center" data-aos="fade-left" data-aos-delay="3000">
                        We bring to you the unforgetable moment with our delicious
                        dishes
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-story mt-5 pt-5">
        <div class="container">
            <div class="row" data-aos="fade-right">
                <h2 class="text-center display-6 fw-bold">
                    Restoran Glory Story
                </h2>
                <div
                    class="about-line d-flex justify-content-center align-items-center">
                    <span></span>
                </div>
            </div>
            <div class="row">
                <div class="story-timeline">
                    <div class="story-indicators my-4">
                        <div class="row">
                            <div data-aos="fade-right" class="image-box col-lg-2 px-0">
                                <img
                                    class="w-100"
                                    src="source/assets/images/timeline-1.jpg"
                                    alt="" />
                                <div class="image-box-inner">
                                    <p class="mb-0">2000</p>
                                </div>
                            </div>
                            <div data-aos="fade-down" class="image-box col-lg-2 px-0">
                                <img
                                    class="w-100"
                                    src="source/assets/images/timeline-2.jpg"
                                    alt="" />
                                <div class="image-box-inner">
                                    <p class="mb-0">2002</p>
                                </div>

                            </div>
                            <div data-aos="fade-up" class="image-box col-lg-2 px-0">
                                <img
                                    class="w-100"
                                    src="source/assets/images/timeline-3.jpg"
                                    alt="" />
                                <div class="image-box-inner">
                                    <p class="mb-0">2004</p>
                                </div>
                            </div>
                            <div data-aos="fade-down" class="image-box col-lg-2 px-0">
                                <img
                                    class="w-100"
                                    src="source/assets/images/timeline-4.jpg"
                                    alt="" />
                                <div class="image-box-inner">
                                    <p class="mb-0">2008</p>
                                </div>

                            </div>
                            <div data-aos="fade-up" class="image-box col-lg-2 px-0">
                                <img
                                    class="w-100"
                                    src="source/assets/images/timeline-5.jpg"
                                    alt="" />
                                <div class="image-box-inner">
                                    <p class="mb-0">2012</p>
                                </div>

                            </div>
                            <div data-aos="fade-left" class="image-box col-lg-2 px-0">
                                <img
                                    class="w-100"
                                    src="source/assets/images/timeline-6.jpg"
                                    alt="" />
                                <div class="image-box-inner">
                                    <p class="mb-0">2016</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="story-content py-5 my-4" data-aos="fade-right">
                        <div>
                            <p class="text-center"><strong>16.10.2000:</strong>The Begin of Fooday Restaurents</p>
                            <p class="text-center">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosrud lorem exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
                            </p>
                            <p class="text-center">
                                Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                            </p>
                        </div>
                        <div>
                            <p class="text-center"><strong>16.10.2000:</strong>The Begin of Fooday Restaurents</p>
                            <p class="text-center">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosrud lorem exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
                            </p>
                            <p class="text-center">
                                Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                            </p>
                        </div>
                        <div>
                            <p class="text-center"><strong>16.10.2000:</strong>The Begin of Fooday Restaurents</p>
                            <p class="text-center">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosrud lorem exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
                            </p>
                            <p class="text-center">
                                Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                            </p>
                        </div>
                        <div>
                            <p class="text-center"><strong>16.10.2000:</strong>The Begin of Fooday Restaurents</p>
                            <p class="text-center">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosrud lorem exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
                            </p>
                            <p class="text-center">
                                Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                            </p>
                        </div>
                        <div>
                            <p class="text-center"><strong>16.10.2000:</strong>The Begin of Fooday Restaurents</p>
                            <p class="text-center">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosrud lorem exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
                            </p>
                            <p class="text-center">
                                Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                            </p>
                        </div>
                        <div>
                            <p class="text-center"><strong>16.10.2000:</strong>The Begin of Fooday Restaurents</p>
                            <p class="text-center">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosrud lorem exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.
                            </p>
                            <p class="text-center">
                                Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonials py-2 my-2 mt-lg-4 pt-lg-4 mb-lg-0 pb-lg-0">
        <div class="container my-2 py-2 mt-lg-4 pt-lg-4 mb-lg-0 pb-lg-0">
            <div class="row">
                <div class="col-lg-4 d-none d-lg-block">
                    <img src="source/assets/images/ab_team_01.png" alt="" data-aos="fade-right">
                </div>
                <div class="col-12 col-lg-8">
                    <div class="testimonial-slider-wrapper">
                        <div class="slider-content pt-5 pb-4 mx-4" data-aos="fade-down-left">
                            <div>
                                <div class="testi-content">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto vel ipsa dolore sunt vitae, culpa, dolor reiciendis facilis sed blanditiis repellat incidunt impedit iusto? Odio veniam beatae veritatis adipisci a!</p>
                                </div>
                                <div class="d-flex justify-content-center mb-3">
                                    <img src="source/assets/images/testi-signal.png" alt="">
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
                                <div class="d-flex justify-content-center mb-3">
                                    <img src="source/assets/images/testi-signal.png" alt="">
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
                                <div class="d-flex justify-content-center mb-3">
                                    <img src="source/assets/images/testi-signal.png" alt="">
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
                                <div class="d-flex justify-content-center mb-3">
                                    <img src="source/assets/images/testi-signal.png" alt="">
                                </div>
                                <div class="testi-info">
                                    <span class="name">Jamie Erickson</span>
                                    <span class="position">Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="slider-nav-wrapper mx-5" data-aos="fade-up-right">
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
        </div>
    </section>

    <section class="our-special my-5 py-5">
        <div class="container">
            <div class="row" data-aos="fade-right">
                <h2 class="text-center display-6 fw-bold">
                    Our Special
                </h2>
                <div class="about-line d-flex justify-content-center align-items-center">
                    <span></span>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="special-card" data-aos="fade-right">
                        <div class="box-inner">
                            <div class="box-wrapper px-4">
                                <h2 class="pb-2">FRESH MENU</h2>
                                <p class="pb-4">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                <div class="book-a-table">
                                    <div class="anim-layer"></div>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="box-showcase pb-5">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img class="img-fluid" src="source/assets/images/feature-box-bg.jpg" alt="">
                                    <h2 class="text-center">FRESH MENU</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="special-card" data-aos="flip-right">
                        <div class="box-inner">
                            <div class="box-wrapper px-4">
                                <h2 class="pb-2">VARIOUS DRINK</h2>
                                <p class="pb-4">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                <div class="book-a-table">
                                    <div class="anim-layer"></div>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="box-showcase pb-5">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img class="img-fluid" src="source/assets/images/feature-box-bg-2.jpg" alt="">
                                    <h2 class="text-center">VARIOUS DRINK</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="special-card" data-aos="fade-left">
                        <div class="box-inner">
                            <div class="box-wrapper px-4">
                                <h2 class="pb-2">EXCLUSIVE DISHES</h2>
                                <p class="pb-4">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                <div class="book-a-table">
                                    <div class="anim-layer"></div>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="box-showcase pb-5">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <img class="img-fluid" src="source/assets/images/feature-box-bg-3.jpg" alt="">
                                    <h2 class="text-center">EXCLUSIVE DISHES</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-partner my-5">
        <div class="container partner-slider py-5" data-aos="fade-up-left">
            <div class="d-flex justify-content-center">
                <img class="img-fluid" src="source/assets/images/partner-01.png" alt="">
            </div>
            <div class="d-flex justify-content-center">
                <img class="img-fluid" src="source/assets/images/partner-02.png" alt="">
            </div>
            <div class="d-flex justify-content-center">
                <img class="img-fluid" src="source/assets/images/partner-03.png" alt="">
            </div>
            <div class="d-flex justify-content-center">
                <img class="img-fluid" src="source/assets/images/partner-04.png" alt="">
            </div>
            <div class="d-flex justify-content-center">
                <img class="img-fluid" src="source/assets/images/partner-01.png" alt="">
            </div>
            <div class="d-flex justify-content-center">
                <img class="img-fluid" src="source/assets/images/partner-02.png" alt="">
            </div>
            <div class="d-flex justify-content-center">
                <img class="img-fluid" src="source/assets/images/partner-03.png" alt="">
            </div>
        </div>
    </section>

    <section class="counter my-5">
        <img data-aos="fade-right" class="counter-after" src="source/assets/images/vegetable_01.png" alt="">
        <img data-aos="fade-right" class="counter-before" src="source/assets/images/vegetable_02.png" alt="">
        <div class="container pt-4 pb-5" data-aos="fade-up-right">
            <div class="row py-5">
                <div class="col-lg-3">
                    <div class="counter-box d-flex flex-column align-items-center">
                        <div class="counter-info pb-3">
                            <span class="number">103</span>
                            <span class="heading">/dishes</span>
                        </div>
                        <div class="counter-avatar pt-4">
                            <img src="source/assets/images/counter-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="counter-box d-flex flex-column align-items-center">
                        <div class="counter-info pb-3">
                            <span class="number">2389</span>
                            <span class="heading">/customers</span>
                        </div>
                        <div class="counter-avatar pt-4">
                            <img src="source/assets/images/counter-2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="counter-box d-flex flex-column align-items-center">
                        <div class="counter-info pb-3">
                            <span class="number">20</span>
                            <span class="heading">/awards</span>
                        </div>
                        <div class="counter-avatar pt-4">
                            <img src="source/assets/images/counter-3.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="counter-box d-flex flex-column align-items-center">
                        <div class="counter-info pb-3">
                            <span class="number">2589</span>
                            <span class="heading">/working hours</span>
                        </div>
                        <div class="counter-avatar pt-4">
                            <img src="source/assets/images/counter-4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="reservation-form my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 data-aos="fade-right" class="text-center display-6 fw-bold">Make Reservation</h2>
                    <div data-aos="fade-right" class="reservation-line d-flex justify-content-center align-items-center">
                        <span></span>
                    </div>
                    <form action="" class="position-relative">
                        <p class="text-center" data-aos="fade-up-right">We willing to help you make the reservation online to save your time and money or you can call us directly through the customer service hotline: 225-88888</p>
                        <div class="row mt-5">
                            <div class="col-md-6" data-aos="fade-right">
                                <div class="input-group">
                                    <div class="icon-wrapper d-flex align-items-center position-relative">
                                        <i class="fa fa-user py-2 px-3"></i>
                                    </div>
                                    <input class="form-control bg-transparent border-0 px-3" type="text" placeholder="Username">
                                </div>
                                <div class="input-group">
                                    <div class="icon-wrapper d-flex align-items-center position-relative">
                                        <i class="fa fa-phone py-2 px-3"></i>
                                    </div>
                                    <input class="form-control bg-transparent border-0 px-3" type="text" placeholder="Phone">
                                </div>
                                <div class="input-group">
                                    <div class="icon-wrapper d-flex align-items-center position-relative">
                                        <i class="fa fa-calendar py-2 px-3"></i>
                                    </div>
                                    <input class="form-control bg-transparent border-0 px-3" type="date" placeholder="Date">
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-left">
                                <div class="input-group">
                                    <div class="icon-wrapper d-flex align-items-center position-relative">
                                        <i class="fa fa-envelope py-2 px-3"></i>
                                    </div>
                                    <input class="form-control bg-transparent border-0 px-3" type="email" placeholder="Email">
                                </div>
                                <div class="input-group">
                                    <div class="icon-wrapper d-flex align-items-center position-relative">
                                        <i class="fa fa-person py-2 px-3"></i>
                                    </div>
                                    <select class="form-select bg-transparent border-0 ps-3" name="" id="">
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
                                <div class="input-group">
                                    <div class="icon-wrapper d-flex align-items-center position-relative">
                                        <i class="fa fa-clock py-2 px-3"></i>
                                    </div>
                                    <select type="text" placeholder="Time" class="ps-3 form-select bg-transparent border-0">
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
                        <div class="text-center" data-aos="fade-up-left">
                            <div class="book-a-table contact-button">
                                <div class="anim-layer"></div>
                                <a href="#">Book Table</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
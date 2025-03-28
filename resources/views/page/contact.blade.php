@extends('master')
@section('content')
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

<main class="contact-page">
    <section class="page-banner d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h2 class="text-white display-3 text-center" data-aos="fade-right" data-aos-delay="3000">Contact Us</h2>
                    <div class="divider" data-aos="fade-up-right" data-aos-delay="3000">
                        <div class="dot mb-2"></div>
                    </div>
                    <p class="text-white mb-0 text-center" data-aos="fade-left" data-aos-delay="3000">Let us know if you have any concern about our menu, service or other information you want to have</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form">
                        <h2 class="mb-5 position-relative display-6 fw-bold" data-aos="fade-right">Get In Touch</h2>
                        <form action="" data-aos="fade-right">
                            <div class="input-group">
                                <div class="icon-wrapper d-flex align-items-center position-relative">
                                    <i class="fa fa-user py-2 px-3"></i>
                                </div>
                                <input class="form-control bg-transparent border-0 px-3" type="text" placeholder="Username">
                            </div>
                            <div class="input-group">
                                <div class="icon-wrapper d-flex align-items-center position-relative">
                                    <i class="fa fa-envelope py-2 px-3"></i>
                                </div>
                                <input class="form-control bg-transparent border-0 px-3" type="email" placeholder="Email">
                            </div>
                            <div class="input-group">
                                <div class="icon-wrapper d-flex align-items-center position-relative">
                                    <i class="fa fa-phone py-2 px-3"></i>
                                </div>
                                <input class="form-control bg-transparent border-0 px-3" type="text" placeholder="Phone">
                            </div>
                            <div class="input-group">
                                <textarea class="form-control bg-transparent border-0 px-3" name="" id="" placeholder="Message"></textarea>
                            </div>

                            <div class="book-a-table contact-button">
                                <div class="anim-layer"></div>
                                <a href="#">Send</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h2 class="mb-5 mt-5 mt-lg-0 position-relative display-6 fw-bold" data-aos="fade-right">Contact Info</h2>
                        <div class="d-flex flex-column px-0 justify-content-between" data-aos="fade-left">
                            <div class="contact-info-box d-flex align-items-center pe-2 py-3">
                                <div class="contact-icon-box">
                                    <i class="fa-solid fa-location-dot border-bottom pb-2"></i>
                                </div>
                                <div class="ps-3">
                                    <p class="mb-0">
                                        <b>Restaurent 1</b> <br>
                                        157 White Oak Drive Kansas City
                                    </p>
                                </div>
                            </div>
                            <div class="contact-info-box d-flex align-items-center pe-2 py-3">
                                <div class="contact-icon-box">
                                    <i class="fa-solid fa-location-dot border-bottom pb-2"></i>
                                </div>
                                <div class="ps-3">
                                    <p class="mb-0">
                                        <b>Restaurent 2</b> <br>
                                        158 White Oak Drive Kansas City
                                    </p>
                                </div>
                            </div>
                            <div class="contact-info-box d-flex align-items-center pe-2 py-3">
                                <div class="contact-icon-box">
                                    <i class="fa-solid fa-phone border-bottom pb-2"></i>
                                </div>
                                <div class="ps-3">
                                    <p class="mb-0">
                                        <b>Phone Number</b> <br>
                                        (012) 978 645 312
                                    </p>
                                </div>
                            </div>
                            <div class="contact-info-box d-flex align-items-center pe-2 py-3">
                                <div class="contact-icon-box">
                                    <i class="fa-solid fa-envelope border-bottom pb-2"></i>
                                </div>
                                <div class="ps-3">
                                    <p class="mb-0">
                                        <b>Mail</b> <br>
                                        hello@fooday.com <br>
                                        contact@fooday.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <section class="map pb-0 pb-lg-5 ">
        <div class="container pb-5" data-aos="fade-right">
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7236.375239953878!2d67.08098637770993!3d24.92567760000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f60a0781265%3A0x2befaba123014ab1!2sSMIT%20Gulshan%20Campus!5e0!3m2!1sen!2s!4v1724775738916!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</main>
@endsection
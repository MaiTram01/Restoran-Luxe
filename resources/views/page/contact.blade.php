@extends('Layouts.Client.master')
@section('content')
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
                                        99 To Hien Thanh
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
                                        158 Ngo Quyen
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6448.114355621216!2d108.23593345071295!3d16.06176687094333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177ed575157d%3A0xa54585cda5d67ac7!2zOTkgVMO0IEhp4bq_biBUaMOgbmgsIFBoxrDhu5tjIE3hu7ksIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaWV0bmFt!5e0!3m2!1sen!2sus!4v1743414341195!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</main>
@endsection
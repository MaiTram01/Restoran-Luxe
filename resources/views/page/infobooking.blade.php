@extends('master')
@section('content')
    <section class="page-banner d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h2 class="text-white display-3 text-center" data-aos="fade-right" data-aos-delay="3000">Confirm booking</h2>
                    <div class="divider" data-aos="fade-up-right" data-aos-delay="3000">
                        <div class="dot mb-2"></div>
                    </div>
                    <p class="text-white mb-0 text-center" data-aos="fade-left" data-aos-delay="3000">
                        Just a few clicks to complete your reservation and save time!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5 w-50">
        <!-- Reservation Info -->
        <div class="card mb-3">
            <div class="card-header bg-light">
                <strong>Reservation Information</strong>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-4">Customer Name:</div>
                    <div class="col-8">Ka Phu Dong</div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">Phone Number:</div>
                    <div class="col-8">0865787333</div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">Expected Time:</div>
                    <div class="col-8">02/06/2023 (8 - 10 AM)</div>
                </div>
                <div class="row">
                    <div class="col-4">Location:</div>
                    <div class="col-8">Branch 1 - 113 Tran Phu, Vinh City</div>
                </div>
            </div>
        </div>
     
        <div class="confirm-booking contact-button d-flex justify-content-center">
            <button type="button" class="btn w-100 " onclick="handleBooking()">
                CONFIRM BOOKING
            </button>
        </div>
    </div>
@endsection


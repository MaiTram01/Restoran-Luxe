@extends('Layouts.Client.master')
@section('content')
    <section class="page-banner d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="banner-content">
                        <h2 class="text-white display-3 text-center" data-aos="fade-right" data-aos-delay="3000">Booking payment</h2>
                        <div class="divider" data-aos="fade-up-right" data-aos-delay="3000">
                            <div class="dot mb-2"></div>
                        </div>
                        <p class="text-white mb-0 text-center" data-aos="fade-left" data-aos-delay="3000">Just a few click to make the reservation online for saving your time and money</p>
                    </div>
                </div>
            </div>
        </section>
        
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10 d-flex gap-4">
                <!-- Left Column: Order Info -->
                <div class="card shadow-sm w-40">
                    <div class="card-header bg-primary text-white">
                        <strong>Order Information</strong>
                    </div>
                    <div class="card-body">
                        <p><strong>Amount to Pay:</strong> 425,000 <sup>VNĐ</sup></p>
                        <p><strong>Order Value:</strong> 425,000 <sup>VNĐ</sup></p>
                        <p><strong>Transaction Fee:</strong> 0 <sup>VNĐ</sup></p>
                        <p><strong>Order Code:</strong> 139</p>
                        <p><strong>Provider:</strong> VNPAY - TryItNow</p>
                    </div>
                </div>

                <!-- Right Column: Payment Form -->
                <div class="card shadow-sm flex-fill">
                    <div class="card-header bg-light d-flex justify-content-between align-items-center">
                        <div>
                            <span class="fs-5" style="color: #ed6b2c; font-weight: 600;">Pay via NCB Bank</span>
                            <small class="text-muted ms-2">Domestic Card</small>
                        </div>
                        <!-- Countdown (Optional) -->
                        <div class="text-danger small">
                            Transaction ends in: <span id="countdown">15:00</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="card_number" class="form-label">Card Number</label>
                                <input type="text" id="card_number" class="form-control" value="**** **** **** 2198">
                            </div>

                            <div class="mb-3">
                                <label for="card_holder" class="form-label">Cardholder Name</label>
                                <input type="text" id="card_holder" class="form-control" value="Ka Phu Dong">
                            </div>

                            <div class="mb-3">
                                <label for="issue_date" class="form-label">Issue Date</label>
                                <input type="text" id="issue_date" class="form-control" placeholder="MM/YY">
                            </div>

                            <div class="mb-3">
                                <label for="promo_code" class="form-label">Promo Code</label>
                                <input type="text" id="promo_code" class="form-control" placeholder="Optional">
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <button type="button" class="btn btn-secondary px-4">Cancel Payment</button>
                                <button type="submit" class="btn text-white px-4" style="background-color: #ed6b2c;">Continue</button>
                            </div>
                        </form>
                        <div class="mt-3">
                            <a href="#" class="text-primary small">Terms of Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

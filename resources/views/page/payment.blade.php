@extends('master')

@section('content')
<section class="page-banner d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="banner-content">
                <h2 class="text-white display-3 text-center" data-aos="fade-right" data-aos-delay="3000">Payment</h2>
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

<div class="container my-5">
    <a href="/bookingtable" class="btn btn-light mb-3">← Back</a>
    <h4 class="text-center mb-4">ADVANCE PAYMENT FOR RESERVATION</h4>

    <div class="row">
        <!-- LEFT: Reservation Info + Menu -->
        <div class="col-md-8">
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

            <!-- Pre-ordered Menu -->
            <div class="card">
                <div class="card-header bg-light">
                    <strong>Pre-Ordered Menu</strong>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="order-menu-title">No.</th>
                                <th class="order-menu-title">Dish</th>
                                <th class="order-menu-title">Price</th>
                                <th class="order-menu-title">Quantity</th>
                                <th class="order-menu-title">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <img src="https://via.placeholder.com/50" class="me-2" alt="food">
                                    Grilled Shrimp with Chili Salt
                                </td>
                                <td>85,000 ₫</td>
                                <td>5</td>
                                <td>425,000 ₫</td>
                            </tr>
                            <tr class="fw-bold">
                                <td colspan="3" class="text-end">Total</td>
                                <td>5</td>
                                <td>425,000 ₫</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- RIGHT: Payment -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-light">
                    <strong>PAYMENT</strong>
                </div>
                <div class="card-body">
                    <p><strong>Subtotal:</strong> 425,000 ₫</p>
                    <p><strong>Discount:</strong> 0 ₫</p>
                    <p><strong class="text-danger">Total (VAT included): 425,000 ₫</strong></p>

                    <form action="#" method="POST">
                        @csrf
                        <p class="mb-2"><strong>Payment Method:</strong></p>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="payment_method" value="store" id="pay-store">
                            <label class="form-check-label" for="pay-store">Pay at Restaurant</label>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="payment_method" value="vnpay" id="pay-vnpay">
                            <label class="form-check-label" for="pay-vnpay">Pay via VNPAY Wallet</label>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="radio" name="payment_method" value="bank" id="pay-bank">
                            <label class="form-check-label" for="pay-bank">Bank Transfer</label>
                        </div>

                        <!-- Only show this if VNPAY is selected -->
                        <div id="payment-type-options" style="display: none;">
                            <p class="mb-2"><strong>Payment Type:</strong></p>

                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="payment_type" value="full" checked>
                                <label class="form-check-label">Full Payment</label>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="radio" name="payment_type" value="partial">
                                <label class="form-check-label">Partial Deposit</label>
                            </div>
                        </div>

                        <a href="/bookingpayment" class="btn w-100">PAY NOW</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


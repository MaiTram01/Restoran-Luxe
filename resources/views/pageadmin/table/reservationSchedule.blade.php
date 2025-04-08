@extends('Layouts.Admin.master')
@section('content')
<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="pagetitle">
                    <nav>
                        <ol class="breadcrumb" style="justify-content: space-between;">
                            <h4 class="breadcrumb-item active">Table Reservations</h4>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body" style="padding: 1rem;">
                                <div class="d-flex align-items-start">
                                    <div class="nav flex-column nav-pills w-100" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">

                                        <button class="nav-link btn-tabs text-start active" id="v-pills-all-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-all" type="button"
                                            role="tab" aria-controls="v-pills-all" aria-selected="true">
                                            <i class="bi bi-calendar me-2"></i>
                                            All
                                        </button>
                                        <button class="nav-link btn-tabs outdate text-start" id="v-pills-outdate-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-outdate" type="button"
                                            role="tab" aria-controls="v-pills-outdate" aria-selected="true">
                                            <i class="bi bi-calendar me-2"></i>
                                            Overdue
                                        </button>
                                        <button class="nav-link btn-tabs text-start" id="v-pills-today-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-today" type="button"
                                            role="tab" aria-controls="v-pills-today" aria-selected="true">
                                            <i class="bi bi-calendar me-2"></i>
                                            Today
                                        </button>
                                        <button class="nav-link btn-tabs text-start" id="v-pills-zzz-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-zzz" type="button"
                                            role="tab" aria-controls="v-pills-zzz" aria-selected="true">
                                            <i class="bi bi-calendar me-2"></i>
                                            08/04/2025
                                        </button>
                                        <button class="nav-link btn-tabs text-start" id="v-pills-xxx-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-xxx" type="button"
                                            role="tab" aria-controls="v-pills-xxx" aria-selected="true">
                                            <i class="bi bi-calendar me-2"></i>
                                            09/04/2025
                                        </button>
                                        <button class="nav-link btn-tabs text-start" id="v-pills-ccc-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-ccc" type="button"
                                            role="tab" aria-controls="v-pills-ccc" aria-selected="true">
                                            <i class="bi bi-calendar me-2"></i>
                                            10/04/2025
                                        </button>
                                        <button class="nav-link btn-tabs text-start" id="v-pills-vvv-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-vvv" type="button"
                                            role="tab" aria-controls="v-pills-vvv" aria-selected="true">
                                            <i class="bi bi-calendar me-2"></i>
                                            11/04/2025
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body" style="padding: 1rem;">
                                <div class="d-flex justify-content-start">
                                    <a style="color: #fff;" class="btn btn-primary mb-3" href="/admin/booking/create">
                                        <i class="bi bi-plus-circle"></i>
                                        <span>Create Reservation</span>
                                    </a>
                                </div>
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade active show" id="v-pills-all" role="tabpanel"
                                        aria-labelledby="v-pills-all-tab">
                                        <div class="row">
                                            <div class="col col-lg-4 col-6 mb-4" id="booking-wrap-1" data-aos="zoom-in" data-aos-delay="100">
                                                <div style="border-radius: 0.5rem;" class="cursor-pointer p-0 d-flex flex-column align-items-center form-setting">
                                                    <p class="booking-customer p-3 m-0 w-100">Ho Anh Hoa - 0865787333</p>
                                                    <div class="border-top-line w-100 d-flex">
                                                        <div class="fs-5 fw-bold d-flex align-items-center flex-grow-1 border-right-line">
                                                            <p class="text-center m-0 fw-bold flex-grow-1 fs-4">Table 6</p>
                                                        </div>
                                                        <div class="d-flex flex-column flex-grow-1">
                                                            <div class="d-flex py-3">
                                                                <p class="m-0 flex-grow-1"><i class="me-1 bi bi-alarm-fill"></i> 18:30</p>
                                                                <p class="m-0 flex-grow-1"><i class="me-1 bi bi-people-fill"></i> 3</p>
                                                            </div>
                                                            <div>
                                                                <p class="m-0 py-3 border-top-line"><i class="me-1 bi bi-currency-exchange"></i> 660,000 đ</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="filter d-flex w-100 booking-form-btn py-2 align-items-center">
                                                        <a data-bs-toggle="dropdown" aria-expanded="false" class="flex-grow-1 fs-3"><i class="bi bi-three-dots"></i></a>
                                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-fill"></i> Assign Table</a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-cup-hot-fill"></i> Select Items</a></li>
                                                            <li><a class="dropdown-item text-danger js-show-modal" data-IdBooking="1" href="#"><i class="bi bi-x-circle-fill"></i> Cancel Booking</a></li>
                                                        </ul>
                                                        <a href="#" class="m-0 flex-grow-1">Customer Receive Table</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col col-lg-4 col-6 mb-4" id="booking-wrap-2" data-aos="zoom-in" data-aos-delay="100">
                                                <div style="border-radius: 0.5rem;" class="cursor-pointer p-0 d-flex flex-column align-items-center form-setting">
                                                    <p class="booking-customer p-3 m-0 w-100">Nguyen Van A - 0912345678</p>
                                                    <div class="border-top-line w-100 d-flex">
                                                        <div class="fs-5 fw-bold d-flex align-items-center flex-grow-1 border-right-line">
                                                            <p class="text-center m-0 fw-bold flex-grow-1 fs-4">Table 10</p>
                                                        </div>
                                                        <div class="d-flex flex-column flex-grow-1">
                                                            <div class="d-flex py-3">
                                                                <p class="m-0 flex-grow-1"><i class="me-1 bi bi-alarm-fill"></i> 20:13</p>
                                                                <p class="m-0 flex-grow-1"><i class="me-1 bi bi-people-fill"></i> 5</p>
                                                            </div>
                                                            <div>
                                                                <p class="m-0 py-3 border-top-line"><i class="me-1 bi bi-currency-exchange"></i> 1,200,000 đ</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="filter d-flex w-100 booking-form-btn py-2 align-items-center">
                                                        <a data-bs-toggle="dropdown" aria-expanded="false" class="flex-grow-1 fs-3"><i class="bi bi-three-dots"></i></a>
                                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-fill"></i> Assign Table</a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-cup-hot-fill"></i> Select Items</a></li>
                                                            <li><a class="dropdown-item text-danger js-show-modal" data-IdBooking="2" href="#"><i class="bi bi-x-circle-fill"></i> Cancel Booking</a></li>
                                                        </ul>
                                                        <a href="#" class="m-0 flex-grow-1">Customer Receive Table</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col col-lg-4 col-6 mb-4" id="booking-wrap-3" data-aos="zoom-in" data-aos-delay="100">
                                                <div style="border-radius: 0.5rem;" class="cursor-pointer p-0 d-flex flex-column align-items-center form-setting">
                                                    <p class="booking-customer p-3 m-0 w-100">Pham Thi B - 0987654321</p>
                                                    <div class="border-top-line w-100 d-flex">
                                                        <div class="fs-5 fw-bold d-flex align-items-center flex-grow-1 border-right-line">
                                                            <p class="text-center m-0 fw-bold flex-grow-1 fs-4">Table 1</p>
                                                        </div>
                                                        <div class="d-flex flex-column flex-grow-1">
                                                            <div class="d-flex py-3">
                                                                <p class="m-0 flex-grow-1"><i class="me-1 bi bi-alarm-fill"></i> 19:00</p>
                                                                <p class="m-0 flex-grow-1"><i class="me-1 bi bi-people-fill"></i> 2</p>
                                                            </div>
                                                            <div>
                                                                <p class="m-0 py-3 border-top-line"><i class="me-1 bi bi-currency-exchange"></i> 500,000 đ</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="filter d-flex w-100 booking-form-btn py-2 align-items-center">
                                                        <a data-bs-toggle="dropdown" aria-expanded="false" class="flex-grow-1 fs-3"><i class="bi bi-three-dots"></i></a>
                                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-fill"></i> Assign Table</a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-cup-hot-fill"></i> Select Items</a></li>
                                                            <li><a class="dropdown-item text-danger js-show-modal" data-IdBooking="3" href="#"><i class="bi bi-x-circle-fill"></i> Cancel Booking</a></li>
                                                        </ul>
                                                        <a href="#" class="m-0 flex-grow-1">Customer Receive Table</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="v-pills-outdate" role="tabpanel" aria-labelledby="v-pills-outdate-tab">
                                        <div class="row">
                                            <div class="col col-lg-4 col-6 mb-4" id="booking-wrap-4" data-aos="zoom-in" data-aos-delay="100">
                                                <div style="border-radius: 0.5rem;" class="cursor-pointer p-0 d-flex flex-column align-items-center form-setting">
                                                    <p class="booking-customer p-3 m-0 w-100">Le Van C - 0123456789</p>
                                                    <div class="border-top-line w-100 d-flex">
                                                        <div class="fs-5 fw-bold d-flex align-items-center flex-grow-1 border-right-line">
                                                            <p class="text-center m-0 fw-bold flex-grow-1 fs-4">Table 5</p>
                                                        </div>
                                                        <div class="d-flex flex-column flex-grow-1">
                                                            <div class="d-flex py-3">
                                                                <p class="m-0 flex-grow-1"><i class="me-1 bi bi-alarm-fill"></i> 17:00</p>
                                                                <p class="m-0 flex-grow-1"><i class="me-1 bi bi-people-fill"></i> 4</p>
                                                            </div>
                                                            <div>
                                                                <p class="m-0 py-3 border-top-line"><i class="me-1 bi bi-currency-exchange"></i> 750,000 đ</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="filter d-flex w-100 booking-form-btn py-2 align-items-center">
                                                        <a data-bs-toggle="dropdown" aria-expanded="false" class="flex-grow-1 fs-3"><i class="bi bi-three-dots"></i></a>
                                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-geo-fill"></i> Assign Table</a></li>
                                                            <li><a class="dropdown-item" href="#"><i class="bi bi-cup-hot-fill"></i> Select Items</a></li>
                                                            <li><a class="dropdown-item text-danger js-show-modal" data-IdBooking="4" href="#"><i class="bi bi-x-circle-fill"></i> Cancel Booking</a></li>
                                                        </ul>
                                                        <a href="#" class="m-0 flex-grow-1">Customer Receive Table</a>
                                                    </div>
                                                    {{-- Confirm Booking Cancellation --}}
                                                    <div class="row wrap-modal1 js-modal">
                                                        <div class="overlay-modal1 js-hide-modal" style="opacity: 0.5;"></div>
                                                        <div class="d-flex container col-lg-5 col-xl-5" style="max-width: 95%; align-items: center;">
                                                            <div class="bg0 p-lr-15-lg how-pos3-parent" style="padding: 32px; box-shadow: 0px 0px 4px rgb(0 0 0 / 22%); border-radius: 10px; background-color: #fff; width: 100%;">
                                                                <div class="text-center mb-3 fs-4">Cancel Booking</div>
                                                                <div class="row">
                                                                    <div class="col-lg-12 mb-3">
                                                                        <label class="form-label fw-bolder">Reason for Cancellation</label>
                                                                        <div class="col-sm-10">
                                                                            <div class="form-check mt-3">
                                                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                                                                                <label class="form-check-label" for="gridRadios1">
                                                                                    Customer requested cancellation
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check mt-3">
                                                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                                                <label class="form-check-label" for="gridRadios2">
                                                                                    No tables available
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check mt-3">
                                                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                                                                                <label class="form-check-label" for="gridRadios3">
                                                                                    Other reasons
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 mb-4">
                                                                        <div class="input-group has-validation">
                                                                            <textarea style="" type="text" name="Note" class="form-control" id="Note" rows="4" placeholder="Enter cancellation reason"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="mt-3">
                                                                    <div class="col-sm-12 d-flex" style="padding: 0; justify-content: flex-end;">
                                                                        <a class="btn btn-light js-hide-modal" style="border-radius: 50px; min-width: 100px; border: 1px solid #3333;">
                                                                            <i class="bi bi-arrow-left-circle"></i>
                                                                            Close
                                                                        </a>

                                                                        <button type="submit" id="delete-confirm" class="btn btn-danger" style="border-radius: 50px; min-width: 100px; margin-left: 16px;">
                                                                            Confirm
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
</main>
<script>
        $("#delete-confirm").click(function() {
            event.preventDefault();

            let IdBooking = $(".show-del").attr("data-IdBooking");
            $.ajax({
                url: "/admin/booking/delete/" + IdBooking,
                method: 'GET',
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                success: function(response) {
                    const bookingWrap = $(`#booking-wrap-${IdBooking}`)
                    if (bookingWrap) {
                        bookingWrap.remove();
                    }
                    showSuccessNotification('rgba(0, 200, 81, 0.85)', response.success);

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    showSuccessNotification('rgba(255, 0, 0, 0.7)', 'Thất bại');
                    backToTop();
                }
            });

            $('.js-modal').removeClass('show-modal');
            $('.show-del').removeClass('show-del');
        });
    </script>
@endsection
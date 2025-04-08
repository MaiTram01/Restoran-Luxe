@extends('Layouts.Admin.master')
@section('content')
<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-12" style="margin: 0 auto;">
                <div class="pagetitle">
                    <nav>
                        <ol class="breadcrumb" style="justify-content: space-between;">
                            <h4 class="breadcrumb-item active">Current Orders</h4>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" style="padding: 1rem;">
                                <div class="d-flex justify-content-start">
                                    <a style="color: #fff;" class="btn btn-primary mb-3" href="/admin/orders/create">
                                        <i class="bi bi-plus-circle"></i>
                                        <span>Create New Order</span>
                                    </a>
                                </div>
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade active show" id="v-pills-xxx" role="tabpanel"
                                        aria-labelledby="v-pills-xxx-tab">
                                        <div class="row">
                                            <div class="col col-lg-4 col-md-4 mb-4 check-item-order" id="order-wrap-1" data-aos="zoom-in" data-aos-delay="100">
                                                <div style="border-radius: 0.5rem;"
                                                    class="cursor-pointer position-relative p-0 d-flex flex-column align-items-center form-setting">
                                                    <div class="d-flex booking-customer border-bottom-line p-3 w-100 justify-content-between">
                                                        <p class="m-0">
                                                            Main Hall
                                                        </p>
                                                        <p class="m-0">
                                                            <i class="bi bi-people-fill"></i>
                                                            3
                                                        </p>
                                                    </div>

                                                    <div class="border-top-line w-100 d-fl">
                                                        <div class="d-flex flex-column flex-grow-1">
                                                            <div class="d-flex py-2 px-3">
                                                                <h3 class="text-center m-0 fw-bold flex-grow-1 py-2">
                                                                    Table 2
                                                                </h3>
                                                            </div>
                                                            <div class="d-flex w-100 justify-content-between border-top-line px-3">
                                                                <div class="m-0 py-3 d-flex align-items-center">
                                                                    <i class="fs-5 pe-1 bi bi-stopwatch-fill"></i>
                                                                    <p class="m-0 p-0 time-current" data-timein="71:55:41">
                                                                        71:55:41 </p>
                                                                </div>
                                                                <div class="m-0 py-3 d-flex align-items-center">
                                                                    <i class="fs-5 pe-1 bi bi-coin"></i>
                                                                    305,000 ₫
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="filter d-flex w-100 booking-form-btn align-items-center border-top-line">
                                                        <a data-bs-toggle="dropdown" aria-expanded="false"
                                                            class="flex-grow-1 fs-3 py-1 border-right-line icon-payment">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                            <li>
                                                                <a class="dropdown-item text-success" href="#">
                                                                    <i class="bi bi-clipboard2-check-fill"></i>
                                                                    Select Items
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <i class="bi bi-arrow-clockwise"></i>
                                                                    Transfer Table
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item text-danger js-show-modal2" data-idorder="1">
                                                                    <i class="bi bi-clipboard2-x-fill"></i>
                                                                    Cancel Order
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <a class="m-0 py-3 flex-grow-1 btn-payment js-show-modalxxx" data-idorder="1">Pay</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col col-lg-4 col-md-4 mb-4 check-item-order" id="order-wrap-2" data-aos="zoom-in" data-aos-delay="100">
                                                <div style="border-radius: 0.5rem;"
                                                    class="cursor-pointer position-relative p-0 d-flex flex-column align-items-center form-setting">
                                                    <div class="d-flex booking-customer border-bottom-line p-3 w-100 justify-content-between">
                                                        <p class="m-0">
                                                            Main Hall
                                                        </p>
                                                        <p class="m-0">
                                                            <i class="bi bi-people-fill"></i>
                                                            2
                                                        </p>
                                                    </div>

                                                    <div class="border-top-line w-100 d-fl">
                                                        <div class="d-flex flex-column flex-grow-1">
                                                            <div class="d-flex py-2 px-3">
                                                                <h3 class="text-center m-0 fw-bold flex-grow-1 py-2">
                                                                    Table 5
                                                                </h3>
                                                            </div>
                                                            <div class="d-flex w-100 justify-content-between border-top-line px-3">
                                                                <div class="m-0 py-3 d-flex align-items-center">
                                                                    <i class="fs-5 pe-1 bi bi-stopwatch-fill"></i>
                                                                    <p class="m-0 p-0 time-current" data-timein="91:26:39">
                                                                        91:26:39 </p>
                                                                </div>
                                                                <div class="m-0 py-3 d-flex align-items-center">
                                                                    <i class="fs-5 pe-1 bi bi-coin"></i>
                                                                    1,800,000 ₫
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="filter d-flex w-100 booking-form-btn align-items-center border-top-line">
                                                        <a data-bs-toggle="dropdown" aria-expanded="false"
                                                            class="flex-grow-1 fs-3 py-1 border-right-line icon-payment">
                                                            <i class="bi bi-three-dots"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                            <li>
                                                                <a class="dropdown-item text-success" href="#">
                                                                    <i class="bi bi-clipboard2-check-fill"></i>
                                                                    Select Items
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="#">
                                                                    <i class="bi bi-arrow-clockwise"></i>
                                                                    Transfer Table
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item text-danger js-show-modal2" data-idorder="2">
                                                                    <i class="bi bi-clipboard2-x-fill"></i>
                                                                    Cancel Order
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <a class="m-0 py-3 flex-grow-1 btn-payment js-show-modalxxx" data-idorder="2">Pay</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="box-order-empty col-lg-6 mx-auto mt-5 d-none">
                                                <div class="w-100 mx-auto text-center">
                                                    <img class="w-70 text-center"
                                                        src="{{ asset('files/images/iconSystem/filter-booking-null.svg') }}"
                                                        alt="No Customers">
                                                </div>
                                                <p class="mt-3 w-100 text-center fs-6 text-spacing-2">No invoices available</p>
                                            </div>
                                            {{-- Confirm Print Invoice --}}
                                            <div class="row wrap-modal1 js-modal3">
                                                <div class="overlay-modal1 js-hide-modal3" style="opacity: 0.5;"></div>
                                                <div class="d-flex container col-lg-4 col-xl-4"
                                                    style="max-width: 95%; align-items: center;">
                                                    <div class="bg0 p-lr-15-lg how-pos3-parent"
                                                        style="padding: 32px; box-shadow: 0px 0px 4px rgb(0 0 0 / 22%); border-radius: 10px; background-color: #fff; width: 100%;">
                                                        <div class="text-center mb-3 fs-4">Notification</div>
                                                        <div class="row">
                                                            <div class="col-lg-12 mb-3 fs-5">
                                                                The order has been paid
                                                            </div>
                                                        </div>

                                                        <div class="mt-2 d-flex">
                                                            <div class="col-sm-6 d-flex"
                                                                style="padding: 0; justify-content: flex-end;">
                                                                <a class="btn btn-light delete-confirm w-100 p-3 me-1 js-hide-modal3">
                                                                    <i class="bi bi-x-lg"></i>
                                                                    Close
                                                                </a>
                                                            </div>
                                                            <div class="col-sm-6 d-flex"
                                                                style="padding: 0; justify-content: flex-end;">
                                                                <a id="print_order"
                                                                    class="btn btn-success delete-confirm w-100 p-3 ms-1">
                                                                    <i class="bi bi-printer"></i>
                                                                    Print Invoice
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Confirm Cancel Order --}}
                                            <div class="row wrap-modal1 js-modal2">
                                                <div class="overlay-modal1 js-hide-modal2" style="opacity: 0.5;"></div>
                                                <div class="d-flex container col-lg-5 col-xl-5"
                                                    style="max-width: 95%; align-items: center;">
                                                    <div class="bg0 p-lr-15-lg how-pos3-parent"
                                                        style="padding: 32px; box-shadow: 0px 0px 4px rgb(0 0 0 / 22%); border-radius: 10px; background-color: #fff; width: 100%;">
                                                        <div class="text-center mb-3 fs-4">Cancel Order</div>
                                                        <div class="row">
                                                            <div class="col-lg-12 mb-3">
                                                                <label class="form-label fw-bolder">Reason for Cancellation</label>
                                                                <div class="col-sm-10">
                                                                    <div class="form-check mt-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="CancellationReason" id="gridRadios1"
                                                                            value="Customer requests cancellation" checked>
                                                                        <label class="form-check-label"
                                                                            for="gridRadios1">
                                                                            Customer requests cancellation
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check mt-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="CancellationReason" id="gridRadios2"
                                                                            value="No Table Available">
                                                                        <label class="form-check-label"
                                                                            for="gridRadios2">
                                                                            No Table Available
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check mt-3">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="CancellationReason" id="gridRadios3"
                                                                            value="">
                                                                        <label class="form-check-label"
                                                                            for="gridRadios3">
                                                                            Other Reason
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 mb-4">
                                                                <div class="input-group has-validation">
                                                                    <textarea style="" type="text" name="Content" id="Content" class="form-control" id="Note"
                                                                        rows="4" placeholder="Enter cancellation reason"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-3">
                                                            <div class="col-sm-12 d-flex"
                                                                style="padding: 0; justify-content: flex-end;">
                                                                <a class="btn btn-light js-hide-modal2"
                                                                    style="border-radius: 50px; min-width: 100px; border: 1px solid #3333;">
                                                                    <i class="bi bi-arrow-left-circle"></i>
                                                                    Close
                                                                </a>

                                                                <button type="submit" id="delete-confirm"
                                                                    class="btn btn-danger"
                                                                    style="border-radius: 50px; min-width: 100px; margin-left: 16px;">
                                                                    Confirm
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Payment --}}
                                            <div class="row wrap-modal1 js-modal">
                                                <div class="overlay-modal1 js-hide-modal" style="opacity: 0.5;"></div>
                                                <div class="d-flex container col-lg-6 col-xl-5"
                                                    style="max-width: 95%; align-items: center;">
                                                    <div class="bg0 p-lr-15-lg how-pos3-parent position-relative"
                                                        style="padding: 32px; box-shadow: 0px 0px 4px rgb(0 0 0 / 22%); border-radius: 10px; background-color: #fff; width: 100%;">
                                                        <div class="text-center mb-4 fs-5 fw-bold"
                                                            id="info-area-table">
                                                            Payment</div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div
                                                                    class="col-sm-12 d-flex align-items-center form-input-payment mb-3">
                                                                    <label class="col-lg-4 flex-grow-1 p-3 ps-4"
                                                                        for="TotalAmount">Amount Due</label>
                                                                    <p class="col-lg-8 flex-grow-1 p-2 px-3 m-0 fw-bold fs-5 text-center"
                                                                        id="TotalAmount"></p>
                                                                    <input type="hidden" value=""
                                                                        name="TotalAmount">
                                                                </div>

                                                                <div
                                                                    class="col-sm-12 d-flex align-items-center form-input-payment mb-3">
                                                                    <label class="col-lg-4 flex-grow-1 p-3 ps-4"
                                                                        for="CustomerPaying">Customer Payment</label>
                                                                    <input
                                                                        class="col-lg-8 flex-grow-1 p-2 px-3 m-0 text-primary fs-5 text-center"
                                                                        type="text" value="" maxlength="10"
                                                                        name="CustomerPaying" id="CustomerPaying">
                                                                </div>

                                                                <div
                                                                    class="col-sm-12 d-flex align-items-center form-input-payment mb-3">
                                                                    <label class="col-lg-4 flex-grow-1 p-3 ps-4"
                                                                        for="ChangeAmount" id="text-ChangeAmount">Change
                                                                        Amount</label>
                                                                    <p class="col-lg-8 flex-grow-1 p-2 px-3 m-0 fw-bold fs-5 text-center"
                                                                        id="ChangeAmount"></p>
                                                                    <input type="hidden" value=""
                                                                        id="ChangeAmount" name="ChangeAmount">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a class="btn btn-light btn-round js-hide-modal position-absolute">
                                                            <i class="bi bi-x-lg"></i>
                                                        </a>

                                                        <div class="mt-2">
                                                            <div class="col-sm-12 d-flex"
                                                                style="padding: 0; justify-content: flex-end;">
                                                                <button id="btn-confirm-payment"
                                                                    class="btn btn-primary delete-confirm w-100 p-3">
                                                                    Confirm Payment
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
    </section>
</main>
<script>
    const listOrders = {
        1: {
            IdOrder: 1,
            AreaName: "Main Hall",
            TableName: "Table 2",
            TotalAmount: 305000
        },
        2: {
            IdOrder: 2,
            AreaName: "Main Hall",
            TableName: "Table 5",
            TotalAmount: 1800000
        }
    };

    $('#CustomerPaying').on('focus', function() {
        $(this).val('');
        // calculate change amount
        $('#ChangeAmount').text((0 - parseInt($('input[name="TotalAmount"]').val()))
            .toLocaleString('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }));

        if ($('#ChangeAmount').val() < 0 || $('#ChangeAmount').val() == "") {
            $('#text-ChangeAmount').text('Insufficient');
        } else {
            $('#text-ChangeAmount').text('Change Available');
        }
    });

    // Get TotalAmount from the current invoice
    $('.btn-payment').click(function() {
        var idOrder = $(this).data('idorder');
        var orderWrap = $(`#order-wrap-${idOrder}`);

        const orderCurrent = listOrders[idOrder];
        var infoOrder = $('#info-area-table');

        infoOrder.text(`Payment - Table ${orderCurrent.TableName} - ${orderCurrent.AreaName}`);
        $('input[name="TotalAmount"]').val(orderCurrent.TotalAmount);
        $('#TotalAmount').text(orderCurrent.TotalAmount.toLocaleString('vi-VN', {
            style: 'currency',
            currency: 'VND'
        }));

        // calculate change amount
        $('#ChangeAmount').text('0 ₫')

        $('#CustomerPaying').val(orderCurrent.TotalAmount.toLocaleString('vi-VN', {
            style: 'currency',
            currency: 'VND'
        }));

        $('.js-modal').addClass('show-modal');
        $(this).addClass('show-del');
    });

    // Handle when the user inputs the amount paid by the customer
    $('#CustomerPaying').on('input', function() {
        var totalAmount = parseInt($('input[name="TotalAmount"]').val());
        var customerPaying = parseFloat($('#CustomerPaying').val().replace(/\D/g, ''));

        if ($(this).val() === "") {
            customerPaying = 0;
        } else {
            $('#CustomerPaying').val(customerPaying.toLocaleString('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }));
        }

        if (!isNaN(totalAmount) && !isNaN(customerPaying)) {
            var changeAmount = customerPaying - totalAmount;
            $('#ChangeAmount').text(changeAmount.toLocaleString('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }));

            if (changeAmount < 0) {
                $('#text-ChangeAmount').text('Insufficient');
            } else {
                $('#text-ChangeAmount').text('Change Available');
            }
        }
    });
    var timeCurrents = document.querySelectorAll('.time-current');
    timeCurrents.forEach(function(timeCurrent) {
        let timein = $(timeCurrent).data('timein');
        var startTime = new Date(timein);
        setInterval(function() {
            var now = new Date();
            var elapsed = now - startTime;
            var hours = Math.floor(elapsed / 3600000);
            var minutes = Math.floor((elapsed - hours * 3600000) / 60000);
            var seconds = Math.floor((elapsed - hours * 3600000 - minutes * 60000) / 1000);
            var formattedTime = ('0' + hours).slice(-2) + ':' + ('0' + minutes).slice(-2) + ':' + ('0' + seconds).slice(-2);
            if (hours > 5) {
                timeCurrent.style.color = 'red';
            } else {
                timeCurrent.style.color = '';
            }
            timeCurrent.textContent = formattedTime;
        }, 1000);
    });

    $("#btn-confirm-payment").click(function(event) {
        event.preventDefault();

        let IdOrder = $(".show-del").data('idorder');

        $.ajax({
            url: "/admin/orders/payment/" + IdOrder,
            method: 'GET',
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            success: function(response) {
                const orderWrap = $(`#order-wrap-${IdOrder}`)
                if (orderWrap) {
                    orderWrap.remove();
                }
                showBoxEmpty();
                showSuccessNotification('rgba(0, 200, 81, 0.85)', response.success);
                $('.js-modal3').addClass('show-modal').attr('data-id', IdOrder);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                showSuccessNotification('rgba(255, 0, 0, 0.7)', 'Failed');
                backToTop();
            }
        });

        $('.js-modal').removeClass('show-modal');
        $('.show-del').removeClass('show-del');
    });

    $('#print_order').click(function() {
        const id = $('.js-modal3.show-modal').data('id');
        window.location.href = '/admin/orders/print/' + id;
    });

    showBoxEmpty = () => {
        const check = $(".check-item-order").length;
        if (check == 0) $(".box-order-empty").removeClass('d-none');
    };

    $("#delete-confirm").click(function(event) {
        event.preventDefault();

        let IdOrder = $(".show-del2").data('idorder');

        let formData = new FormData();
        formData.append('CancellationReason', $('input[name="CancellationReason"]').filter(':checked').val());
        formData.append('Content', $('#Content').val());

        $.ajax({
            url: "/admin/orders/delete/" + IdOrder,
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            success: function(response) {
                const orderWrap = $(`#order-wrap-${IdOrder}`)
                if (orderWrap) orderWrap.remove();
                showBoxEmpty();
                showSuccessNotification('rgba(0, 200, 81, 0.85)', response.success);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                showSuccessNotification('rgba(255, 0, 0, 0.7)', 'Failed');
                backToTop();
            }
        });

        $('.js-modal2').removeClass('show-modal');
        $('.show-del2').removeClass('show-del2');
    });
</script>
@endsection

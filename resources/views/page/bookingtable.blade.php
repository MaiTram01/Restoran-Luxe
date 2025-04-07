@extends('master')
@section('content')
<main class="reservation-page">
    <section class="page-banner d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="banner-content">
                    <h2 class="text-white display-3 text-center" data-aos="fade-right" data-aos-delay="3000">Reservation</h2>
                    <div class="divider" data-aos="fade-up-right" data-aos-delay="3000">
                        <div class="dot mb-2"></div>
                    </div>
                    <p class="text-white mb-0 text-center" data-aos="fade-left" data-aos-delay="3000">Just a few click to make the reservation online for saving your time and money</p>
                </div>
            </div>
        </div>
    </section>

    <section class="list-food">
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Foods</th>
                        <th>Table Price</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $item)
                        <tr>
                            <td>{{ $item['id'] }}</td>
                            <td>
                                <img src="{{  asset('source/assets/images/items/' . ($item['categoryName']) . '/' . $item['avatar']) }}" width="60">
                                {{ $item['name'] }}
                            </td>
                            <td>${{ number_format($item['price'], 2) }}</td>
                            <td>
                                <button class="btn btn-sm btn-outline-danger btn-decrease ">-</button>
                                <span class="mx-2 quantity">{{ $item['quantity'] }}</span>
                                <button class="btn btn-sm btn-outline-success btn-increase">+</button>
                            </td>
                            <td class="item-total">${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                            <td>
                                <i class="bi bi-trash text-danger"></i>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-between align-items-center mt-3">
                <div>
                    <a href="/home" class="btn btn-light">❮ Continue ordering</a>
                    <a href="#" class="btn btn-danger">Clear all</a>
                    <!-- <a href="/payment" class="btn btn-success">Checkout ❯</a> -->
                </div>
                <div class="text-end">
                <p>Subtotal: <strong id="subtotal">${{ number_format($subtotal, 2) }}</strong></p>
                <p>Discount: <strong>$0.00</strong></p>
                <p class="text-danger fw-bold">Total (VAT included): <span id="total">${{ number_format($subtotal, 2) }}</span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="reservation-form my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center display-6 fw-bold" data-aos="fade-right">Reservation Form</h2>
                    <div data-aos="fade-right" class="reservation-line d-flex justify-content-center align-items-center">
                        <span></span>
                    </div>
                    <form action="" class="position-relative">
                        <img data-aos="fade-down-left" class="d-none d-lg-block" src="source/assets/images/reservation-showcase.png" alt="">
                        <p class="text-center" data-aos="fade-up-right">We willing to help you make the reservation online to save your time and money or you can call us directly through the customer service hotline: 225-88888</p>
                        <div class="row mt-5">
                            <div data-aos="fade-right" class="col-md-6">
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
                            <div data-aos="fade-left" class="col-md-6">
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
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group" data-aos="fade-up-right">
                                    <textarea class="form-control bg-transparent border-0 px-3" name="" id="" placeholder="Description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center" data-aos="fade-up-left">
                            <div class="book-a-table contact-button">
                                <div class="anim-layer"></div>
                                <a href="/payment">Book Table</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
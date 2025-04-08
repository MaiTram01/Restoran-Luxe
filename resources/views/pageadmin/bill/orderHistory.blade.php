@extends('Layouts.Admin.master')
@section('content')
<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-12" style="margin: 0 auto;">
                <div class="pagetitle">
                    <nav>
                        <ol class="breadcrumb" style="justify-content: space-between;">
                            <h4 class="breadcrumb-item active">Order History</h4>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-start">
                                    <a style="color: #fff;" class="btn btn-primary mb-3" href="/admin/orders/create">
                                        <i class="bi bi-plus-circle"></i>
                                        <span>Create New Order</span>
                                    </a>
                                </div>
                                <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="All-tab" data-bs-toggle="tab"
                                            data-bs-target="#bordered-All" type="button" role="tab"
                                            aria-controls="All" aria-selected="true">All</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="confirmed-tab" data-bs-toggle="tab"
                                            data-bs-target="#bordered-confirmed" type="button" role="tab"
                                            aria-controls="confirmed" aria-selected="false" tabindex="-1">Pending</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="completed-tab" data-bs-toggle="tab"
                                            data-bs-target="#bordered-completed" type="button" role="tab"
                                            aria-controls="completed" aria-selected="false" tabindex="-1">Confirmed</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="canceled-tab" data-bs-toggle="tab"
                                            data-bs-target="#bordered-canceled" type="button" role="tab"
                                            aria-controls="canceled" aria-selected="false" tabindex="-1">Canceled</button>
                                    </li>
                                </ul>

                                <div class="tab-content pt-2" id="borderedTabContent">
                                    <div class="tab-pane fade show active" id="bordered-All" role="tabpanel"
                                        aria-labelledby="All-tab">
                                        <table class="table table-hover e-commerce-table table-borderless datatable">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col">No.</th>
                                                    <th class="text-center" scope="col">Cashier</th>
                                                    <th class="text-center" scope="col">Area/Table</th>
                                                    <th class="text-center" scope="col">Customer Info</th>
                                                    <th class="text-center" scope="col">Total Amount</th>
                                                    <th class="text-center" scope="col">Status</th>
                                                    <th class="text-center" scope="col">------------</th>
                                                </tr>
                                            </thead>
                                            <tbody id="records_table">
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">Ho Anh Hoa</td>
                                                    <td class="text-center">Main Hall, Table 3</td>
                                                    <td class="text-center">
                                                        <div class="d-flex flex-column">
                                                            <label>Customer 1</label>
                                                            <label>0865787333</label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">440,000 ₫</td>
                                                    <td class="text-center">
                                                        <span class="badge badge-success">Confirmed</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-success">
                                                            <i class="bi bi-eye"></i> Details
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">Ho Anh Hoa</td>
                                                    <td class="text-center">Main Hall, Table 2</td>
                                                    <td class="text-center">
                                                        <div class="d-flex flex-column">
                                                            <label>Customer 2</label>
                                                            <label>0865787333</label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">300,000 ₫</td>
                                                    <td class="text-center">
                                                        <span class="badge badge-warning">Pending</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-success">
                                                            <i class="bi bi-eye"></i> Details
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="bordered-confirmed" role="tabpanel" aria-labelledby="confirmed-tab">
                                        <table class="table table-hover e-commerce-table table-borderless datatable">
                                            <thead>
                                                <tr>
                                                    <th class="text-start" scope="col">Payment Time</th>
                                                    <th class="text-center" scope="col">Reference</th>
                                                    <th class="text-center" scope="col">Cashier</th>
                                                    <th class="text-center" scope="col">Area/Table</th>
                                                    <th class="text-center" scope="col">Customer Info</th>
                                                    <th class="text-center" scope="col">Payment Status</th>
                                                    <th class="text-end" scope="col">Total Amount</th>
                                                    <th class="text-center" scope="col">------------</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-start">07/04/2025 16:19</td>
                                                    <td class="text-center">Booking Code 152</td>
                                                    <td class="text-center">Ho Anh Hoa</td>
                                                    <td class="text-center">Main Hall, Table 1</td>
                                                    <td class="text-center">Customer 3</td>
                                                    <td class="text-center">Paid</td>
                                                    <td class="text-end">500,000 ₫</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-success">
                                                            <i class="bi bi-eye"></i> Details
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="bordered-completed" role="tabpanel" aria-labelledby="completed-tab">
                                        <table class="table table-hover e-commerce-table table-borderless datatable">
                                            <thead>
                                                <tr>
                                                    <th class="text-start" scope="col">Payment Time</th>
                                                    <th class="text-center" scope="col">Reference</th>
                                                    <th class="text-center" scope="col">Cashier</th>
                                                    <th class="text-center" scope="col">Area/Table</th>
                                                    <th class="text-center" scope="col">Customer Info</th>
                                                    <th class="text-center" scope="col">Payment Status</th>
                                                    <th class="text-end" scope="col">Total Amount</th>
                                                    <th class="text-center" scope="col">------------</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-start">01/04/2025 21:45</td>
                                                    <td class="text-center">Booking Code 177</td>
                                                    <td class="text-center">Ho Anh Hoa</td>
                                                    <td class="text-center">Main Hall, Table 2</td>
                                                    <td class="text-center">Customer 4</td>
                                                    <td class="text-center">Paid</td>
                                                    <td class="text-end">360,000 ₫</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-success">
                                                            <i class="bi bi-eye"></i> Details
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="bordered-canceled" role="tabpanel" aria-labelledby="canceled-tab">
                                        <table class="table table-hover e-commerce-table table-borderless datatable">
                                            <thead>
                                                <tr>
                                                    <th class="text-start" scope="col">Cancellation Time</th>
                                                    <th class="text-center" scope="col">Cancellation Reason</th>
                                                    <th class="text-center" scope="col">Reference</th>
                                                    <th class="text-center" scope="col">Canceled By</th>
                                                    <th class="text-center" scope="col">Area/Table</th>
                                                    <th class="text-center" scope="col">Customer Info</th>
                                                    <th class="text-end" scope="col">Total Amount</th>
                                                    <th class="text-center" scope="col">------------</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-start">07/04/2025 16:19</td>
                                                    <td class="text-center">Customer Cancellation</td>
                                                    <td class="text-center">Booking Code 174</td>
                                                    <td class="text-center">Ho Anh Hoa</td>
                                                    <td class="text-center">Main Hall, Table 3</td>
                                                    <td class="text-center">Customer 5</td>
                                                    <td class="text-end">0 ₫</td>
                                                    <td class="text-center">
                                                        <a href="#" class="btn btn-success">
                                                            <i class="bi bi-eye"></i> Details
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
@endsection
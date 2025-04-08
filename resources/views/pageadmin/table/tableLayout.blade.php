@extends('Layouts.Admin.master')
@section('content')
<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-12" style="margin: 0 auto;">
                <div class="pagetitle">
                    <nav>
                        <ol class="breadcrumb" style="justify-content: space-between;">
                            <h4 class="breadcrumb-item active">Table Layout</h4>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-xl-3 col-md-3">
                        <div class="card">
                            <div class="card-body" style="padding: 1rem;">
                                <div class="d-flex align-items-start">
                                    <div class="nav flex-column nav-pills w-100" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <button class="nav-link btn-tabs text-start active" id="v-pills-main-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-main" type="button" role="tab"
                                            aria-controls="v-pills-main" aria-selected="true">
                                            <i class="bi bi-geo-alt-fill"></i>
                                            Main Hall
                                        </button>
                                        <button class="nav-link btn-tabs text-start" id="v-pills-outside-tab"
                                            data-bs-toggle="pill" data-bs-target="#v-pills-outside" type="button" role="tab"
                                            aria-controls="v-pills-outside" aria-selected="false" tabindex="-1">
                                            <i class="bi bi-geo-alt-fill"></i>
                                            Outside Area
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-xl-9 col-md-9">
                        <div class="card">
                            <div class="card-body" style="padding: 1rem;">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade active show" id="v-pills-main" role="tabpanel"
                                        aria-labelledby="v-pills-main-tab">
                                        <div class="row">
                                            <div class="col col-lg-3 col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
                                                <div>
                                                    <div class="d-flex flex-column align-items-center form-setting">
                                                        <div class="icon setting-icon fs-5 fw-bold"
                                                            style="color: #fff; background: #0db473;">
                                                            1
                                                        </div>
                                                        <div class="border-top-line w-100 pt-2">
                                                            <p class="m-0">Available</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col col-lg-3 col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
                                                <div>
                                                    <div class="d-flex flex-column align-items-center form-setting">
                                                        <div class="icon setting-icon fs-5 fw-bold"
                                                            style="color: #fff; background: #ffc451;">
                                                            2
                                                        </div>
                                                        <div class="border-top-line w-100 pt-2">
                                                            <p class="m-0">Reserved</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col col-lg-3 col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
                                                <div>
                                                    <div class="d-flex flex-column align-items-center form-setting">
                                                        <div class="icon setting-icon fs-5 fw-bold"
                                                            style="color: #fff; background: #ee4747;">
                                                            3
                                                        </div>
                                                        <div class="border-top-line w-100 pt-2">
                                                            <p class="m-0">Occupied</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col col-lg-3 col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
                                                <div>
                                                    <div class="d-flex flex-column align-items-center form-setting">
                                                        <div class="icon setting-icon fs-5 fw-bold"
                                                            style="color: #fff; background: #0db473;">
                                                            4
                                                        </div>
                                                        <div class="border-top-line w-100 pt-2">
                                                            <p class="m-0">Available</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="v-pills-outside" role="tabpanel"
                                        aria-labelledby="v-pills-outside-tab">
                                        <div class="row">
                                            <div class="col col-lg-3 col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
                                                <div>
                                                    <div class="d-flex flex-column align-items-center form-setting">
                                                        <div class="icon setting-icon fs-5 fw-bold"
                                                            style="color: #fff; background: #0db473;">
                                                             5
                                                        </div>
                                                        <div class="border-top-line w-100 pt-2">
                                                            <p class="m-0">Available</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col col-lg-3 col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
                                                <div>
                                                    <div class="d-flex flex-column align-items-center form-setting">
                                                        <div class="icon setting-icon fs-5 fw-bold"
                                                            style="color: #fff; background: #ffc451;">
                                                            6
                                                        </div>
                                                        <div class="border-top-line w-100 pt-2">
                                                            <p class="m-0">Reserved</p>
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
@endsection

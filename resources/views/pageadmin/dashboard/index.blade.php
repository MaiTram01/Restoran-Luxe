@extends('Layouts.Admin.master')
@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <h1>Statistics</h1>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12 d-flex mb-3">
                <a href="#" class="btn btn-light me-2 active">Today</a>
                <a href="#" class="btn btn-light me-2">This Month</a>
                <a href="#" class="btn btn-light me-2">This Year</a>
                <a href="#" class="btn btn-light me-2">All</a>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body p-4">
                                <h5 class="card-title">Orders</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>150</h6>
                                        <span class="text-muted small pt-2 ps-0">Increase</span>
                                        <span class="text-success small pt-1 fw-bold">10%</span>
                                        <span class="text-muted small pt-2">compared to yesterday</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body p-4">
                                <h5 class="card-title">Revenue</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>1,500,000 VND</h6>
                                        <span class="text-muted small pt-2 ps-0">Increase</span>
                                        <span class="text-success small pt-1 fw-bold">15%</span>
                                        <span class="text-muted small pt-2">compared to yesterday</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-12">
                        <div class="card info-card customers-card">
                            <div class="card-body p-4">
                                <h5 class="card-title">Customers</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>75</h6>
                                        <span class="text-muted small pt-2 ps-0">Increase</span>
                                        <span class="text-success small pt-1 fw-bold">5%</span>
                                        <span class="text-muted small pt-2">compared to yesterday</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body p-4">
                                <h5 class="card-title">All</h5>
                                <div id="reportsChart"></div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        const categories = ["08:00", "09:00", "10:00", "11:00", "12:00"];
                                        const revenueData = [100000, 150000, 200000, 250000, 300000];
                                        const profitData = [50000, 75000, 100000, 125000, 150000];

                                        new ApexCharts(document.querySelector("#reportsChart"), {
                                            series: [{
                                                    name: 'Revenue',
                                                    data: revenueData,
                                                },
                                                {
                                                    name: 'Profit',
                                                    data: profitData,
                                                }
                                            ],
                                            chart: {
                                                height: 350,
                                                type: 'area',
                                                toolbar: { show: false },
                                            },
                                            markers: { size: 4 },
                                            colors: ['#4154f1', '#2eca6a'],
                                            fill: {
                                                type: "gradient",
                                                gradient: { shadeIntensity: 1, opacityFrom: 0.3, opacityTo: 0.4, stops: [0, 90, 100] }
                                            },
                                            dataLabels: { enabled: false },
                                            stroke: { curve: 'smooth', width: 2 },
                                            xaxis: {
                                                type: 'category',
                                                categories: categories,
                                            },
                                            tooltip: { x: { format: 'HH:mm' }},
                                            yaxis: {
                                                labels: {
                                                    formatter: function(value) {
                                                        return value.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
                                                    }
                                                },
                                            },
                                        }).render();
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="col-8">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body p-4">
                                <h5 class="card-title">Sales Quantity by Item</h5>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">ID</th>
                                            <th scope="col">Item</th>
                                            <th scope="col" class="text-center">Category</th>
                                            <th scope="col" class="text-center">Selling Price</th>
                                            <th scope="col" class="text-center">Quantity Sold</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="text-center" scope="row"><a href="#">#1</a></th>
                                            <td class="d-flex align-items-center">
                                                <div class="m-b-20 me-3" style="height: 3rem; width: 3rem;">
                                                    <img id="img-account" src="path/to/image.jpg" alt="Profile" class="rounded-circle-items">
                                                </div>
                                                Item A
                                            </td>
                                            <td class="text-center">Category 1</td>
                                            <td class="text-center">100,000 VND</td>
                                            <td class="text-center">50</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body p-3 pb-0">
                                <h5 class="card-title">Top 5 Best-Selling Items</h5>
                                <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#trafficChart")).setOption({
                                            tooltip: { trigger: 'item' },
                                            legend: { top: '2%', left: 'center' },
                                            series: [{
                                                name: 'Total',
                                                type: 'pie',
                                                radius: ['40%', '70%'],
                                                avoidLabelOverlap: false,
                                                label: { show: false, position: 'center' },
                                                emphasis: {
                                                    label: { show: true, fontSize: '18', fontWeight: 'bold' }
                                                },
                                                labelLine: { show: false },
                                                data: [
                                                    { value: 100, name: "Item A" },
                                                    { value: 80, name: "Item B" },
                                                    { value: 60, name: "Item C" },
                                                    { value: 50, name: "Item D" },
                                                    { value: 40, name: "Item E" },
                                                ]
                                            }]
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
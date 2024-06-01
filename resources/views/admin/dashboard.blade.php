@extends('layouts.app001')

@section('title', 'Admin dashboard')

@section('header')
    @parent
@endsection


@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

            {{-- 2 bảng thực tế  --}}
            {{-- <div class="col-sm-6 col-xl-6">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-line fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Doanh thu hôm nay</p>
                        <h6 class="mb-0">{{ number_format($todayRevenue) }} VND</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-6">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Tổng số lượng SP đã bán hôm nay</p>
                        <h6 class="mb-0">---</h6>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <!-- Sales Chart Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Doanh thu</h6>
                    </div>
                    <canvas id="salse-revenue"></canvas>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="h-100 bg-secondary rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="mb-0">10 đơn hàng gần nhất</h6>
                        <a href="">Show All</a>
                    </div>
                    @foreach($latestOrders as $order)
                        <div class="d-flex align-items-center border-bottom py-3">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-0">{{ $order['name'] }} - {{ $order['ShippingPhone'] }}</h6>
                                    <small>d/m/Y H:i:s</small>
                                </div>
                                <span>{{ $order['ShippingAddress'] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <!-- Sales Chart End -->
    <!-- Widgets Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
        </div>
    </div>
    <!-- Widgets End -->





    <!-- Widgets Start -->
<?php
    
    ?>
@endphp
@endsection

@push('JS_REGION')
    <script>
        $(document).ready(function() {
            var revenueData = @json(array_values($monthlyRevenue));
            console.log('revenueData', revenueData)
            var ctx2 = $("#salse-revenue").get(0).getContext("2d");
            var myChart2 = new Chart(ctx2, {
                type: "line",
                data: {
                    labels: ["T.1", "T.2", "T.3", "T.4", "T.5", "T.6", "T.7", "T.8", "T.9", "T.10", "T.11", "T.12"],
                    datasets: [
                        {
                            label: "Doanh thu",
                            data: revenueData,
                            backgroundColor: "rgba(235, 22, 22, .5)",
                            fill: true
                        }
                    ]
                },
                options: {
                    responsive: true
                }
            });


        });
    </script>
@endpush

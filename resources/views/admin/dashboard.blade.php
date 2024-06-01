@extends('layouts.app001')

@section('title', 'Admin dashboard')

@section('header')
    @parent
@endsection

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 justify-content-center">
            <!-- Sales Chart Start -->
            <div class="col-md-8">
                <div class="bg-secondary text-center rounded p-4 h-100">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Doanh thu</h6>
                    </div>
                    <canvas id="salse-revenue"></canvas>
                </div>
            </div>
            <!-- Sales Chart End -->

            <!-- Recent Orders Start -->
            <div class="col-md-4">
                <div class="h-100 bg-secondary rounded p-4" style="max-height: 500px; overflow-y: auto;">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="mb-0">10 đơn hàng gần nhất</h6>
                        <a href="">Xem tất cả</a>
                    </div>
                    <div class="scrollable-content">
                        @foreach($latestOrders as $order)
                            <div class="d-flex align-items-center border-bottom py-3">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">{{ $order['name'] }} - {{ $order['ShippingPhone'] }}</h6>
                                        <small>{{ \Carbon\Carbon::parse($order['created_at'])->format('d/m/Y H:i:s') }}</small>
                                    </div>
                                    <span>{{ $order['ShippingAddress'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Recent Orders End -->
        </div>
    </div>
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
                    labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
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

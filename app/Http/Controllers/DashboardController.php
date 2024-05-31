<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function index(Request $request)
    {
        $latestOrders = Invoice::orderBy('created_at', 'desc')->take(10)->get();
        $monthlyRevenue = Invoice::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('SUM(total) as revenue')
        )
            ->groupBy('month')
            ->orderBy('month')
            ->get();
        // Format data for chart
        $revenueData = [];
        for ($i = 1; $i <= 12; $i++) {
            $revenueData[$i] = 0;
        }

        foreach ($monthlyRevenue as $revenue) {
            $revenueData[$revenue->month] = $revenue->revenue;
        }

        // Lấy doanh thu của ngày hôm nay
        $today = Carbon::today();
        $todayRevenue = Invoice::whereDate('created_at', $today)->sum('total');
        return view('admin.dashboard', [
            'latestOrders' => $latestOrders,
            'monthlyRevenue' => $revenueData,
            'todayRevenue' => $todayRevenue,
        ]);
    }
}

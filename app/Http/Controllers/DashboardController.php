<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $userID = Auth::id();
        $data['user'] = Auth::user();
        $orderModel = Order::where('user_id', $userID);
        $data['orderList'] = $orderModel->paginate(10);
        $data['activeOrders'] = $orderModel->where('delivery_status', 'Awaiting')->count();
        $data['totalOrders'] = $orderModel->count();
        $data['totalPurchase'] = $orderModel->sum('amount');

        return view('pages.dashboard.index', $data);
    }
}

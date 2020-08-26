<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    public function index()
    {
        
    }

    public function show(Order $order)
    {
        return view('admin.orders.show', compact('order'));
    }
}

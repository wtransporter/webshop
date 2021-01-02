<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use App\Http\Controllers\Controller;

class HistoryOrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('order-owner');
    }

    public function index(User $user)
    {      
        return view('profiles.index', [
            'orders' => $user->orders
        ]);
    }

    public function show(User $user, Order $order)
    {        
        return view('profiles.orders.show', compact('order'));
    }
}

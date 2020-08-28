<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoryOrdersController extends Controller
{
    public function index(User $user)
    {
        abort_if($user->id != auth()->id(), 403);
        
        return view('profiles.index', [
            'orders' => $user->orders
        ]);
    }

    public function show(User $user, Order $order)
    {

        return view('profiles.orders.show', compact('order'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\BiznisoftWebservice\WebOrders;

class OrdersUploadController extends Controller
{
    public function index($order, WebOrders $service)
    {
        try {
            $service->addItem($order);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Neuspešno slanje! ' . $e->getMessage());
        }

        return redirect()->back()->with('message','Uspešno slanje narudžbine!');

    }
}

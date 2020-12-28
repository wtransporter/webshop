<?php

namespace App\Providers;

use App\User;
use App\Order;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('admin.index', function($view)
        {
            return $view->with([
                'uniqueVisitors' => User::whereHead(false)->count(),
                'newOrders' => Order::whereStatus(0)->count(),
                'registeredUsers' => User::whereDate('created_at', '=', Carbon::now()->toDateString())
                ->count()
            ]);
        });
    }
}

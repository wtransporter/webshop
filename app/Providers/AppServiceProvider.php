<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Http\Repositories\BSWebService\BSWebserviceClient;
use App\Http\Repositories\BSWebService\ItArticlesOnStock;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        \View::composer('*', function($view) {
            $view->with('categories', \App\Category::where('bscat_id', 0)->get());
        });
    }
}

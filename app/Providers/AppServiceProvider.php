<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Http\Repositories\BSWebService\BSWebserviceClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(BSWebserviceClient::class, function() {
            return new BSWebserviceClient([], config('app.biznisoft.url'));
        });
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
            $view->with('categories', \App\Category::all());
        });
    }
}

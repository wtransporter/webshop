<?php

namespace App\Providers;

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
        $this->app->bind(BSWebserviceClient::class, function() {
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
        \View::composer('*', function($view) {
            $view->with('categories', \App\Category::all());
        });
    }
}

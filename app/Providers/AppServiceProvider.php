<?php

namespace App\Providers;

use App\Models\Categories;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Builder::defaultStringLength(191);

        View::composer('layouts.app', function ($view) {
            $categories = Categories::all();
            $view->with('categories', $categories);
        });
    }
}

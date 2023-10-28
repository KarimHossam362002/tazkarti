<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // this is for generic user data auth in main layout
        View::composer('main', function ($view) {

            $user = Auth::user();
    
            $view->with('user', $user);
        });
        View::composer('layout', function ($view) {

            $user = Auth::user();
    
            $view->with('user', $user);
        });
        View::composer('second', function ($view) {

            $user = Auth::user();
    
            $view->with('user', $user);
        });
        // here is for every layout extends the generic layout
        View::share('user', Auth::user());
    }
}

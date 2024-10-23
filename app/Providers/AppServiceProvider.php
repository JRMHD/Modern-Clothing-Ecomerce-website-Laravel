<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\CartItem;

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
    public function boot()
    {
        View::composer('*', function ($view) {
            if (auth()->check()) {
                $cartCount = CartItem::where('user_id', auth()->id())->sum('quantity');
            } else {
                $cartCount = 0; // No user logged in
            }

            $view->with('cartCount', $cartCount);
        });
    }
}

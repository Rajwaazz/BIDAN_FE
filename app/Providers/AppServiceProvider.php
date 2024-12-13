<?php

namespace App\Providers;

use illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();
        // Berbagi variabel $bidan ke semua view
        view()->share('bidan', \App\Models\Bidan::all());
    }
}

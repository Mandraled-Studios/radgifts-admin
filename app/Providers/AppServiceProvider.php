<?php

namespace App\Providers;

use App\View\Components\homeFeaturedCorporate;
use App\View\Components\homeRecentWorks;
use Illuminate\Support\Facades\Blade;
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
        Blade::component('home-recent-works', homeRecentWorks::class);
        Blade::component('home-featured-corporate', homeFeaturedCorporate::class);
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\ProductRepository;
use App\Interface\ProductInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProductInterface::class,ProductRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

<?php

namespace App\Providers;

use App\Interface\AttributeInterface;
use App\Interface\CategoryInterface;
use App\Repository\AttributeRepository;
use App\Repository\CategoryRepository;
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
        $this->app->bind(AttributeInterface::class,AttributeRepository::class);
        $this->app->bind(CategoryInterface::class,CategoryRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

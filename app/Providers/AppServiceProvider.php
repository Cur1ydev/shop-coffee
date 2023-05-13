<?php

namespace App\Providers;

use App\Interface\Admin\AttributeInterface;
use App\Interface\Admin\CategoryInterface;
use App\Interface\Admin\ProductInterface;
use App\Interface\Client\HomeInterface;
use App\Interface\Client\MenuInterface;
use App\Repository\Admin\AttributeRepository;
use App\Repository\Admin\CategoryRepository;
use App\Repository\Admin\ProductRepository;
use App\Repository\Client\HomeRepository;
use App\Repository\Client\MenuRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //Admin
        $this->app->bind(ProductInterface::class, ProductRepository::class);
        $this->app->bind(AttributeInterface::class, AttributeRepository::class);
        $this->app->bind(CategoryInterface::class, CategoryRepository::class);

        //Client
        $this->app->bind(HomeInterface::class, HomeRepository::class);
        $this->app->bind(MenuInterface::class, MenuRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

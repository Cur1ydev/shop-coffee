<?php

namespace App\Providers;

use App\Interface\Admin\AttributeInterface;
use App\Interface\Admin\CategoryInterface;
use App\Interface\Admin\ProductInterface;
use App\Interface\Client\HomeInterface;
use App\Interface\Client\MenuInterface;
use App\Interface\Client\ProductDetailInterface;
use App\Interface\Client\ShopInterface;
use App\Repository\Admin\AttributeRepository;
use App\Repository\Admin\CategoryRepository;
use App\Repository\Admin\ProductRepository;
use App\Repository\Client\HomeRepository;
use App\Repository\Client\MenuRepository;
use App\Repository\Client\ProductDetailRepository;
use App\Repository\Client\ShopRepository;
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
        $this->app->bind(ProductDetailInterface::class,ProductDetailRepository::class);
        $this->app->bind(ShopInterface::class,ShopRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

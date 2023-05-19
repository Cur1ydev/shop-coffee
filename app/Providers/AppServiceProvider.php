<?php

namespace App\Providers;

use App\Interface\Admin\AddressInterface;
use App\Interface\Admin\AttributeInterface;
use App\Interface\Admin\CategoryInterface;
use App\Interface\Admin\CouponInterface;
use App\Interface\Admin\ProductAttributeInterface;
use App\Interface\Admin\ProductInterface;
use App\Interface\Admin\ProvinceInterface;
use App\Interface\Client\HomeInterface;
use App\Interface\Client\MenuInterface;
use App\Interface\Client\ProductDetailInterface;
use App\Interface\Client\ShopInterface;
use App\Repository\Admin\AddressRepository;
use App\Repository\Admin\AttributeRepository;
use App\Repository\Admin\CategoryRepository;
use App\Repository\Admin\CouponRepository;
use App\Repository\Admin\ProductAttributeRepository;
use App\Repository\Admin\ProductRepository;
use App\Repository\Admin\ProvinceRepository;
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
        $this->app->bind(ProductAttributeInterface::class,ProductAttributeRepository::class);
        $this->app->bind(CouponInterface::class,CouponRepository::class);
        $this->app->bind(ProvinceInterface::class,ProvinceRepository::class);
        $this->app->bind(AddressInterface::class,AddressRepository::class);

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

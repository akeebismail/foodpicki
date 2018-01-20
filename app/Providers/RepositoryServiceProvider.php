<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/7/18
 * Time: 12:00 AM
 */
namespace App\Providers;

use App\Food\Address\AddressRepository\AddressInterface;
use App\Food\Address\AddressRepository\AddressRepository;
use App\Food\Cart\CartRepository\CartInterface;
use App\Food\Cart\CartRepository\CartRepository;
use App\Food\Category\Repository\CategoryInterface;
use App\Food\Category\Repository\CategoryRepository;
use App\Food\MenuFood\Repository\MenuFoodInterface;
use App\Food\MenuFood\Repository\MenuFoodRepository;
use App\Food\Order\Repository\OrderInterface;
use App\Food\Order\Repository\OrderProductInterface;
use App\Food\Order\Repository\OrderProductRepositry;
use App\Food\Order\Repository\OrderRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider{
    public function register(){
        $this->app->bind(CategoryInterface::class,CategoryRepository::class);
        $this->app->bind(MenuFoodInterface::class, MenuFoodRepository::class);
        $this->app->bind(CartInterface::class,CartRepository::class);
        $this->app->bind(OrderProductInterface::class, OrderProductRepositry::class);
        $this->app->bind(OrderInterface::class,OrderRepository::class);
        $this->app->bind(AddressInterface::class,AddressRepository::class);
    }
}
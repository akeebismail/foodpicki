<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/7/18
 * Time: 12:00 AM
 */
namespace App\Providers;

use App\Food\Cart\CartRepository\CartInterface;
use App\Food\Cart\CartRepository\CartRepository;
use App\Food\Category\Repository\CategoryInterface;
use App\Food\Category\Repository\CategoryRepository;
use App\Food\MenuFood\Repository\MenuFoodInterface;
use App\Food\MenuFood\Repository\MenuFoodRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider{
    public function register(){
        $this->app->bind(CategoryInterface::class,CategoryRepository::class);
        $this->app->bind(MenuFoodInterface::class, MenuFoodRepository::class);
        $this->app->bind(CartInterface::class,CartRepository::class);
    }
}
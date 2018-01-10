<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/10/18
 * Time: 9:18 AM
 */
namespace App\Providers;

use App\Food\Cart\CartRepository\CartRepository;
use App\Food\Cart\ShoppingCart;
use App\Food\Category\Category;
use App\Food\Category\Repository\CategoryRepository;
use Illuminate\Support\ServiceProvider;

class HeaderService extends ServiceProvider{

    public function boot(){
        view()->composer('components.header',function ($view){
            $view->with('category',$this->category());
            $view->with('cart',$this->getCart());
        });
    }

    private function category(){
        $catRepo = new  CategoryRepository(new Category);

        return $catRepo->listCategories('name','asc')->where('parent_id',0);
    }

    private  function getCart(){
        $cart = new CartRepository(new ShoppingCart);
        return $cart->getCartItems()->count();
    }
}
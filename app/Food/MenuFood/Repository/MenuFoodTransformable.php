<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/10/18
 * Time: 10:46 PM
 */
namespace App\Food\MenuFood\Repository;

use App\Food\MenuFood\MenuFood;

trait MenuFoodTransformable {
    protected function transformFood(MenuFood $food){
        $menu = new MenuFood;
        $menu->id = $food->id;
        $menu->name = $food->name;
        $menu->price = $food->price;
        $menu->description = $food->description;
        $menu->details = $food->details;
        $menu->nutrition = $food->nutrion_info;
        $menu->preparation = $food->prep_methods;
        $menu->weight = $food->weight;
        $menu->calories = $food->calories;
        $menu->ingredients = $food->ingredients;
        $menu->discount = $food->discount;
        $menu->categories = $food->categories;

        return $menu;
    }
}
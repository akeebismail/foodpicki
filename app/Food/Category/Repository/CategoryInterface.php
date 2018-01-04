<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/4/18
 * Time: 6:04 PM
 */
namespace App\Food\Category\Repository;
use App\Food\Category\Category;
use App\Food\FoodBase\Repository\FoodInterface;
use App\Food\MenuFood\MenuFood;

interface CategoryInterface extends FoodInterface{
    public function listCategories(string $order = 'id', string $sort = 'desc', $except = []);

    public function createCategory(array $params) : Category;

    public function updateCategory(array $params) : Category;

    public function findCategoryById(int $id) : Category;

    public function deleteCategory() : bool;

    public function associateMenufood(MenuFood $menuFood);

    public function findMenufood();

    public function syncMenuFood(array $params);

    public function detachMenfood();

    public function deleteFile(array $file, $disk = null) : bool;

    public function findCategoryBySlug(array $slug) : Category;

    public function findProductsInCategory(int $id);
}
<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/4/18
 * Time: 6:26 PM
 */
namespace App\Food\MenuFood\Repository;

use App\Food\FoodBase\Repository\FoodInterface;
use App\Food\MenuFood\MenuFood;

interface MenuFoodInterface extends FoodInterface{
    public function listProducts( $order = 'id',  $sort = 'desc', array $columns = ['*']);

    public function createProduct(array $data, $file = null);

    public function updateProduct(array $params,  $id);

    public function findProductById( $id);

    public function deleteProduct(MenuFood $product);

    public function detachCategories(MenuFood $product);

    public function getCategories();

    public function syncCategories(array $params);

    public function deleteFile(array $file, $disk = null);

    public function findProductBySlug(array $slug) ;

    public function uploadOneImage($image, $folder = 'products');

    public function searchProduct( $text) ;
}
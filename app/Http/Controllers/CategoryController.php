<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/10/18
 * Time: 7:38 PM
 */
namespace App\Http\Controllers;

use App\Food\Category\Repository\CategoryInterface;
use App\Food\MenuFood\MenuFood;
use App\Food\MenuFood\Repository\MenuFoodTransformable;

class CategoryController extends Controller{
    use MenuFoodTransformable;
    private $_category;
    public function __construct(CategoryInterface $cat)
    {
        $this->_category = $cat;
    }
    public function index(){
        return view('pages.category');
    }

    public function show($slug){
        $cat = $this->_category->findCategoryBySlug(['slug'=>$slug]);
        $list = $this->_category->findProductsInCategory($cat->id);
        $food = $list->map(function (MenuFood $food){
           return  $this->transformFood($food);
        })->all();

        return view('pages.food-list', [
            'category' => $cat,
                'food' => $this->_category->paginateArrayResults($food,10)
            ]
        );
    }
    public function showId($id){

    }
}
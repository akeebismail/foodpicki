<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/10/18
 * Time: 7:38 PM
 */
namespace App\Http\Controllers;

use App\Food\Category\Repository\CategoryInterface;

class CategoryController extends Controller{
    private $_category;
    public function __construct(CategoryInterface $cat)
    {
        $this->_category = $cat;
    }
    public function index(){}

    public function show($slug){
        $cat = $this->_category->findCategoryBySlug(['slug'=>$slug]);
        $list = $this->_category->findProductsInCategory($cat->id);
        return $list;
    }
    public function showId($id){

    }
}
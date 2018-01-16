<?php

namespace App\Http\Controllers;

use App\Food\FoodBase\Repository\FoodInterface;
use App\Food\MenuFood\Repository\MenuFoodInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    private $_foodmenu;
    public function __construct(MenuFoodInterface $food)
    {
        $this->_foodmenu = $food;
    }

    public function index(){
        return $this->_foodmenu->findProductById(34);
        //return view('pages.food');
    }
    public function show($slug){
        $food = $this->_foodmenu->findProductBySlug(['slug'=>$slug]);
        return view('pages.food',['food'=>$food]);
    }
    public function showId($id){
        $food = $this->_foodmenu->findProductById($id);

        return $food;
    }
}

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

    }
    public function show($slug){
        $food = $this->_foodmenu->fin;

        return view('pages.food');
    }
}

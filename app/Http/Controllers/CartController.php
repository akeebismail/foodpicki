<?php

namespace App\Http\Controllers;

use App\Food\Cart\CartRepository\CartInterface;
use App\Food\MenuFood\Repository\MenuFoodInterface;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    private  $_foodmenu;
    private $cart;
    public function __construct(MenuFoodInterface $food, CartInterface $cart)
    {
        $this->_foodmenu = $food;
        $this->cart = $cart;
    }

    public function index(){}

    public function show($slug){
    }
    public function create(Request $request){}

    public function update(Request $request){}

    public function edit($id){}

    public function store(){}

    public function destroy($id){}
}

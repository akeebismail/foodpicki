<?php

namespace App\Http\Controllers;

use App\Food\Cart\CartRepository\CartInterface;
use App\Food\Cart\CartRepository\CartRepository;
use App\Food\Cart\CartRequest\AddCartRequest;
use App\Food\Cart\CartRequest\UpdateCartRequest;
use App\Food\Cart\ShoppingCart;
use App\Food\MenuFood\MenuFood;
use App\Food\MenuFood\Repository\MenuFoodInterface;
use App\Food\MenuFood\Repository\MenuFoodRepository;
use App\Food\MenuFood\Repository\MenuFoodTransformable;
use Gloudemans\Shoppingcart\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    use MenuFoodTransformable;
    private  $_foodmenu;
    private $cart;
    public function __construct(MenuFoodInterface $food, CartInterface $cart)
    {
        $this->_foodmenu = $food;
        $this->cart = $cart;
    }

    public function index(){
        $food = new MenuFoodRepository(new MenuFood);
        $this->cart = new CartRepository(new ShoppingCart);
        $items = collect($this->cart->getCartItems())->map(function (CartItem $item) use ($food){
            $menu = $food->findProductById($item->id);
            $item->product = $menu;

            return $item;
        })->all();
        return view('pages.cart',[
            'foods'=>$items,
            'subtotal'=> $this->cart->getSubTotal(),
            'total'=> $this->cart->getTotal()
        ]);
    }

    public function show($slug){
    }
    public function create(Request $request){}

    public function update(UpdateCartRequest $request, $id){
        $this->cart->updateQuantityInCart($id, $request->quantity);

        $request->session()->flash('message','Add to cart successful');

        return back();
    }

    public function edit($id){}

    public function store(AddCartRequest $request){
        $product = $this->_foodmenu->findProductById($request->product);
        //return $product;
        $cart = $this->cart->addToCart($product, $request->input('quantity'));
        return redirect()->route('cart.index');
    }

    public function destroy($id){
        $this->cart->removeToCart($id);

        request()->session()->flash('message','Food Successfully Removed');
        return back();
    }
}

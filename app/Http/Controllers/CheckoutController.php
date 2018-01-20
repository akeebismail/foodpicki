<?php

namespace App\Http\Controllers;

use App\Food\Address\AddressRepository\AddressInterface;
use App\Food\Cart\CartRepository\CartInterface;
use App\Food\MenuFood\MenuFood;
use App\Food\MenuFood\Repository\MenuFoodInterface;
use App\Food\MenuFood\Repository\MenuFoodRepository;
use App\Food\Order\Order;
use App\Food\Order\Repository\OrderInterface;
use App\Food\Order\Repository\OrderProductInterface;
use App\Food\Payment\PaypalXpress;
use Gloudemans\Shoppingcart\CartItem;
use Illuminate\Http\Request;
use Auth;

class CheckoutController extends Controller
{
    private $cartRepo;
    private $addressRepo;
    private $customerRepo;
    private $productRepo;
    private $orderPro;
    private $orderRepo;

    private $paypal;
    public function __construct(
        OrderInterface $order,CartInterface $cart,AddressInterface $address,
        OrderProductInterface $orderProduct, MenuFoodInterface $menuFood
    )
    {
        $this->middleware(['auth']);
        $this->orderRepo = $order;
        $this->productRepo = $menuFood;
        $this->addressRepo = $address;
        $this->cartRepo = $cart;
        $this->orderPro = $orderProduct;
        $this->paypal = new PaypalXpress(
            config('paypal.client_id'),config('paypal.client_secret'),
            config('paypal.mode'),config('paypal.api_url')
        );
    }

    public function index(){
        $customer = AUth::user();
        $menufood = new MenuFoodRepository(new MenuFood);
        $items = collect($this->cartRepo->getCartItems())->map(function (CartItem $item) use ($menufood){
            $food = $menufood->findProductById($item->id);
            $item->product = $food;
            $item->image = $food->images;

            return $item;
        });

        return $items;
    }

    public function show($id){}

    public function store(Request $request){
    }

    public function create(){}

    public function destroy(){}
}

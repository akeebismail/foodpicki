<?php
/**
 * Created by PhpStorm.
 * User: KIBB
 * Date: 10/17/2017
 * Time: 2:12 AM
 */
namespace App\Food\Order\Repository;

use App\Food\FoodBase\Repository\FoodRepository;
use App\Food\MenuFood\MenuFood;
use App\Food\Order\Order;
use App\Food\Order\OrderMenuFood;
use App\Food\Order\Repository\OrderProductInterface;
use App\Food\Order\Repository\OrderRepository;
use App\OrderProduct;
use App\Product;

class OrderProductRepositry extends FoodRepository implements OrderProductInterface {

    public function __construct(OrderMenuFood $model)
    {
        parent::__construct($model);
    }

    public function createOrderDetail(Order $order, MenuFood $product,  $qty){
        $orderRepo = new OrderRepository($order);

        $orderRepo->associateProduct($product, $qty);

        return $orderRepo->findProducts($order);
    }
}
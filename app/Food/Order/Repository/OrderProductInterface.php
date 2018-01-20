<?php
/**
 * Created by PhpStorm.
 * User: KIBB
 * Date: 10/17/2017
 * Time: 2:28 AM
 */
namespace App\Food\Order\Repository;


use App\Food\FoodBase\Repository\FoodInterface;
use App\Food\MenuFood\MenuFood;
use App\Food\Order\Order;

interface OrderProductInterface extends FoodInterface {

    public function createOrderDetail(Order $order, MenuFood $product, $qty);

}
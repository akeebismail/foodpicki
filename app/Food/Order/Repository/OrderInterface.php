<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/16/18
 * Time: 9:07 PM
 */

namespace App\Food\Order\Repository;

use App\Food\FoodBase\Repository\FoodInterface;
use App\Food\MenuFood\MenuFood;
use App\Food\Order\Order;

interface  OrderInterface extends FoodInterface{

    public function createOrder(array $data);

    public function updateOrder(array $update);

    public function findOrderById( $id);

    public function listOrders($order = 'id',  $sort = 'desc', array $columns = ['*']);

    public function findProducts(Order $order);

    public function associateProduct(MenuFood $product,  $quantity);

    public function searchOrder( $text) ;
}
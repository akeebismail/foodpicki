<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/16/18
 * Time: 9:08 PM
 */

namespace App\Food\Order\Repository;

use App\Food\FoodBase\Repository\FoodRepository;
use App\Food\MenuFood\MenuFood;
use App\Food\MenuFood\Repository\MenufoodNotFoundExcption;
use App\Food\MenuFood\Repository\MenuFoodRepository;
use App\Food\Order\Order;
use App\Food\User\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

class OrderRepository extends FoodRepository implements OrderInterface {

    public function __construct(Order $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }
    public function createOrder(array $data)
    {
        try{
            $order = $this->model->create($data);
            $customer = User::where('id',$order->user_id)->get();
           // event() send mail

            return $order;
        }catch (QueryException $exception){
            return $exception;
        }
    }

    public function updateOrder(array $update)
    {
        try{
            $order = $this->model->update($update);
            return $order;
        }catch (QueryException $exception){
            return $exception;
        }
    }

    public function findOrderById($id)
    {
        try{
            return $this->findOneByOrFail($id);
        }catch (ModelNotFoundException $exception){
            throw new MenufoodNotFoundExcption($exception);
        }
    }

    public function listOrders($order = 'id', $sort = 'desc', array $columns = ['*'])
    {
        // TODO: Implement listOrders() method.
        return $this->all($columns,$order,$sort);
    }

    public function findProducts(Order $order)
    {
        // TODO: Implement findProducts() method.

        return $order->menufood;
    }

    public function associateProduct(MenuFood $product, $quantity)
    {
        // TODO: Implement associateProduct() method.
        $this->model->menufood()->attach($product,['quantity'=>$quantity]);
        $this->updateProductQuantity($product,$quantity);
    }


    private function updateProductQuantity($product,$qty){
        $productRepo = new MenuFoodRepository($product);
        $quantiti = $product->quantity - $qty;
        $productRepo->updateProduct(compact('quantiti'),$product->id);
    }

    public function searchOrder($text)
    {
        // TODO: Implement searchOrder() method.
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/4/18
 * Time: 6:52 PM
 */
namespace App\Food\Cart\CartRepository;

use App\Food\FoodBase\Repository\FoodInterface;
use App\Food\MenuFood\MenuFood;

interface CartInterface extends FoodInterface{
    public function addToCart(MenuFood $menuFood, int $int, $options = []);

    public function getCartItems();

    public function removeToCart(string $rowId);

    public function countItems() : int;

    public function getSubTotal();

    public function getTotal(int $decimals = 2);

    public function updateQuantityInCart(string $rowId, int $quantity);

    public function findItem(string $rowId);

    public function getTax() : float;

    public function clearCart();
}
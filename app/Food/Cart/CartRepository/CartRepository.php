<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/4/18
 * Time: 6:52 PM
 */
namespace App\Food\Cart\CartRepository;
use App\Food\Cart\ShoppingCart;
use App\Food\FoodBase\Repository\FoodRepository;
use App\Food\MenuFood\MenuFood;
use Gloudemans\Shoppingcart\Exceptions\InvalidRowIDException;

class CartRepository extends FoodRepository implements CartInterface {
    public function __construct(ShoppingCart $cart)
    {
        $this->model = $cart;
    }

    /**
     * @param MenuFood $menuFood
     * @param int $int
     * @param array $options
     */
    public function addToCart(MenuFood $menuFood, int $int, $options = [])
    {
        $this->model->add($menuFood, $int, $options);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getCartItems()
    {
        return $this->model->content();
    }

    /**
     * @param string $rowId
     */
    public function removeToCart(string $rowId)
    {
        try {
            $this->model->remove($rowId);
        } catch (InvalidRowIDException $e) {
            throw new ProductInCartNotFoundException($e->getMessage());
        }
    }

    /**
     * Count the items in the cart
     *
     * @return int
     */
    public function countItems() : int
    {
        return $this->model->count();
    }

    /**
     * Get the sub total of all the items in the cart
     *
     * @return float
     */
    public function getSubTotal()
    {
        return $this->model->subtotal();
    }

    /**
     * Get the final total of all the items in the cart minux tax
     *
     * @param int $decimals
     * @return float
     */
    public function getTotal(int $decimals = 2)
    {
        return $this->model->total($decimals);
    }

    public function updateQuantityInCart(string $rowId, int $quantity)
    {
        $this->model->update($rowId, $quantity);
    }

    /**
     * Return the specific item in the cart
     *
     * @param string $rowId
     * @return \Gloudemans\Shoppingcart\CartItem
     */
    public function findItem(string $rowId)
    {
        return $this->model->get($rowId);
    }

    /**
     * Returns the tax
     *
     * @return float
     */
    public function getTax() : float
    {
        return $this->model->tax;
    }

    /**
     * Clear the cart content
     */
    public function clearCart()
    {
        $this->model->destroy();
    }
}
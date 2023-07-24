<?php

namespace ShoppingCart;
use Exception;
class CartItem
{
    /**
     * cart item properties
     */
    private Product $product;
    private int $quantity;

    public function __construct(Product $product, int $quantity = 1)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    /**
     * getters and setters
     */

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct(Product $product)
    {
        $this->product = $product;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * increase quantity 
     * @param int $quantity
     * 
     */
    public function increaseQuantity(int $quantity)
    {
        // quantity should not exceed available quantity
        if($this->quantity + $quantity > $this->getProduct()->getAvailableQuantity()){
            throw new Exception("there is no enough quantity from this product");
        }else{
            $this->quantity += $quantity;
        }
    }

    /**
     * decrease quantity
     * @param int $quantity
     * 
     */
    public function decreaseQuantity(int $quantity)
    {
        // quantity should not be less than zero
        if($this->quantity-$quantity<0){
            throw new Exception("quantity should not be less than ZERO");
        }else{
            $this->quantity -= $quantity;
        }
    }

}
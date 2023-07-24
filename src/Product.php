<?php
namespace ShoppingCart;
class Product
{

    /**
     * product properties
     */
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;

    /**
     * product constructor
     */
    public function __construct(int $id,string $title, float $price, int $availableQuantity)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }

    /**
     * getters and setters
     */
    public function getId():int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title  = $title;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price)
    {
        $this->price  = $price;
    }

    public function getAvailableQuantity(): int
    {
        return $this->availableQuantity;
    }

    public function setAvailableQuantity(int $availableQuantity)
    {
        $this->availableQuantity  = $availableQuantity;
    }

    /**
     * add to cart method
     */

    public function addToCart(Cart $cart,int $quantity=1)
    {
        return $cart->addProduct($this,$quantity);
    }
}

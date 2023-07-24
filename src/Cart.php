<?php
namespace ShoppingCart;

class Cart
{
   /**
    *  @var array $items[]
    */
   private array $items = [];

   /**
    * add product method
    * @param Product $product
    * @param int $quantity
    * 
    * @return CartItem
    */

   public function addProduct(Product $product, int $quantity = 1): CartItem
   {
      // check if the product is already in the cart
      $cartItem = $this->findProduct($product);
      if (!$cartItem) {
         $cartItem = new CartItem($product, 0);
      }
      $cartItem->increaseQuantity($quantity);

      $this->items[] = $cartItem;
      return $cartItem;
   }

   private function findProduct(Product $product)
   {
      foreach ($this->items as $item) {
         if ($item->getProduct()->getId() === $product->getId()) {
            return $item;
         }
         return null;
      }
   }

   /**
    * total price
    * 
    * @return float
    */

   public function totalPrice(): float
   {
      $totalPrice = 0;
      foreach ($this->items as $item) {
         $totalPrice += $item->getProduct()->getPrice() * $item->getQuantity();
      }
      return $totalPrice;
   }

   /**
    * total quantity
    * 
    * @return  int
    */

   public function totalQuantity(): int
   {
      $totalQuantity = 0;
      foreach ($this->items as $item) {
         $totalQuantity += $item->getQuantity();
      }
      return $totalQuantity;
   }

   /**
    * remove product
    * @param Product $product
    */

   public function removeProduct(Product $product)
   {
      foreach ($this->items as $key => $item) {
         if ($product === $item->getProduct()) {
            unset($this->items[$key]);
         }
      }
   }

   /**
    * clear cart
    */

   public function clear()
   {
      $this->items = [];
   }

}
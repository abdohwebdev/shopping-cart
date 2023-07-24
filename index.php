<?php

require_once __DIR__ . '/vendor/autoload.php';

use ShoppingCart\Cart;
use ShoppingCart\Product;

// Add new products to the shop
$product1 = new Product(0, 'Huawie y6s', 2500, 10);
$product2 = new Product(1, 'Galaxy note10', 3000, 14);

// Create new cart
$cart = new Cart();

// Add products to cart
$cartItem1 = $product1->addToCart($cart, 3);
$cartItem2 = $cart->addProduct($product2, 2);

// Increase quantity
$cartItem1->increaseQuantity(5);
$cartItem2->increaseQuantity(3);

// Print total price
echo $cart->totalPrice() . PHP_EOL;
// Print total quantity
echo $cart->totalQuantity() . PHP_EOL;


// Decrease quantity
$cartItem1->decreaseQuantity(2);
$cartItem2->decreaseQuantity(1);

// Print total price
echo $cart->totalPrice() . PHP_EOL;
// Print total quantity
echo $cart->totalQuantity() . PHP_EOL;


// Remove product from cart 
$cart->removeProduct($product1);

// Print total price
echo $cart->totalPrice() . PHP_EOL;
// Print total quantity
echo $cart->totalQuantity() . PHP_EOL;

// Clear cart
$cart->clear();

// Print total price
echo $cart->totalPrice() . PHP_EOL;
// Print total quantity
echo $cart->totalQuantity() . PHP_EOL;


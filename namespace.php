<?php
/**
 * Standard way of define class
 */
class Product {}  // Define

$product = new Product(); // Use

/**
 * Using Namespaces
 */
namespace App;

class Product{}

$product = new App\Product();


/**
 * Useit in other file and another way.
 */

 use App;
 $product = new Product();

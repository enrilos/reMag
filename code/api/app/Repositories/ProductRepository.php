<?php

namespace App\Repositories;

use App\Contracts\Repositories\IProductRepository;

class ProductRepository implements IProductRepository
{
    private static $products = array(
        [
            'id' => 10,
            'name' => 'Italian Pizza'
        ],
        [
            'id' => 15,
            'name' => 'Burrito'
        ],
        [
            'id' => 20,
            'name' => 'Pasta'
        ],
        [
            'id' => 25,
            'name' => 'New York Pizza'
        ]
    );

    public function all()
    {
        return self::$products;
    }

    public function get($id)
    {
        foreach (self::$products as $product) {
            if (array_key_exists('id', $product) && $product['id'] === $id) {
                return $product;
            }
        }

        return null;
    }

    public function by($column, $value)
    {
        $matchingProducts = [];

        foreach (self::$products as $product) {
            if (array_key_exists($column, $product) && str_contains(strtolower($product[$column]), strtolower($value))) {
                $matchingProducts[] = $product;
            }
        }

        return $matchingProducts;
    }
}

<?php

namespace App\Models\Products;

use App\Exceptions\InvalidProductException;
use App\Interfaces\Factories\ProductSingletonFactoryInterface;
use Exception;

class ProductSingletonFactory implements ProductSingletonFactoryInterface
{
    public function getProduct(string $type): AbstractProduct|Exception
    {
        return match ($type) {
            'egg' => app(Egg::class),
            'milk' => app(Milk::class),
            default => throw InvalidProductException::invalidProductType(),
        };
    }
}

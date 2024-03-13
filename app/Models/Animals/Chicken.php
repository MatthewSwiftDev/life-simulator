<?php

namespace App\Models\Animals;

use App\Interfaces\ProductInterface;

class Chicken extends AbstractAnimal
{
    const MIN_QUANTITY_OF_PRODUCTS = 0;
    const MAX_QUANTITY_OF_PRODUCTS = 1;

    public function __construct()
    {
        $this->id = uniqid();
        $this->type = self::TYPE_CHICKEN;
        $this->typeOfProduct = ProductInterface::TYPE_EGG;
        $this->productivityPerDay = rand(self::MIN_QUANTITY_OF_PRODUCTS, self::MAX_QUANTITY_OF_PRODUCTS);
    }
}

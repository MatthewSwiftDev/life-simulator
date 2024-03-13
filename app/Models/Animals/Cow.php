<?php

namespace App\Models\Animals;

use App\Interfaces\ProductInterface;

class Cow extends AbstractAnimal
{
    const MIN_QUANTITY_OF_PRODUCTS = 8;
    const MAX_QUANTITY_OF_PRODUCTS = 12;

    public function __construct()
    {
        $this->id = uniqid();
        $this->type = self::TYPE_COW;
        $this->typeOfProduct = ProductInterface::TYPE_MILK;
        $this->productivityPerDay = rand(self::MIN_QUANTITY_OF_PRODUCTS, self::MAX_QUANTITY_OF_PRODUCTS);
    }
}

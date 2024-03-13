<?php

namespace App\Models\Products;

class Egg extends AbstractProduct
{
    public function __construct()
    {
        $this->typeOfProduct = self::TYPE_EGG;
        $this->quantityOfProduction = self::ZERO_QUANTITY_OF_PRODUCTS;
    }
}

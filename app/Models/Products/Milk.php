<?php

namespace App\Models\Products;

class Milk extends AbstractProduct
{
    public function __construct()
    {
        $this->typeOfProduct = self::TYPE_MILK;
        $this->quantityOfProduction = self::ZERO_QUANTITY_OF_PRODUCTS;
    }
}

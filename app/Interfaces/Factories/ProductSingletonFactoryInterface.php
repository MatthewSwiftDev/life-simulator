<?php

namespace App\Interfaces\Factories;

use App\Models\Products\AbstractProduct;
use Exception;

interface ProductSingletonFactoryInterface
{
    public function getProduct(string $type): AbstractProduct|Exception;
}

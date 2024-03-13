<?php

namespace App\Interfaces\Services;

interface ProductServiceInterface
{
    public function collectProductsFromAnimals(array $animals): array;
}

<?php

namespace App\Interfaces;

interface ProductInterface
{
    const TYPE_EGG                  = 'egg';
    const TYPE_MILK                 = 'milk';
    const ZERO_QUANTITY_OF_PRODUCTS = 0;

    public function getTypeOfProduct(): string;

    public function setTypeOfProduct(string $typeOfProduct): self;

    public function getQuantityOfProduction(): int;

    public function setQuantityOfProduction(int $quantityOfProduction): self;
}

<?php

namespace App\Interfaces;

interface FarmInterface
{
    public function getAnimals(): array;

    public function setAnimals(array $animals): self;

    public function getProducts(): array;

    public function setProducts(array $products): self;
}

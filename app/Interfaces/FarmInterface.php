<?php

namespace App\Interfaces;

interface FarmInterface
{
    public function getAnimals(): array;

    public function setAnimals($animals): self;

    public function getProducts(): array;

    public function setProducts($products): self;
}

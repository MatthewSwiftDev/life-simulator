<?php

namespace App\Models;

use App\Interfaces\FarmInterface;

class Farm implements FarmInterface
{
    private array $animals = [];
    private array $products = [];

    public function getAnimals(): array
    {
        return $this->animals;
    }

    public function setAnimals(array $animals): self
    {
        $this->animals = $animals;
        return $this;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function setProducts(array $products): self
    {
        $this->products = $products;
        return $this;
    }
}

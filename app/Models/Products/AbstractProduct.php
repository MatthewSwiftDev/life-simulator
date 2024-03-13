<?php

namespace App\Models\Products;

use App\Interfaces\ProductInterface;

abstract class AbstractProduct implements ProductInterface
{
    protected string $typeOfProduct;
    protected int $quantityOfProduction;

    public function setTypeOfProduct($typeOfProduct): self
    {
        $this->typeOfProduct = $typeOfProduct;
        return $this;
    }

    public function getTypeOfProduct(): string
    {
        return $this->typeOfProduct;
    }

    public function setQuantityOfProduction($quantityOfProduction): self
    {
        $this->quantityOfProduction = $quantityOfProduction;
        return $this;
    }

    public function getQuantityOfProduction(): int
    {
        return $this->quantityOfProduction;
    }
}

<?php

namespace App\Models\Animals;

use App\Interfaces\AnimalInterface;

abstract class AbstractAnimal implements AnimalInterface
{
    protected string $id;
    protected string $type;
    protected string $typeOfProduct;
    protected int $productivityPerDay;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getTypeOfProduct(): string
    {
        return $this->typeOfProduct;
    }

    public function setTypeOfProduct(string $typeOfProduct): self
    {
        $this->typeOfProduct = $typeOfProduct;
        return $this;
    }

    public function getProductivityPerDay(): int
    {
        return $this->productivityPerDay;
    }

    public function setProductivityPerDay(int $productivityPerDay): self
    {
        $this->productivityPerDay = $productivityPerDay;
        return $this;
    }
}

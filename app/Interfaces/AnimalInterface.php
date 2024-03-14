<?php

namespace App\Interfaces;

interface AnimalInterface
{
    const TYPE_CHICKEN = 'chicken';
    const TYPE_COW = 'cow';

    public function getId(): string;

    public function setId(int $id): self;

    public function getType(): string;

    public function setType(string $type): self;

    public function getTypeOfProduct(): string;

    public function setTypeOfProduct(string $typeOfProduct): self;

    public function getProductivityPerDay(): int;

    public function setProductivityPerDay(int $productivityPerDay): self;
}

<?php

namespace App\Interfaces\Services;

interface FarmServiceInterface
{
    public function addAnimalsByType(string $type, int $quantity): bool;
    public function getQuantityTypeAnimals(): array;
    public function collectProducts(): bool;
    public function getQuantityProducts(): array;
}

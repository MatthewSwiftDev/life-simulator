<?php

namespace App\Interfaces\Services;

interface AnimalServiceInterface
{
    public function getAnimalsByType(string $type, int $quantity): array;
}

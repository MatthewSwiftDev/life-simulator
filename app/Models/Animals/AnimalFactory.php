<?php

namespace App\Models\Animals;

use App\Exceptions\InvalidAnimalException;
use App\Interfaces\Factories\AnimalFactoryInterface;
use Exception;

class AnimalFactory implements AnimalFactoryInterface
{
    public function createAnimal(string $type): AbstractAnimal|Exception
    {
        return match ($type) {
            'chicken' => new Chicken(),
            'cow' => new Cow(),
            default => throw InvalidAnimalException::invalidAnimalType(),
        };
    }
}

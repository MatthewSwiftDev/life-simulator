<?php

namespace App\Services;

use App\Exceptions\InvalidAnimalException;
use App\Interfaces\Factories\AnimalFactoryInterface;
use App\Interfaces\Services\AnimalServiceInterface;

class AnimalService implements AnimalServiceInterface
{
    private AnimalFactoryInterface $animalFactory;

    public function __construct(
        AnimalFactoryInterface $animalFactory,
    ) {
        $this->animalFactory = $animalFactory;
    }

    public function getAnimalsByType(string $type, int $quantity): array
    {
        $animals = [];

        for ($i = 0; $i < $quantity; $i++) {
            try {
                $animals[] = $this->animalFactory->createAnimal($type);
            } catch (InvalidAnimalException $e) {
                return [];
            }
        }

        return $animals;
    }
}

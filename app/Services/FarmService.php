<?php

namespace App\Services;

use App\Interfaces\FarmInterface;
use App\Interfaces\Services\FarmServiceInterface;
use App\Interfaces\Services\AnimalServiceInterface;
use App\Interfaces\Services\ProductServiceInterface;

class FarmService implements FarmServiceInterface
{
    private AnimalServiceInterface $animalService;
    private ProductServiceInterface $productService;
    private FarmInterface $farm;

    public function __construct(
        AnimalServiceInterface $animalService,
        ProductServiceInterface $productService,
        FarmInterface $farm
    ) {
        $this->animalService = $animalService;
        $this->productService = $productService;
        $this->farm = $farm;
    }

    public function addAnimalsByType(string $type, int $quantity): bool
    {
        $animals = $this->animalService->getAnimalsByType($type, $quantity);
        $totalAnimals = array_merge($this->farm->getAnimals(), $animals);
        $this->farm->setAnimals($totalAnimals);

        return true;
    }

    public function getQuantityTypeAnimals(): array
    {
        $types = [];

        foreach ($this->farm->getAnimals() as $animal) {
            $types[] = $animal->getType();
        }

        return array_count_values($types);
    }

    public function collectProducts(): bool
    {
        $products = $this->productService->collectProductsFromAnimals($this->farm->getAnimals());
        $this->farm->setProducts($products);

        return true;
    }

    public function getQuantityProducts(): array
    {
        return $this->farm->getProducts();
    }
}
